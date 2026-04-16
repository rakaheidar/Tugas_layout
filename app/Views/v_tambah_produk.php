<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tambah Produk</h5>
        <?= form_open('produk/simpan') ?>
          <?= csrf_field() ?>
          <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= old('nama_produk') ?>" required>
            <?php if (session()->has('errors') && isset(session('errors')['nama_produk'])) : ?>
              <div class="text-danger"><?= session('errors')['nama_produk'] ?></div>
            <?php endif; ?>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga') ?>" required>
            <?php if (session()->has('errors') && isset(session('errors')['harga'])) : ?>
              <div class="text-danger"><?= session('errors')['harga'] ?></div>
            <?php endif; ?>
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?= old('stok') ?>" required>
            <?php if (session()->has('errors') && isset(session('errors')['stok'])) : ?>
              <div class="text-danger"><?= session('errors')['stok'] ?></div>
            <?php endif; ?>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= base_url('produk') ?>" class="btn btn-secondary">Kembali</a>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>