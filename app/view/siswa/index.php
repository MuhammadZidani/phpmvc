<div class="container mt-5">
    <div class="col">
        <div class="col-6">
            <?php Flasher::flash(); ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Siswa
            </button>
            <h3 class="mt-3">Daftar Siswa</h3>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php foreach ($data['siswa'] as $siswa) : ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?= $siswa['id']; ?></td>
                        <td><?= $siswa['nama']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-danger m-1"
                                onclick="return confirm('Yakin Ingin Menghapus?');">Hapus</a>
                            <a href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>"
                                class="btn btn-success m-1 tampilModalUbah" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-id="<?= $siswa['id']; ?>">Ubah</a>
                            <a href=" <?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>"
                                class="btn btn-primary m-1">Detail</a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="http://localhost:8080/php-mvc/public/siswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class=" modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>