<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<body id="body">
  <script type="text/javascript">
    window.onload = document.getElementById('body').style.display='none';
</script>
    <?php 
          require "src/app/app.php" ;
          // call componnent in folder src/app  the name is: app.component 
    ?>
</body>

<script type="text/javascript">
    window.onload = document.getElementById('body').style.display='block';
</script>
</html>