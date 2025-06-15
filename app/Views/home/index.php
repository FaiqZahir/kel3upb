<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
    body {
        background-color: #f8f9fa;
    }

    .home-container {
        padding: 40px 20px;
        text-align: center;
    }

    .home-title {
        font-size: 2.5rem;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 20px;
    }

    .home-subtitle {
        font-size: 1.2rem;
        color: #6c757d;
        margin-bottom: 30px;
    }

    .card-box {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card {
        width: 250px;
        border: none;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-title {
        font-weight: bold;
        font-size: 1.2rem;
    }

    .card-text {
        font-size: 0.95rem;
    }
    </style>
</head>
<body>
    <?= $this->include('layout/header') ?>
    <div class="container home-container">
    <h1 class="home-title">Selamat Datang</h1>
    <p class="home-subtitle">Ini adalah halaman utama.</p>
    
    <center>
        <div class="card-box">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Loket</h5>
                            <p class="card-text">Atur dan kelola data loket layanan.</p>
                            <a href="/loket" class="btn btn-primary btn-sm">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Pelayanan</h5>
                            <p class="card-text">Atur jenis layanan yang tersedia.</p>
                            <a href="/pelayanan" class="btn btn-primary btn-sm">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Antrian</h5>
                            <p class="card-text">Kelola dan pantau antrian pengunjung.</p>
                            <a href="/antrian" class="btn btn-primary btn-sm">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
    
</body>
</html>