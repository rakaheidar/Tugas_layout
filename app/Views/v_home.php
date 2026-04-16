<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">
  <div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">
      <div class="card-body">
        <h5 class="card-title">Produk</h5>
        <div class="d-flex align-items-center">
          <div class="ps-3">
            <h6>Daftar Produk</h6>
            <p>Kelola daftar produk untuk toko Anda.</p>
            <a href="<?= base_url('produk') ?>" class="btn btn-sm btn-primary">Lihat Produk</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xxl-4 col-md-6">
    <div class="card info-card revenue-card">
      <div class="card-body">
        <h5 class="card-title">Transaksi</h5>
        <div class="d-flex align-items-center">
          <div class="ps-3">
            <h6>Data Transaksi</h6>
            <p>Periksa riwayat transaksi pembelian.</p>
            <a href="<?= base_url('transaksi') ?>" class="btn btn-sm btn-primary">Lihat Transaksi</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xxl-4 col-md-6">
    <div class="card info-card customers-card">
      <div class="card-body">
        <h5 class="card-title">Tambah Produk</h5>
        <div class="d-flex align-items-center">
          <div class="ps-3">
            <h6>Tambah Barang Baru</h6>
            <p>Tambahkan produk baru ke katalog Anda.</p>
            <a href="<?= base_url('produk/tambah') ?>" class="btn btn-sm btn-primary">Tambah Produk</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
