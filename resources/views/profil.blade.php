<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f6d365, #fda085);
            text-align: center;
            padding: 80px;
        }
        .card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            display: inline-block;
            padding: 40px;
        }
        h2 {
            color: #d62828;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Profil Mahasiswa</h2>
        <p>Halo, ini profil milik <b>{{ $nama }}</b> 😄</p>
    </div>
</body>
</html>
