<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Input Produk</title>
<style>
    /* Background dan layout */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* Card Form */
    .form-container {
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        width: 320px;
        animation: fadeIn 0.8s ease;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        color: #333;
    }

    /* Input dan Select */
    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 10px;
        margin-top: 6px;
        margin-bottom: 15px;
        border: 2px solid #4facfe;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    input:focus,
    select:focus {
        outline: none;
        border-color: #00c6ff;
        box-shadow: 0 0 8px #00c6ff;
    }

    /* Tombol */
    button {
        width: 100%;
        padding: 12px;
        background: linear-gradient(90deg, #4facfe, #00f2fe);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 242, 254, 0.4);
    }

    button:active {
        transform: scale(0.98);
    }

    /* Animasi */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
</head>
<body>
<div class="form-container">
    <h2>Form Input Produk</h2>
    <form action="/kirim-produk" method="POST">
        @csrf <!-- Token keamanan wajib di setiap form POST -->
        <label>Nama Produk:</label><br>
        <input type="text" name="nama" required><br>
        <label>Harga Produk:</label><br>
        <input type="number" name="harga" required><br>
        <label>Kategori:</label><br>
        <select name="kategori">
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
            <option value="Elektronik">Elektronik</option>
        </select><br>
        <button type="submit">Kirim</button>
    </form>
</div>
</body>
</html>
