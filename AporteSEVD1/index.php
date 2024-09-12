<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEVD</title>
    <link rel="stylesheet" href="css/Styles_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="img/Logo_ISVD.png" type="image/png">
    <link rel="stylesheet" href="css/Styles_inscripcion_mesas.css">
    <link rel="stylesheet" href="css/Styles_estado_academico.css">
</head>

<body>
  <?php include 'php/header.php'; ?>
  <main>
        <?php
       
        $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'main';
        $allowed_modulos = ['main', 'inscripcion_mesas', 'estado_academico','inicio_sesion']; 

        if (in_array($modulo, $allowed_modulos)) {
            include "php/{$modulo}.php"; 
        } else {
            include 'php/main.php'; 
        }
        ?>
    </main>

  <?php include 'php/menu.php'; ?>
    <?php include 'php/foter.php'; ?>
</body>

</html>