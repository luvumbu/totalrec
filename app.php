<!-- Lien des pages comment #1 -->
<link rel="stylesheet" href="src/app/header/app.header.css">    <!-- #1.1 -->
<link rel="stylesheet" href="src/app/section/app.section.css">  <!-- #1.2 -->
<link rel="stylesheet" href="src/app/footer/app.footer.css">    <!-- #1.3 -->
<link rel="stylesheet" href="src/app/all/app.all.css">    <!-- #1.3 -->
<!-- #1 -->
<?php
     require 'src/app/all/app.all.bdd.php';
     require 'src/app/all/app.all.php';
?>
<header>
    <?php
     // ajout la page header #2
    require 'src/app/header/app.header.html';
    require 'src/app/header/app.header.php';
    // #2
    ?>
</header>
<section>
    <?php
         // ajout la page section #3
        require 'src/app/section/app.section.html' ;
        require 'src/app/section/app.section.php' ;
        // #3 
    ?>
</section>
<footer>
    <?php
        // ajout la page header #4
        require 'src/app/footer/app.footer.html' ;
        require 'src/app/footer/app.footer.php' ;
        // #4
    ?> 
</footer>
<?php
// ajout des fichier javascript #5
require 'links.php' ;
// #5
?>



