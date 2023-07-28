<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/index.css" />
  <title>Accueil</title>
</head>

<body>
  <?php
  include("../components/nav.php")
  ?>
  <h1></h1>
  <!-- Section compétences -->
  <section class="section-competence">
    <!-- tableau des compétences -->
    <div class="section-graphique">
      <h2>COMPETENCES</h2>
      <div class="nom-competence">HTML
        <div class="barre-vide">
          <div class="barre-html">30%</div>
        </div>
      </div>
      <div class="nom-competence">CSS
        <div class="barre-vide">
          <div class="barre-css">20%</div>
        </div>
      </div>
      <div class="nom-competence">PHP
        <div class="barre-vide">
          <div class="barre-php">40%</div>
        </div>
      </div>
      <div class="nom-competence">Javascript
        <div class="barre-vide">
          <div class="barre-js">15%</div>
        </div>
      </div>
      <div class="nom-competence">SQL
        <div class="barre-vide">
          <div class="barre-SQL">15%</div>
        </div>
      </div>
    </div>
    <!-- CV -->
    <div class="section-CV">

      <a href="../images/FRÉVILLE FRANCK.png" target="_blank"><img class="CV" src="../images/FRÉVILLE FRANCK.png" alt="CV">
        <div class="CV-hover">
          <p class="voir-CV">Voir le CV</p>
        </div>
      </a>

    </div>
  </section>

  <?php
  include("../components/footer.php")
  ?>
  <script src="../assets/js/index.js"></script>
</body>

</html>