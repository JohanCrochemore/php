<?php
$data = "";
$data .= "<section class='accueil'>";
$data .= "<article>";

foreach ($tableau as $key=>$card)
{
    $data .= "<div class='card'>";
    $data .= "<a href='?page=article&id=$key' >";
    $data .= "<img src=".$card['image']." class='image' alt=".$card['titre']." />";
    $data .= "<div class='container'>";
    $data .= "<div class ='titre'>";
    $data .= "<h4>".ucfirst(strtolower($card['titre']))."</h4></div>";
    $data .= "<div class ='description'>";
    $data .= "<q>".$card['description']."</q>";
    if ($card['contenu']!= '')
        $data .= "<p>En savoir plus</p>";
    $data .= "</div></div></a></div>";
}
$data.="</article>";
include 'aside.php';
$data.="</section>";
echo $data;
      