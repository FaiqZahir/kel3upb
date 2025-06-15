<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Antrian</title>
    <style>
        td {
            white-space: nowrap;
        }
    </style>
</head>
<body>
<?= $this->include('layout/header') ?>
<h2>Data Antrian</h2>
<a class="btn btn-primary" href="/antrian/create">Tambah Antrian</a>
    <div class="form-group row">
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th>Nomor</th>
                <th>Nama Pengunjung</th>
                <th>Pelayanan</th>
                <th>Loket</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($antrian as $a): ?>
            <tr>
                <td><?= esc($a['nomor_antrian']) ?></td>
                <td><?= esc($a['nama_pengunjung']) ?></td>
                <td><?= esc($a['nama_pelayanan']) ?></td>
                <td><?= esc($a['nama_loket']) ?></td>
                <td><?= esc($a['waktu']) ?></td>
                <td>
                    <a class="btn btn-info" href="/antrian/edit/<?= $a['id'] ?>">Edit</a> |
                    <a class="btn btn-danger" href="/antrian/delete/<?= $a['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a> |
                    <a class="btn btn-success" href="/antrian/invoice/<?= $a['id'] ?>" target="_blank">Cetak Invoice</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>