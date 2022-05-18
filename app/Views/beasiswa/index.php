<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Beasiswa</h1>
            <a href="/beasiswa/create" class="btn btn-primary mb-3">Tambah Data Beasiswa</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenis Beasiswa</th>
                        <th scope="col">Beasiswa Diperuntukan Untuk</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($beasiswa as $bea) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <?php $i++; ?>
                            <td><?= $bea['jenis_beasiswa']; ?></td>
                            <td><?= $bea['beasiswa_untuk']; ?></td>
                            <td>
                                <a href="/beasiswa/<?= $bea['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br>
<?= $this->endSection(); ?>