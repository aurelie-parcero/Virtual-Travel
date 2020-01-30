<head>
    <?php
    if(!isset($visible)) {
    exit();
}
    ?>
    <title><?php echo $titre; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name= "description" content= "<?php echo $description; ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.typekit.net/mgd6lhl.css">
    <link rel="stylesheet" href="https://use.typekit.net/mgd6lhl.css">
</head>
<body>
<header class="container-fluid header_principal">
    <div class="top_header">
        <div>
            <img src="images/logo_3_line.png" alt="logo virtual travel">
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-1"></div>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav space">
                    <li class="nav-item navbutton">
                        <a class="nav-link" href="index.php?page=home">Accueil</a>
                    </li>
                    <li class="nav-item navbutton">
                        <a class="nav-link" href="index.php?page=catalogue">Catalogue</a>
                    </li>
                    <li class="nav-item navbutton">
                        <a class="nav-link" href="index.php?page=equipe">Equipe</a>
                    </li>
                    <li class="nav-item navbutton">
                        <a class="nav-link" href="index.php?page=contact">Contact</a>
                    </li>
                    <li class="nav-item navbutton">
                        <a class="nav-link" href="index.php?page=connexion">Connexion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row titre_page">
        <div class="col-lg-12">
        </div>
        <div class="col-lg-12">
            <h1>Vivez une expérience unique de réalité virtuelle.</h1>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1">
        </div>
    </div>
</header>
