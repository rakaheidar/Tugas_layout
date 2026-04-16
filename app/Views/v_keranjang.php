<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Transaksi</h5>
        <p>Daftar semua transaksi yang telah dilakukan.</p>
        
        <!-- Table with stripped rows -->
        <div class="table-responsive">
          <table class="table datatable table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>2024-01-15</td>
              <td>Rp 500.000</td>
              <td><span class="badge bg-success">Selesai</span></td>
              <td>
                <a href="#" class="btn btn-sm btn-info">Lihat</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
