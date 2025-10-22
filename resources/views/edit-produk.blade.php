v<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Produk</title>
<style>
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background: #ffffffdd;
        backdrop-filter: blur(6px);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 100%;
        animation: fadeIn 0.8s ease;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 15px;
        color: #333;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        border: 2px solid #0078ff;
        border-radius: 8px;
        font-size: 15px;
        outline: none;
        transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    select:focus {
        border-color: #00c6ff;
        box-shadow: 0 0 10px rgba(0, 198, 255, 0.4);
    }

    select {
        background-color: white;
        cursor: pointer;
    }

    button {
        background: linear-gradient(to right, #0078ff, #00c6ff);
        color: white;
        padding: 12px 20px;
        margin-top: 25px;
        border: none;
        border-radius: 25px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        transition: all 0.3s ease;
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
    <h2>Form Edit Produk</h2>
    <form action="/produk/update" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Produk:</label>
        <input type="text" name="nama" value="Laptop Lama">

        <label>Harga Produk:</label>
        <input type="number" name="harga" value="5000000">

        <label>Kategori:</label>
        <select name="kategori">
            <option value="Elektronik">Elektronik</option>
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
        </select>

        <button type="submit">Perbarui Data</button>
    </form>
</div>
</body>
</html>
