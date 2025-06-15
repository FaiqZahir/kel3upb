<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Edit Loket</title>
</head>
<body>
    <?= $this->include('layout/header') ?>
    <h2>Edit Loket</h2>
    <form action="/loket/update/<?= $loket['id'] ?>" method="post">
        <div class="form-group row">
            <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
            <label>Nama Loket:</label>
            <input type="text" class="form-control" name="nama_loket" value="<?= $loket['nama_loket'] ?>" required><br>
            <button type="submit" style="background-color:LightGray;" class="btn">Update</button>
            </div>
            </div>
        </div>
    </form>
</body>
</html>