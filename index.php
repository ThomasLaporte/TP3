<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Conseil series</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="script.js"></script>
</head>
<body>
  <div class="container">
    <form class="form" method="post" action="traitement.php">
    	<h2>Quelle est votre serie préférée ?</h2>

      <ul>
        <li>
          <input type="radio" id="f-option" name="selector" value = "Breaking Bad">
          <label for="f-option">Breaking Bad</label>

          <div class="check"></div>
        </li>

        <li>
          <input type="radio" id="s-option" name="selector" value = "The Walking Dead">
          <label for="s-option">The Walking Dead</label>

          <div class="check"><div class="inside"></div></div>
        </li>

        <li>
          <input type="radio" id="t-option" name="selector" value = "Shameless US">
          <label for="t-option">Shameless US</label>

          <div class="check"><div class="inside"></div></div>
        </li>
      </ul>
      <div id="id" class="flipper">
          <input  class="front-face" data-icon="&#x27a3;" type="submit" value="Continuer" class="button" />
      </div>


    <!-- <a href="traitement.php" class="flipper-container">
        <div id="id" class="flipper">
          <div type="submit" class="front-face" data-icon="&#x27a3;"><span data-hover="Clicked">Continuer</span></div>
        </div>
    </a> -->
  </form>
</div>



</body>
</html>
