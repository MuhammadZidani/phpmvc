$(function() {
    $('.tombolTambahData').on('click', function() {
    $('#exampleModalLabel').html('Tambah Data Siswa');
    $('.modal-footer button[type=submit]').html('Save Changes');
    $('#nama').val('');
    $('#jenis_kelamin').val('');
    $('#alamat').val('');
    $('#id').val('');
    });
    $('.tampilModalUbah').on('click', function() {
    $('#exampleModalLabel').html('Ubah Data Siswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost:8080/php-mvc/public/siswa/ubah');
    const id = $(this).data('id');
    $.ajax({
    url: 'http://localhost:8080/php-mvc/public/siswa/getubah',
    data: {id : id},
    method: 'post',
    dataType: 'json',
    success: function(data) {
    $('#nama').val(data.nama);
    $('#jenis_kelamin').val(data.jenis_kelamin);
    $('#alamat').val(data.alamat);
    $('#id').val(data.id);
    }
    });
    });
    })