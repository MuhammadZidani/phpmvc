<div class="container mt-5">
    <div class="col">
        <div class="col-6">
            <?php Flasher::flash(); ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#guruModal">
                Tambah Data Guru
            </button>
            <h3 class="mt-3">Daftar Guru</h3>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Id</th>
                        <th scope="col">NO KD</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php foreach ($data['guru'] as $guru) : ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?= $guru['id']; ?></td>
                        <td class="text-center"><?= $guru['no_kd']; ?></td>
                        <td><?= $guru['nama_guru']; ?></td>
                        <td><?= $guru['mata_pelajaran']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASE_URL; ?>/Blog/hapus/<?= $guru['id']; ?>" class="m-1"
                                onclick="return confirm('Yakin Ingin Menghapus?');"><span
                                    class="badge bg-danger">Hapus</span></a>
                            <a href="<?= BASE_URL; ?>/Blog/ubah/<?= $guru['id']; ?>" class=" m-1 tampilModalUbah"
                                data-bs-toggle="modal" data-bs-target="#guruModal" data-id="<?= $guru['id'] ?>"><span
                                    class="badge bg-success">Ubah</span></a>
                            <a href="<?= BASE_URL; ?>/Blog/detail/<?= $guru['id']; ?>" class="m-1"><span
                                    class="badge bg-primary">Hapus</span></a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="guruModal" tabindex="-1" aria-labelledby="guruModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="http://localhost:8080/php-mvc/public/Blog/tambah" method="post">
                <div class=" modal-header">
                    <h5 class="modal-title" id="guruModalLabel">Tambah Data Guru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">No KD</label>
                        <input type="number" class="form-control" id="no_kd" name="no_kd">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Guru</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru">
                    </div>
                    <div class="form-group">
                        <label for="nama">Mapel</label>
                        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran">
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