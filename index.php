
<?php
include './controllers/LinkController.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acortador de URLs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/style.css">
    
    
</head>

<body>
<!--<a class="php" href="./views/dashboard.php"> ven aqui</a>  -->





<div class="content">
    <div class="form-container">
      <div class="logo-container">
        Acortado de URLs
      </div>

      <form class="form" action="/public/index.php" method="POST">
        <div class="form-group">
          <label for="email">URL</label>
          <input type="text" name="long_url" placeholder="Ingresa la URL larga" required> 
        </div>

        <button class="form-submit-btn" type="submit">Acortar URL</button>
      </form>

      <?php 
        if (isset($_GET['short_code'])) { 
            echo '<p>URL acortada: <a href="/' . htmlspecialchars($_GET['short_code']) . '">http://tu-dominio.com/' . htmlspecialchars($_GET['short_code']) . '</a></p>'; 
            } 
        ?>
    </div>
</div>






<footer class="d-flex justify-content-center align-items-center bg-dark text-white w-100 ">
    <p>&copy;  <?php echo date("Y"); ?>|  Todos los derechos reservados. </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>