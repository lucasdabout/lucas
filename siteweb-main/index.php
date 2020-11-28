<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lucasdabout.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="icon" href="images\logo.ico"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff64834a9a.js" crossorigin="anonymous"></script>
     <script src="https://www.google.com/recaptcha/api.js"></script>
     <script>

  function onSubmit(token) {
    document.getElementById("demo-form").submit();
  }
</script>
    <title>Lucas Dabout</title>
  </head>
  <body>
    <div class="bande_verte">
      <div class="boite_ronde"></div>
      <div class="bande_noire"></div>
    </div>
    <nav>
      <ol>
        <li><a class="texte_barre_de_navigation_lucas" href="index.php">Lucas Dabout</a></li>
        <li><a class="texte_barre_de_navigation" href="#apropos">A propos</a></li>
        <li><a class="texte_barre_de_navigation" href="#Compétences">Compétences</a></li>
        <li><a class="texte_barre_de_navigation" href="#Expérience">Expérience</a></li>
        <li><a class="texte_barre_de_navigation" href="#Formation">Formation</a></li>
        <li><a class="texte_barre_de_navigation" href="#contact">Contact</a></li>
      </ol>
    </nav>
    <p class="LucasDabout">Lucas Dabout</p>
    <p class="Etudiant">étudiant</p><br><br><br><br><br><br><br>
    <a id="apropos">

      <?php
      include 'php/apropos.php';
       ?>

    </a>
    <a id="Compétences">

      <?php
      include 'php/competences.php';
       ?>

    </a>
    <a id="Expérience">

      <?php
      include 'php/experience.php';
      ?>

    </a>
    <a id="Formation">

      <?php
      include 'php/formation.php';
      ?>

    </a>
    <a id="contact">

      <?php
      include 'php/contact.php';
       ?>

    </a>
    <a href="index.php"> <i class="fas fa-arrow-circle-up"></i></a>
    <footer>
      <a class="liensmentionslegales" href="php/mentionslegales.php">Mentions légales</a> - © 2020 réalisé par Lucas Dabout - Étudiant - BTS SIO
    </footer>
  </body>
</html>
