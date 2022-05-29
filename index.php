<?php 
    require "tableau.php";
    
    $page = 'home';

    if (isset($_GET['page']) && $_GET['page'] != NULL){
      $page = $_GET['page'];
    }

    include "header.php";
    include "$page.php";
    include "footer.php";

   
?>