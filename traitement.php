<?php

  session_start();

  $_SESSION['serie'] = $serie = $_POST['selector'];
  $_SESSION['correspondance'] = "";

  conseilSerie($serie);

  function conseilSerie($a)
   {
     if($a == "The Walking Dead")
     {
       $_SESSION['correspondance'] = "Vous amateur de films de zombies. Vous devriez regarder 'Nemo', c'est dans le même style ;)";
     }
     elseif($a == "Shameless US"){
       $_SESSION['correspondance'] = "Très bonne série humoristique. Dans cette catégorie, vous devriez regarder 'Suits'";
     }
     else {
       $_SESSION['correspondance'] = "Une des meilleures series, vous avez bon gout ! ;)";
     }
   }

  header('Location: verif.php');
