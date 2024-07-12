<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <?php if (! empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <ul class="mb-0">
                <?php foreach (session()->getFlashdata('message') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>

    <a href="<?= route_to('Dosen::index') ?>" class="btn btn-md btn-warning mb-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= route_to('Dosen::update', $dosen['id_dosen']) ?>">
                <input type="hidden" name="_method" value="put">

                <div class="mb-4">
                    <label for"kode_dosen">nama_dosen</label>
                    <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" value="<?= $dosen['kode_dosen'] ?>">
                </div>

                <div class="mb-4">
                    <label for"nama_dosen">alamat_dosen</label>
                    <input type="text" name="nama_dosen" id="status_dosen" class="form-control" value="<?= $dosen['nama_dosen'] ?>">
                </div>

                <div class="mb-4">
                    <label for"status_dosen">bidang_studi</label>
                    <select name="status_dosen" id="status_dosen" class="form-control">
                        <option value="0" <?= (! $dosen['kode_dosen']) ? 'selected' : '' ?>>Tidak Aktif</option>
                        <option value="1" <?= ($dosen['status_dosen']) ? 'selected' : '' ?>>Aktif</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>