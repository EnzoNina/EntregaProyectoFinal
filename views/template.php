<?php
require_once ("controllers/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">            
    <link rel="stylesheet" href="views/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4fce5b49d2.js" crossorigin="anonymous"></script>
    <script src="views/libreria/particles.js-master/particles.min.js"></script>
    <script src="views/js/jquery-3.6.0.min.js"></script>
    <title>Mis Notas</title>    
</head>
<body>
    <div id="particles-js"></div>    <!--Particles -->
    <!--Side var-->
    <?php
    include "modules/barra.php";
    ?>
    <section class="contenido">
        <?php
            $inte=new Notas();
            $inte->interaccion();
        ?>
    </section>      
      <script src="views/js/particles.js"></script>
</body>
</html>