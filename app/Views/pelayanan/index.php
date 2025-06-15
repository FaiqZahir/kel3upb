<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelayanan</title>
</head>
<body>
    <?= $this->include('layout/header') ?>
    <h2>Data Pelayanan</h2>
    <a class="btn btn-primary" href="/pelayanan/create">Tambah Pelayanan</a>
    <div class="form-group row">
        <div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama Pelayanan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($pelayanan as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama_pelayanan'] ?></td>
            <td>
                <a class="btn btn-info" href="/pelayanan/edit/<?= $row['id'] ?>">Edit</a> |
                <a class="btn btn-danger" href="/pelayanan/delete/<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
        </div>
    </div>
</body>
</html>