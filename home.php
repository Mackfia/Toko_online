<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Home</title>
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
            text-align: center;
        }

        .product-image {
            display: inline-block;
            margin: 20px;
            border: 2px solid #AFD9DD;
            border-radius: 10px;
            padding: 10px;
        }

        .product-image img {
            width: 50%;
            height: auto;
            border-radius: 8px;
        }

        .contact-container {
            background-color: #AFD9DD;
            color: white;
            padding: 40px;
            text-align: center;
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
    <img src="banner.jpg" width="100%" alt="Background Image">
    <img src="halal.jpg" width="100%" alt="Halal Image">
    
    <div class="tittle">
        <p>Product</p>
    </div>

    <div class="product-container">
        <div class="product-image">
            <img src="cusion.jpg" alt="Makeup Cushion">
            <div class="header">
                <p>Makeup</p>
            </div>
        </div>

        <div class="product-image">
            <img src="day-cream.jpg" alt="Skincare Cream">
            <div class="header">
                <p>Skincare</p>
            </div>
        </div>

        <div class="product-image">
            <img src="hair.jpg" alt="Hair Care">
            <div class="header">
                <p>Haircare</p>
            </div>
        </div>
    </div>

    <br><div class="contact-container">
        <h2>Contact Us</h2>
        <p>If you have any questions or inquiries, please feel free to contact us.</p>
        <p>Email: fian_estianty_31rpl@student.smktelkom-mlg.sch.id</p>
        <p>Phone Number: 081249637375</p>
        <p>Instagram: fiann.ety
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
