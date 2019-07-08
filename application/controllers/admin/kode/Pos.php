<?php 

class Pos extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/kode/pos_mdl', 'pos');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/kode/pos',
				'data_pos' => $this->pos->get()
			];
			
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function tambah_data()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/kode/tambah'
			];
			$this->form_validation->set_rules('kode_pos', 'Kodepos', 'required|min_length[5]|is_unique[ongkir.kode_pos]');
			$this->form_validation->set_rules('harga', 'Biaya', 'required');

			$this->form_validation->set_message('is_unique', '{field} telah digunakan, silahkan ganti yang lain!');
			$this->form_validation->set_message('required', '%s masih kosong, silahkan isi!');
			$this->form_validation->set_message('min_length', '{field} minimal 5 karakter!');

			$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
			

			if($this->form_validation->run() == FALSE){
				$this->load->view('Templates/Admin/master_dashboard',$data);
			}else{
				$post = $this->input->post(null, TRUE);
				$this->pos->tambah($post);
				if($this->db->affected_rows() > 0){
					echo "<script>
						alert('Data berhasil disimpan');
					</script>";
				} 
				echo "<script>
					window.location='".site_url('admin/kode/pos')."';</script>";
			}
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function edit($id)
	{
		if(adminLoggedIn()){
			$this->form_validation->set_rules('kode_pos', 'Kodepos', 'required|min_length[5]|callback_code_check');
			$this->form_validation->set_rules('harga', 'Biaya', 'required');

			$this->form_validation->set_message('is_unique', '{field} telah digunakan, silahkan ganti yang lain!');
			$this->form_validation->set_message('required', '%s masih kosong, silahkan isi!');
			$this->form_validation->set_message('min_length', '{field} minimal 5 karakter!');

			$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
			

			if($this->form_validation->run() == FALSE){
				$data_pos = $this->pos->get($id);
				if(count($data_pos)>0){
					$data = [
						'isinya' => 'Admin/Dashboard/kode/edit',
						'row' => $data_pos
					];
					$this->load->view('Templates/Admin/master_dashboard',$data);
				}else{
					echo "<script>alert('Data tidak ditemukan');";
					echo "window.location='".site_url('admin/kode/pos')."';</script>";
				}				
			}else{
				$post = $this->input->post(null, TRUE);
				$this->pos->edit($post);
				if($this->db->affected_rows() > 0){
					echo "<script>
						alert('Data berhasil disimpan');
					</script>";
				} 
				echo "<script>
					window.location='".site_url('admin/kode/pos')."';</script>";
			}
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	function code_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM ongkir WHERE kode_pos='$post[kode_pos]'  AND kode_pos != '$post[kode]'");
		if($query->num_rows()>0){
			$this->form_validation->set_message('code_check', '%s sudah ada, silahkan ganti!');
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function del()
	{
		$id = $this->input->post('kode_pos');
		$this->pos->del($id);

		if($this->db->affected_rows() > 0){
					echo "<script>
						alert('Data berhasil dihapus');
					</script>";
		} 
		echo "<script>
			window.location='".site_url('admin/kode/pos')."';</script>";
	}
}