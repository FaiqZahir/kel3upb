<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Antrian</title>
</head>
<body>
    <?= $this->include('layout/header') ?>
<h2>Tambah Antrian</h2>

<form method="post" action="/antrian/store">
    <div class="form-group row">
        <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12">
    <label>Nomor Antrian:</label> <input type="text" class="form-control" name="nomor_antrian" required><br>
    <label>Nama Pengunjung:</label> <input type="text"class="form-control" name="nama_pengunjung" required><br>
    <label>Pelayanan:</label>
    <select name="id_pelayanan" class="form-control">
        <?php foreach ($pelayanan as $p): ?>
            <option value="<?= $p['id'] ?>"><?= $p['nama_pelayanan'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label>Loket:</label>
    <select name="id_loket" class="form-control">
        <?php foreach ($loket as $l): ?>
            <option value="<?= $l['id'] ?>"><?= $l['nama_loket'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label>Waktu:</label> <input type="datetime-local" class="form-control" name="waktu" required><br>
        </div>
        </div>
    </div>
    <button type="submit" style="background-color:LightGray;" class="btn">Simpan</button>
       
</form>
</body>
</html>