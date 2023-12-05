<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <title>Header</title>

    <style>
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
  <main>
  <div class="b-example-divider"></div>

  <header class="p-3 mb-3 border-bottom">
      <div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a class="nav-link px-2 link-dark"><img src="wardah-logo.jpg" height="20" width="80"></a></li>
          <li><a href="home.php" class="nav-link px-2 link-dark">Home</a></li>
          <li><a href="shop.php" class="nav-link px-2 link-dark">Shop</a></li>
          <li><a href="history.php" class="nav-link px-2 link-dark">History</a></li>
          <li><a href="login_toko.php" class="nav-link px-2 link-dark">Logout</a></li>
        </ul>
        <div class="search-container">
        <form action="search.php" method="get">
            <input type="text" class="search-box" name="query" placeholder="Search...">
            <button type="submit" class="search-button">Search</button>
        </form>
        </div>
    </header>  
</main>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
