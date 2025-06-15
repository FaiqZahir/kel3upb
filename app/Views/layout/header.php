<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Aplikasi Antrian' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/') ?>">Antrian App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('loket') ?>">Loket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pelayanan') ?>">Pelayanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('antrian') ?>">Antrian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">