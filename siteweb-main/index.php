<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lucasdabout.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.ico"/>
    <script src="https://kit.fontawesome.com/ff64834a9a.js" crossorigin="anonymous"></script>
    <title>Lucas Dabout</title>
  </head>
  <body>
    <div class="bande_verte">
      <div class="boite_ronde"></div>
      <div class="bande_noire"></div>
    </div>
    <nav>
      <ol>
        <li><a class="texte_barre_de_navigation" href="#apropos">A propos</a></li>
        <li><a class="texte_barre_de_navigation" href="#Compétences">Compétences</a></li>
        <li><a class="texte_barre_de_navigation" href="#Expérience">Expérience</a></li>
        <li><a class="texte_barre_de_navigation" href="#Formation">Formation</a></li>
        <li><a class="texte_barre_de_navigation" href="#contact">Contact</a></li>
      </ol>
    </nav>
    <p class="LucasDabout">Lucas Dabout</p>
    <p class="Etudiant">étudiant</p><br><br><br><br><br><br><br>
    <a name="apropos">

      <?php
      include 'apropos.php';
       ?>

    </a>
    <a name="Compétences">

      <?php
      include 'competences.php';
       ?>

    </a>
    <a name="Expérience">

      <?php
      include 'experience.php';
      ?>

    </a>
    <a name="Formation">

      <?php
      include 'formation.php';
      ?>

    </a>
    <a name="contact">

      <?php
      include 'contact.php';
       ?>

    </a>
    <a href="index.php"> <i class="fas fa-arrow-circle-up"></a></i>
    <footer>
      Mentions légales Lucas Dabout
    </footer>
  </body>
</html>
