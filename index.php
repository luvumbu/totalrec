<!-- 
    //  ★   =   début de l'information
    //  ☆   =   fin de l'information
    //  ♨   =   Code de l'information premier letre du fichier et dernier lettre du fichier suivi du numéro du commentaire.
    //  ♫   = connexion css all suivi du nom du fichier 
    //  ✈   ♨=#ix   Je suis dans la racine du fichier   ♨=#ix  
    //
    //
-->
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        </head>
        <title>Document</title>
        <body id="body">
            <script type="text/javascript">
                window.onload = document.getElementById('body').style.display='none';
                //  ★   n'affiche pas la page pendant le chargement debut ♨=#ix0001
            </script>
            <?php 
                require "app.php" ;
                //    ★   Ajoute le fichier app.php ♨=#ix0002 ☆    
            ?>
        </body>
        <script type="text/javascript">
            window.onload = document.getElementById('body').style.display='block';
            //  affiche la page apres le chargement ♨=#ix0001   ☆
        </script>
    </html>