<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Beasiswa</h2>
            <div class="card mb-3" style="max-width: 720px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="../img/buku.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $beasiswa['jenis_beasiswa']; ?></h5>
                            <p class="card-text">Beasiswa diperuntukan untuk <?= $beasiswa['beasiswa_untuk']; ?></p>
                            <p class="card-text" style="text-align:justify ;"><small class="text-muted"><?= nl2br($beasiswa['informasi']); ?></small></p>

                            <a href="/beasiswa/edit/<?= $beasiswa['slug']; ?>" class="btn btn-warning">edit</a>
                            <form action="/beasiswa/delete/<?= $beasiswa['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                            </form>
                            <br><br>
                            <a href="../beasiswa">Kembali ke daftar beasiswa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>