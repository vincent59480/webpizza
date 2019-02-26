<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Pizza !</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Main Header -->
    <header id="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand" href="/">
                    <img src="assets/images/logo.png" alt="Web Pizza">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active'] == "pizzas" ? "active" : null) ?>" href="/pizzas">Pizzas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active'] == "salads" ? "active" : null) ?>" href="/salades">Salades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active'] == "desserts" ? "active" : null) ?>" href="/desserts">Desserts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active'] == "drinks" ? "active" : null) ?>" href="/boissons">Boissons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active'] == "menus" ? "active" : null) ?>" href="/menus">Menus</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active'] == "account" ? "active" : null) ?>" href="/mon-compte">Mon Compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($GLOBALS['route_active'] == "order" ? "active" : null) ?> cart" href="/panier">Panier</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- end #main-header -->


    <!-- Main Content -->
    <div id="main-content">

        <?php if (hasFlashbag()): $flashMsg = getFlashbag(); ?>
        <div class="alert alert-<?= $flashMsg['state']; ?>">
            <?= $flashMsg['message']; ?>
        </div>
        <?php endif; ?>
        