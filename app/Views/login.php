<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/bootstrap/dist/css/bootstrap.min.css">
    <!-- Ini CSS dewek -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/style.css">
    <title>Login Account</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card_login">
                    <div class="judul">
                        Login ke E-School
                    </div>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input class="form-control form_size" type="text" name="username" placeholder="Email atau Username" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form_size" type="password" name="username" placeholder="Kata Sandi" required>
                        </div>
                        <p style="font-size: 14px;">
                            <a href=""> Lupa akun ? </a>
                        </p>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-lg btn_abu btn-block" style="border-radius: 10px; font-weight: bold;">Login</button>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-lg btn_hijau btn-block" style="border-radius: 10px; font-weight: bold;">Registrasi</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row mt-3" style="text-align: center;">
            <div class="container">
                <p style="font-size: 14px;"> Copyright &copy; <?= date('Y'); ?> Noobs Project </p>
            </div>
        </div>
    </div>
</body>

</html>