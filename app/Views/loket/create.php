<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Loket</title>
</head>
<body>
    <?= $this->include('layout/header') ?>
    <h2>Tambah Loket</h2>
    <form action="/loket/store" method="post">
    <div class="form-group row">
        <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
        <label>Nama Loket:</label>
        <input type="text" class="form-control" name="nama_loket" required>
        </div>
        </div>
    </div>    
        <button type="submit" style="background-color:LightGray;" class="btn">Simpan</button>
    </form>
</body>
</html>