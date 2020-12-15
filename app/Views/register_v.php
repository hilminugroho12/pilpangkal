<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resgister Pil Pangkal</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
    </head>
    <body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
            <div class="col-md-5">
                <img src="img/register1.jpg" alt="login" class="login-card-img">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                <div class="brand-wrapper">
                    <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="logo" class="logo">
                </div>
                <p class="login-card-description">Ayo mulai langkah baru!</p>
                <form action="#!">
                    <div class="form-group">
                        <label for="username" class="sr-only">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="username" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                    </div>
                    <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Register">
                    </form>
                    <p class="login-card-footer-text">Sudah punya akun? <a href="<?php echo site_url('Login') ?>" class="text-reset"><font color="#854d0a">Login</font></a></p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
