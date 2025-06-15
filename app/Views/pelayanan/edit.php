<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelayanan</title>
</head>
<body>
    <?= $this->include('layout/header') ?>
    <h2>Edit Pelayanan</h2>
    <form action="/pelayanan/update/<?= $pelayanan['id'] ?>" method="post">
        <div class="form-group row">
            <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
            <label>Nama Pelayanan:</label>
            <input type="text" class="form-control" name="nama_pelayanan" value="<?= $pelayanan['nama_pelayanan'] ?>" required><br>
            <button type="submit" style="background-color:LightGray;" class="btn">Update</button>
            </div>
            </div>
        </div>
    </form>
</body>
</html>