<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Edit Antrian</title>
</head>
<body>
    <?= $this->include('layout/header') ?>
<h2>Edit Antrian</h2>
<form method="post" action="/antrian/update/<?= $antrian['id'] ?>">
    <div class="form-group row">
        <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12">
    Nomor Antrian: <input type="text" class="form-control" name="nomor_antrian" value="<?= $antrian['nomor_antrian'] ?>" required><br>
    Nama Pengunjung: <input type="text" class="form-control" name="nama_pengunjung" value="<?= $antrian['nama_pengunjung'] ?>" required><br>
    Pelayanan:
    <select name="id_pelayanan" class="form-control">
        <?php foreach ($pelayanan as $p): ?>
            <option value="<?= $p['id'] ?>" <?= $p['id'] == $antrian['id_pelayanan'] ? 'selected' : '' ?>>
                <?= $p['nama_pelayanan'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>
    Loket:
    <select name="id_loket" class="form-control">
        <?php foreach ($loket as $l): ?>
            <option value="<?= $l['id'] ?>" <?= $l['id'] == $antrian['id_loket'] ? 'selected' : '' ?>>
                <?= $l['nama_loket'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>
    Waktu: <input type="datetime-local" class="form-control" name="waktu" value="<?= date('Y-m-d\TH:i', strtotime($antrian['waktu'])) ?>" required><br>
    <button type="submit" style="background-color:LightGray;" class="btn">Update</button>
        </div>
        </div>
    </div>
</form>
</body>
</html>