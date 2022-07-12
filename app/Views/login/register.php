<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .cntnr {
            width: 500px;
        }

        hr {
            box-shadow: 0px 2px 3px black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg mt-2">
        <div class="container">
            <a class="navbar-brand" href="#">Salman Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  ms-auto">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </div>
            </div>
        </div>
    </nav>
    <hr>
    <div class="container cntnr mt-5">
        <form action="<?php echo site_url('Login/registerAction'); ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?= old('username') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('username') ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('pass')) ? 'is-invalid' : '' ?>" id="exampleInputPassword1" name="pass">
                <div class="invalid-feedback">
                    <?= $validation->getError('pass') ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('cpass')) ? 'is-invalid' : '' ?>" id="exampleInputPassword1" name="cpass">
                <div class="invalid-feedback">
                    <?= $validation->getError('cpass') ?>
                </div>
            </div>
            <div class="mb-3 text-end">
                <a href="<?php echo base_url('Login/login') ?>" class="text-primary text-center">Sign In</a>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>