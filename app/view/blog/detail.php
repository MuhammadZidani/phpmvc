<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['guru']['no_kd']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['guru']['nama_guru']; ?></h6>
            <p class="card-text"><?= $data['guru']['mata_pelajaran']; ?></p>
            <a href="<?= BASE_URL; ?>/Blog" class="btn btn-secondary card-link">Kembali</a>
        </div>
    </div>
</div>