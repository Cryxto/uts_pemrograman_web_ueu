<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data Beasiswa</h2>
            <br>
            <?php

use App\Controllers\Beasiswa;

 if (
            $validation->hasError('jenis')||
            $validation->hasError('tujuan')||
            $validation->hasError('informasi')
            ) : ?>
                <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors(); ?>
                </div>
            <?php endif; ?>
            <form action="/beasiswa/update/<?= $beasiswa['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $beasiswa['slug'] ?>">
                <div class="form-group">
                    <label for="jenis">Jenis Beasiswa</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="<?= (old('jenis'))?(old('jenis')):$beasiswa['jenis_beasiswa']; ?>">
                </div>
                <div class="form-group">
                    <label for="tujuan">Beasiswa diperuntukan kepada</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?= (old('tujuan'))?(old('tujuan')):$beasiswa['beasiswa_untuk']; ?>">
                </div>
                <div class="form-group">
                    <label for="informasi">Informasi</label>
                    <textarea style="white-space: pre-wrap;" class="form-control" id="informasi" name="informasi" rows="5"><?= (old('informasi'))?(old('informasi')):$beasiswa['informasi']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin?');">Ubah</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>