<!DOCTYPE html>
<html lang="en">
<head> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login Toko</title>
</head>
<body>
<section class="vh-100" style="background-color: #AFD9DD">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <form action ="proses_login_toko.php" method="post">

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
              <label class="form-label" name="username" for="typeEmailX-2">Username</label>
              <input type="text" id="typeEmailX-2" name="username" class="form-control form-control-lg" />
            </div> 

            <div class="form-outline mb-4">
              <label class="form-label" name="password" for="typePasswordX-2">Password</label>
              <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" />
            </div>
            <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr class="my-4">
</body>
</html>