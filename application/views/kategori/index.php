<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Kategori</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a href="<?= base_url('kategori/tambah'); ?>" class="btn btn-sm btn-primary">Tambah Kategori</a>
          <?php if (!empty($kategori)): ?>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Kategori</th>
                  <th>Aksi</th>
                <tr>
              </thead>
              <tbody>
                <?php foreach ($kategori as $b): ?>
                  <tr>
                    <td><?= $b['kategori']; ?> </td>
                    <td>
                    <a href="<?= base_url('kategori/edit/' . $b['idkategori']); ?>" class="btn btn-sm btn-info">Edit</a>
                    <a href="<?= base_url('kategori/hapus/' . $b['idkategori']); ?>" class="btn btn-sm btn-danger" oneclick="return confirm('apakah anda yakin ingin menghapus kategori ini?')">Hapus</a>
                </td>
                </tr>
                    <?php endforeach; ?>
              </tbody>
            </table>
            <?php else: ?>
              <p>Tidak ada kategori yang tersedia.</p>
            <?php endif; ?>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>