<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice Antrian</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .invoice-box {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .invoice-header {
            border-bottom: 2px solid #007bff;
            padding-bottom: 15px;
            margin-bottom: 25px;
            text-align: center;
        }

        .invoice-header h2 {
            margin: 0;
            color: #007bff;
        }

        .invoice-details p {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }

        .invoice-details strong {
            display: inline-block;
            width: 150px;
            color: #555;
        }

        .footer-line {
            margin-top: 30px;
            border-top: 1px dashed #ccc;
            padding-top: 10px;
            text-align: center;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="invoice-header">
            <h2>Invoice Antrian</h2>
        </div>

        <div class="invoice-details">
            <p><strong>Nomor Antrian:</strong> <?= esc($antrian['nomor_antrian']) ?></p>
            <p><strong>Nama Pengunjung:</strong> <?= esc($antrian['nama_pengunjung']) ?></p>
            <p><strong>Pelayanan:</strong> <?= esc($antrian['nama_pelayanan']) ?></p>
            <p><strong>Loket:</strong> <?= esc($antrian['nama_loket']) ?></p>
            <p><strong>Waktu:</strong> <?= esc($antrian['waktu']) ?></p>
        </div>

        <div class="footer-line">
            Terima kasih telah menggunakan layanan kami.
        </div>
    </div>
</body>
</html>
