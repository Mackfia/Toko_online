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
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .product-image {
            width: calc(25% - 10px);
            height: calc(30% - 10px);
            border: 2px solid #AFD9DD;
            border-radius: 10px;
            padding: 10px;
            margin: 8px;
            background-color: white;
        }

        .product-image img {
            width: 75%;
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
            <center><img src="eyeliner.jpeg" alt="Skincare Product 1"></center>
            <h2>Eyeliner Spidol Waterproof</h2>
            <p>Wardah EyeXpert Optimum Hi-Black Liner, Eyeliner berbentuk cair dengan warna hitam yang intens serta cepat kering</p><br>
            <p>Harga: Rp.76.050,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
        <div class="product-image">
            <center><img src="eyeshadow.jpeg" alt="Skincare Product 2"></center>
            <h2>Eyeshadow 4 in 1 Pigmented</h2>
            <p>Wardah Colorfit Quad Eye Palette, eyeshadow dengan perpaduan 4 warna versatile matte dan shimmer hanya dalam 1 compact palette</p>
            <p>Harga: Rp.78.750,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
        <div class="product-image">
            <center><img src="cusion.jpg" alt="Skincare Product 3"></center>
            <h2>Bedak Padat Dengan SPF 20</h2>
            <p>Wardah Colorfit Velvet Powder Foundation merupakan kombinasi foundation dan bedak yang terasa halus untuk memberikan coverage yang natural namun buildable</p>
            <p>Harga: Rp.69.750,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>

        <div class="product-image">
            <center><img src="micellar.jpeg" alt="Skincare Product 1"></center>
            <h2>Micellar Water</h2>
            <p>Wardah Perfect Bright Tone Up Micellar Water 100 ml - Micellar Water dengan Micelles Pencerah - Make Up Remover Lebih Bersih dan Cerah</p>
            <p>Harga: Rp.27.720,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
        <div class="product-image">
            <center><img src="day-cream.jpg" alt="Skincare Product 2"></center>
            <h2>Day Cream</h2>
            <p>Cream Pagi dengan Advanced Niacinamide - Menyamarkan Bekas Jerawat - Glowing dan Melembabkan - Cream pelembap pagi hari dengan tekstur ringan</p>
            <p>Harga: Rp.29.040,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
        <div class="product-image">
            <center><img src="serum.jpeg" alt="Skincare Product 3"></center>
            <h2>Serum Ampoule</h2>
            <p>Serum dengan 10X Advanced Niacinamide untuk cerahkan wajah 10x lebih kuat, menyamarkan bekas jerawat, dan melindungi dari paparan blue light</p>
            <p>Harga: Rp.61.160,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>

        <div class="product-image">
            <center><img src="shampoo.jpeg" alt="Skincare Product 1"></center>
            <h2>Shampoo</h2>
            <p>Wardah Hairfall Treatment Shampoo menjaga kekuatan rambut sehingga bantu kurangi rambut patah akibat kurang nutrisi. Halau rambut rontok dan bau apek yang ganggu aktivitasmu!</p><br>
            <p>Harga: Rp.52.000,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
        <div class="product-image">
            <center><img src="conditioner.jpeg" alt="Skincare Product 2"></center>
            <h2>Conditioner</h2>
            <p>Menjaga kelembaban alami untuk menghindari rambut kering dan hasil akhir rambut yang terasa lembut, halus, ringan dan tidak mudah lepek. Dilengkapi Scentlock Fragrance dengan wangi segar yang lebih tahan lama</p>
            <p>Harga: Rp.29.040,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
        <div class="product-image">
            <center><img src="serum.jpeg" alt="Skincare Product 3"></center>
            <h2>Serum Ampoule</h2>
            <p>Serum dengan 10X Advanced Niacinamide untuk cerahkan wajah 10x lebih kuat, menyamarkan bekas jerawat, dan melindungi dari paparan blue light</p>
            <p>Harga: Rp.61.160,-</p>
            <button type="button" class="search-button">Beli Sekarang</button>
        </div>
    </div>
</body>
</html>
