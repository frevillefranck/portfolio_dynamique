<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/index.css" />
  <title>Franck | Mes projets</title>
</head>

<body>
  <?php
  include("../components/nav.php")
  ?>

  <h1></h1>
  <!-- Section des projets -->
  <div id="slider">
    <img src="../images/carapuce.png" alt="carapuce" id="slide">
    <div id="precedent" onclick="ChangeSlide(-1)">
      < </div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>


    </div>
  </div>


  <?php
  include("../components/footer.php")
  ?>
  <script src="../assets/js/index.js"></script>
</body>

</html>