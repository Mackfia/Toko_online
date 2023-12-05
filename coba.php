<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Skincare</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            font-size: 25px;
        }

        .tittle {
            font-family: "Alice", sans-serif;
            font-weight: bold;
            background-color: #AFD9DD;
            padding: 20px;
            margin-top: 20px;
            font-size: 45px;
            color: white;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .product-container {
            display: flex; /* Menampilkan pilihan skincare secara horizontal */
            justify-content: space-around; /* Menyusun pilihan skincare dengan jarak yang sama */
            flex-wrap: wrap; /* Jika layar kecil, pilihan skincare akan pindah ke baris baru */
        }

        .product-image {
            width: calc(33.33% - 20px); /* Membagi layar menjadi tiga kolom */
            border: 2px solid #AFD9DD;
            border-radius: 10px;
            padding: 10px;
            margin: 10px; /* Margin untuk memberikan jarak antara pilihan skincare */
            background-color: white;
        }

        .product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .contact-container {
            background-color: #AFD9DD;
            color: white;
            padding: 40px;
            text-align: center;
        }

        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

        .search-container {
            text-align: right;
            padding: 10px;
        }

        .search-box {
            border: 1px solid #AFD9DD;
            border-radius: 5px;
            padding: 5px;
        }

        .search-box:hover {
            border: 1px solid #176B87;
        }

        .search-button {
            background-color: #AFD9DD;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #176B87;
        }

        .btn-wardah {
            background-color: #AFD9DD;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .btn-wardah:hover {
            background-color: #176B87; 
        }
    </style>
</head>
<body>
<?php
    session_start();
    if ($_SESSION['status_login'] != true) {
        header('location: login_toko.php');
    }
    include "header.php";
    ?>
    <div class="product-container">
        <div class="product-image">
            <img src="day-cream.jpg" alt="Skincare Product 1">
            <h2>Produk Skincare 1</h2>
            <p>Deskripsi produk skincare 1.</p>
            <p>Harga: Rp.50.000,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
        <div class="product-image">
            <img src="hair.jpg" alt="Skincare Product 2">
            <h2>Produk Skincare 2</h2>
            <p>Deskripsi produk skincare 2.</p>
            <p>Harga: Rp.50.000,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
        <!-- Tambahkan produk skincare lainnya sesuai kebutuhan -->
    </div>
</body>
</html>
