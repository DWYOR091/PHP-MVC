<div class="container mt-5">
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <button type="button" class="btn btn-primary mt-2 TambahDataMhs" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
    </button>
    <h3 class="mt-3">Data Mahasiswa: </h3>
    <div class="row">

        <div class="col-6">
            <?php foreach ($data['mhs'] as $mhs) {; ?>
                <ul class="list-group">
                    <li class="list-group-item "><?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary rounded-pill float-md-end mx-1">Detail</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal" class="badge bg-warning rounded-pill float-md-end UbahDataMhs" data-id="<?= $mhs['id'] ?>">Ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Yakin ingin menghapus ?')" class="badge bg-danger rounded-pill float-md-end mx-1">Hapus</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="FormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="FormModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL;  ?>/mahasiswa/tambah" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_mhs">ID</label>
                        <input type="text" class="form-control" id="id_mhs" name="id_mhs">
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM Mahasiswa</label>
                        <input type="text" class="form-control" id="npm" name="npm">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>