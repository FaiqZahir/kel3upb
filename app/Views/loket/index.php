<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Loket</title>
</head>
<body>
    <?= $this->include('layout/header') ?>
    <h2>Data Loket</h2>
    <a class="btn btn-primary" href="/loket/create">Tambah Loket</a>
    <div class="form-group row">
        <div class="table-responsive">
            <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama Loket</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($loket as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama_loket'] ?></td>
            <td>
                <a class="btn btn-info" href="/loket/edit/<?= $row['id'] ?>">Edit</a> |
                <a class="btn btn-danger" href="/loket/delete/<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </div>    
</body>
</html>