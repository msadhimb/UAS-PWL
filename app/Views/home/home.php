<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
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
                    <?php if (!isset($_SESSION['sesUser'])) {
                    ?>
                        <a class="nav-link btn btn-primary text-white ms-3" aria-current="page" href="<?php echo base_url('login/login') ?>">Logo In</a>
                    <?php
                    } else {
                    ?>
                        <a class="nav-link btn btn-danger text-white ms-3" aria-current="page" href="<?php echo base_url('login/logout') ?>">Logout</a>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </nav>
    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>