<?php
require __DIR__ . "/vendor/autoload.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/vendor/assets/css/style.css">

    <!-- Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>


<body>
    <div class="banner">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">STSN</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-ajust" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Settings">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>

        <div class="painel">
            <div class="container screen">
                <div class="row">
                    <div class="col-2 menu-left">
                        <span class="text-center">Menu</span> <br>
                        <ul>
                            <li class="options-menu-left"></li>
                            <li class="options-menu-left"></li>
                            <li class="options-menu-left"></li>
                            <li class="options-menu-left"></li>
                            <li class="options-menu-left"></li>
                        </ul>
                    </div>
                    <div class="col-8 dashboard">a</div>
                </div>

            </div>
        </div>

    </div>
</body>

</html>