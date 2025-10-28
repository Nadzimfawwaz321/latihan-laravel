<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Informasi Tiket Wisata</title>

    <style>
        /* 🌈 Background animasi colorful */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
            background: linear-gradient(135deg, #FF5E9C, #845EC2, #2EC4B6, #F9C80E);
            background-size: 400% 400%;
            animation: bgAnimation 10s ease infinite, fadeIn 1s ease-in-out;
        }

        @keyframes bgAnimation {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        /* 🌟 Card Glow Stylish */
        .ticket-box {
            background: rgba(255,255,255,0.25);
            padding: 28px;
            width: 350px;
            border-radius: 18px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(255,255,255,0.4);
            text-align: center;
            animation: popUp .7s ease;
        }

        @keyframes popUp {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .ticket-box p {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
            color: #fff;
            text-shadow: 1px 1px rgba(0,0,0,0.2);
        }

        /* 🔙 Tombol kembali animasi hover */
        a {
            display: inline-block;
            margin-top: 18px;
            padding: 10px 16px;
            text-decoration: none;
            color: #000;
            background: #F9C80E;
            border-radius: 12px;
            font-weight: bold;
            transition: .3s;
        }

        a:hover {
            background: #ffffff;
            transform: translateY(-6px) scale(1.12);
            box-shadow: 0 0 15px #fff;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

    <div class="ticket-box">
        <p>🌍 <strong>{{ $tempat }}</strong></p>
        <p>💸 Harga Tiket: <strong>Rp {{ number_format($harga, 0, ',', '.') }}</strong></p>
        <a href="/">⬅ Kembali</a>
    </div>

</body>
</html>
