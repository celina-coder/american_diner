<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="public/js/jquery.js"></script> <!--jquery-->
    <script src="public/js/bootstrap.min.js"></script>
       <!-- css vendor -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lobster|Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/flexslider.css">
    <!-- css -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.0/umd/popper.min.js"></script>
    <script src="public/js/jquery.flexslider-min.js"></script>
    <script src="public/js/translations.js"></script>
    <script src="public/js/app.js"></script>
</head>
<body>
    <header>
         <div class="container site">
            <div class="canvas">
                <canvas id="logo" width="800" height="100"></canvas> 
            </div>
                <nav>
                    <ul class="nav nav-bar">
                        <li role="presentation"><a id="menu" href="index.php">Accueil</a></li>
                         <?php
                         require "menu.php";?>
                         <?php forEach($categories as $categorie):?>
                        <li role="presentation"><a id="menu"href="categories.php?id=<?= ($categorie['id'])?>"><?= ($categorie['name'])?></a></li>
                        <?php endforeach ?>
                    </ul>
              </nav>
        </div>
    </header>
    