$(function () {
  $('.TambahDataMhs').on('click', function () {
    $('#FormModalLabel').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Simpan Data');
  });

  $('.UbahDataMhs').on('click', function () {
    $('#FormModalLabel').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    //mengambil data
    const ambilId = $(this).data('id');
    console.log(ambilId);
  });
});
