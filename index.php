<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/css/index.css" />
  <title>Accueil</title>
</head>

<body>

  <?php
  include("./components/nav.php")
  ?>

  <!-- Image dev avec le commentaire à coté  -->
  <section id="section-image-dev">
    <img class="image-dev" src="./images/dev.jpeg" alt="image_dev" />

    <p class="texte-image-dev">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iusto
      non molestias? Consequuntur ut ullam, iusto praesentium impedit repellat
      expedita unde blanditiis laborum exercitationem explicabo ipsa quos
      possimus amet accusamus.
    </p>

  </section>
  <?php
  include("./components/liens.php")
  ?>
  <?php
  include("./components/footer.php")
  ?>
  <script src="./assets/js/index.js"></script>
</body>

</html>