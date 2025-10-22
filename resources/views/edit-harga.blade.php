<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Harga Produk</title>
<style>
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #4facfe, #00f2fe);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background: #ffffffdd;
        backdrop-filter: blur(5px);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 100%;
        text-align: center;
        animation: fadeIn 0.8s ease;
    }

    h2 {
        color: #333;
        margin-bottom: 15px;
    }

    p {
        color: #555;
        margin: 8px 0;
    }

    b {
        color: #0078ff;
    }

    label {
        display: block;
        text-align: left;
        margin-top: 15px;
        font-weight: bold;
        color: #333;
    }

    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        border: 2px solid #0078ff;
        border-radius: 8px;
        font-size: 16px;
        outline: none;
        transition: 0.3s;
    }

    input[type="number"]:focus {
        border-color: #00c6ff;
        box-shadow: 0 0 10px rgba(0, 198, 255, 0.5);
    }

    button {
        background: linear-gradient(to right, #0078ff, #00c6ff);
        color: white;
        padding: 12px 20px;
        margin-top: 20px;
        border: none;
        border-radius: 25px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        transition: 0.3s;
    }

    button:hover {
        background: linear-gradient(to right, #005fcc, #0094cc);
        transform: scale(1.05);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
</head>
<body>
<div class="container">
    <h2>Form Ubah Harga Produk</h2>
    <p>Nama Produk: <b>Laptop ASUS</b></p>
    <p>Kategori: <b>Elektronik</b></p>
    <p>Harga Saat Ini: <b>Rp5.000.000</b></p>
    <form action="/produk/update-harga" method="POST">
        @csrf
        @method('PATCH')
        <label>Harga Baru:</label>
        <input type="number" name="harga" value="5000000" required>
        <button type="submit">Perbarui Harga</button>
    </form>
</div>
</body>
</html>
