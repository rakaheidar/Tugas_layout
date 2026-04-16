<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Daftar Produk</h5>
        <?php if (session()->has('success')) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <div class="mb-3">
          <a href="<?= base_url('produk/tambah') ?>" class="btn btn-primary">Tambah Produk</a>
        </div>
        
        <!-- Table with stripped rows -->
        <div class="table-responsive">
          <table class="table datatable table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Stok</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($produk)) : ?>
              <?php foreach ($produk as $index => $item) : ?>
                <tr>
                  <th scope="row"><?= $index + 1 ?></th>
                  <td><?= esc($item['nama_produk']) ?></td>
                  <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
                  <td><?= $item['stok'] ?></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-info">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="5" class="text-center">Tidak ada produk.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
