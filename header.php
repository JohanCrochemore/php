<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/style.css">
    <title>Seigneur des anneaux Fan Site</title>
</head>
<body>
    <header>
        <div>
           <a href="?page=home" <?php echo ($page =="home") ? "class='courante'":''; ?> >Accueil</a>
           <a href="?page=article"<?php echo ($page =="article") ?"class='courante'":''; ?> >Article</a> 
        </div>    
    </header>