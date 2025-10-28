<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Sistem Tiket Wisata</title>

    <style>
        /* ✨ Background animasi pelangi */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            color: #fff;
            margin: 0;
            padding: 50px;
            animation: fadeIn 1s ease-in-out;
            background: linear-gradient(135deg, #FF5E9C, #845EC2, #2EC4B6, #F9C80E);
            background-size: 400% 400%;
            animation: bgAnimation 10s ease infinite;
        }

        @keyframes bgAnimation {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        /* Card Glow Effect ✨ */
        .card {
            background: rgba(255, 255, 255, 0.2);
            padding: 25px;
            border-radius: 18px;
            width: 430px;
            margin: auto;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 18px rgba(255,255,255,0.4);
            animation: popUp 1s ease-in-out;
        }

        @keyframes popUp {
            0% {transform: scale(0.8); opacity: 0;}
            100% {transform: scale(1); opacity: 1;}
        }

        h2 {
            text-shadow: 2px 2px rgba(0,0,0,0.3);
        }

        /* Tombol animasi hover bounce */
        a {
            color: #000;
            padding: 10px 14px;
            font-weight: bold;
            background: #F9C80E;
            border-radius: 10px;
            margin: 5px;
            display: inline-block;
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            background: #ffffff;
            transform: translateY(-6px) scale(1.12);
            box-shadow: 0 0 15px #fff;
        }

        /* Smooth Fade */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>🎫 Selamat Datang di Sistem Tiket Wisata 🎡</h2>
        <p>Pilih tiket wisata di bawah ini:</p>

        <ul style="list-style:none; padding:0;">
            <li><a href="/tiket/Papuma/50000">Tiket Wisata Papuma 🌊</a></li>
            <li><a href="/tiket/WatuUlo/35000">Tiket Wisata Watu Ulo 🏖️</a></li>
            <li><a href="/tiket/PancerPuger/30000">Tiket Wisata Pancer Puger 🌅</a></li>
        </ul>
    </div>

</body>
</html>
