<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Kontak Kami</h1>
            <?php foreach($alamat as $adr): ?>
                <h3><?= $adr['jenis']; ?></h3>
                <ul class="list-unstyled">
                    <li>Alamat : <?= $adr['alamat']; ?></li>
                    <li>Telepon : <?= $adr['telp']; ?></li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>