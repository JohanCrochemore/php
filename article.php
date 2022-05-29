<?php

$id = (isset($_GET['id']) && $_GET['id'] != NULL)?$_GET['id']:0;
if(!isset($tableau[$id]))
    $id=0;
$article = $tableau[$id]; 
$data="";
$data .= "<section class='article'>";
$data .= "<article>";
$data .= "<img src=".$article['image']." class='image' alt=".$article['titre']." />";
$data .= "<p class='titre'> Auteur :";
$data .= ($article['auteur']!='')?$article['auteur']:"Pas d'auteur";
$data .=" / Catégorie : ";
$data .= ($article['categorie']!='')?$article['categorie']:"Pas de catégorie";
$data .=" / Commentaires : ";
$data .= ($article['nbCommentaires']!=0)?$article['nbCommentaires']:"Pas de commentaire"."</p>";
$data .= "<div id='contenu'>";
if($article['contenu'] == '')
    $data.= "Pas de contenu";
else
{
    $contenu = explode('<br>',$article['contenu']);
    foreach ($contenu as $paragraphe) 
        $data .= "<br><p>".$paragraphe."</p>";
    $data.="<br>";
}
$data .= "</div>";
$data .= "</article>";
include 'aside.php';
$data .= "</section>";
echo $data;