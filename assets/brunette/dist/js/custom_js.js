$(document).ready(function(){
  var i = 1;
  var url = 'http://localhost/sijahit';
  loadTipeKategori();

  //insert nama kategori

  $('#simpan_nama_tipe').click(function(){
    var tipe = $('#namatipe').val();

    $.ajax({
      url: 'http://localhost/sijahit/admin/kategori/kategori/insert_tipe',
      method: "POST",
      data: {
        nama_tipe:tipe
      },
      success:function(data){
        $('#namatipe').val('');
        $('#pilihan_tipe option').remove();
        loadTipeKategori();

      }
    });

  });


  function loadTipeKategori(){
    $.ajax({
      type: "GET",
      url: 'http://localhost/sijahit/admin/kategori/kategori/getTipe',
      success:function(data){
        var jamal = JSON.parse(data);
        console.log(jamal[0].id_kategori_tipe);

        if(jamal.length > 0){
          $('#pilihan_tipe option').remove();
          for(i=0; i < jamal.length; i++){
            $('#pilihan_tipe').append('<option value="'+jamal[i].id_kategori_tipe+'">'+jamal[i]['nama_tipe']+'</option>')
          }
        } else{
          $('#pilihan_tipe option').remove();
          $('#pilihan_tipe').append('<option>kategori belum ada</option>')
        }
      } 
    });
  };


  var ukurannya;
  for(i=0; i < halo.length ; i++){
    ukurannya += '<option value='+halo[i].id_ukuran_kategori+'>'+halo[i].nama_ukuruan+'</option>';
  }

  $('#btn_tambah').click(function(){
    i++;
    $('#formnya').append('<div id="number'+i+'"><div id="number'+i+'" class="row">'+'<div class="form-group col-md-12">'+
      '<label for="firstName">Ukuran</label> <a id="'+i+'" class="float-right form_remove" style="color:red;cursor:pointer;">X</a>'+
      '<select class="form-control custom-select d-block w-100" name="tipe_ukuran[]" id="pilihan_ukuran_tipe" placeholder="Pilih Ukuran">'+
      ukurannya
      +
      '</select>'+
      '</div>'+
      '</div>'+
      '<div id="number'+i+'" class="row">'+
      '<div id="number'+i+'" class="col-md-6 form-group">'+
      '<label id="number'+i+'" for="firstName">Harga Minimal</label>'+
      '<input class="form-control" id="number'+i+'" name="hargamin[]" placeholder="" value="" type="number">'+
      '</div>'+
      '<div  id="number'+i+'" class="col-md-6 form-group">'+
      '<label for="lastName">Harga Maximal</label>'+
      '<input class="form-control" id="number'+i+'" name="hargamax[]" placeholder="" value="" type="number">'+
      '	</div>'+
      '	</div>'+
      '	</div></div>');

    $('.form_remove').click(function(){
      var button_id = $(this).attr("id");

      $('#number'+button_id+'').remove();
    });

  });

  $('#simpan_kategori').click(function(){
    var datanya = $('#form_tambahnya').serialize();
    $.ajax({
      type: 'post',
      url: 'http://localhost/sijahit/admin/kategori/kategori/insert_ukuran_range_harga',
      data: datanya,
      success:function(data){
        var gala = JSON.parse(data);
        console.log(gala);
      }
    });
  });

});
