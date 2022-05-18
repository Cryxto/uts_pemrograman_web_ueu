<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Data Beasiswa</h2>
            <br>
            <?php if (
            $validation->hasError('jenis')||
            $validation->hasError('tujuan')||
            $validation->hasError('informasi')
            ) : ?>
                <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors(); ?>
                </div>
            <?php endif; ?>
            <form action="/beasiswa/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="jenis">Jenis Beasiswa</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="<?= old('jenis'); ?>">
                </div>
                <div class="form-group">
                    <label for="tujuan">Beasiswa diperuntukan kepada</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?= old('tujuan'); ?>">
                </div>
                <div class="form-group">
                    <label for="informasi">Informasi</label>
                    <textarea style="white-space: pre-wrap;" class="form-control" id="informasi" name="informasi" rows="5" value="<?= old('informasi'); ?>"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>