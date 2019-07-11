
<?php
    require 'src/app/app.html';
    // ajouter toust les commentaires ici 
?>
<header>
    <?php   
            // call all documents in the body page html
       require 'src/app/header/app.header.php';
    ?>
</header>
<section>
    <?php
        // HEADER PAGE 
        require 'src/app/section/app.section.php';
    ?>
</section>
<footer>
    <?php
        // SECTION PAGE
          require 'src/app/footer/app.footer.php';
        // FOOTER PAGE   
    ?>
</footer>

<?php
    require 'src/app/links.html'; // im call links 
?>
