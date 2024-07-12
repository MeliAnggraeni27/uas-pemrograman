<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #e7e6ff;
      }
      .navbar {
        background-color: #343a40;
      }
      .navbar-brand {
        color: #fff;
        font-weight: bold;
      }
      .btn-primary {
        background-color: #9b009c;
        border: none;
      }
      .btn-primary:hover {
        background-color: #138496;
      }
      .btn-outline-primary {
        color: #17a2b8;
        border-color: #17a2b8;
      }
      .btn-outline-primary:hover {
        background-color: #17a2b8;
        color: white;
      }
      .card {
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .card-header {
        background-color: #ff00db;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }
      .table thead {
        background-color: #343a40;
        color: white;
      }
      .btn-link {
        padding: 0;
        border: none;
        background: none;
        color: #007bff;
      }
      .btn-link:hover {
        text-decoration: underline;
        color: #0056b3;
      }
      .btn-link.text-danger {
        color: #dc3545;
      }
      .btn-link.text-danger:hover {
        color: #c82333;
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Data Dosen</a>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center mb-4">Data Dosen</h1>
          <?php if (!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= session()->getFlashdata('message'); ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif ?>
          <div class="d-flex justify-content-between mb-3">
            <a href="<?= route_to('Dosen::tambah') ?>" class="btn btn-primary">Tambah Data</a>
            <div class="input-group w-50">
              <input type="text" class="form-control" placeholder="Cari data dosen...">
              <button class="btn btn-outline-primary" type="button">Cari</button>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              Daftar Dosen
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover text-nowrap table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nama Dosen</th>
                      <th>Alamat Dosen</th>
                      <th class="text-center">Bidang Studi</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $dosen) : ?>
                      <tr>
                        <td><?= $dosen['nama_dosen'] ?></td>
                        <td><?= $dosen['alamat_dosen'] ?></td>
                        <td><?= $dosen['bidang_studi'] ?></td>
                        <td class="text-center">
                          <a href="<?= route_to('Dosen::edit', $dosen['id_dosen']); ?>" class="btn btn-link">Edit</a>
                          <a href="<?= route_to('Dosen::hapus', $dosen['id_dosen']); ?>" class="btn btn-link text-danger" onclick="destroy(event)">Delete</a>
                          <a href="<?= route_to('Dosen::hadir', $dosen['id_dosen']); ?>" class="btn btn-primary">Hadir</a>
                                        <a href="<?= route_to('Dosen::tidak', $dosen['id_dosen']); ?>" class="btn btn-primary">tidak</a>
                                </td>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      function destroy(event) {
        if (!confirm('Are you sure you want to delete this item?')) {
          event.preventDefault();
        }
      }
    </script>
  </body>
</html>
