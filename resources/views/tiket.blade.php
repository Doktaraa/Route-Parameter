<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            text-align: center;
            padding: 60px;
        }
        .card {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            display: inline-block;
        }
        h2 {
            color: #0077b6;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Informasi Tiket Wisata</h2>
        <p>Tempat Wisata: <b>{{ $tempat }}</b></p>
        <p>Harga Tiket: <b>Rp {{ number_format($harga, 0, ',', '.') }}</b></p>
    </div>
</body>
</html>
