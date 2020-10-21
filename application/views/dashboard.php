<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Chivo:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="topnavbar">
            <a href="http://localhost/examen_codeigniter">Salir</a>
            <span><b>User:</b><?php  echo strtoupper($_POST['username'])?></span>
            <a href="#"><img src="<?php echo base_url();?>/img/<?php echo $_POST['foto']?>" alt="" width="50"></a>
        </div>
        <div class="sidenav" style="background-color:<?php echo $_POST['color']?>">
            <p>SEA</p>
            <img src="<?php echo base_url();?>/img/birrete.png" alt="alt" width="60" height="60">
        </div>
            <!-- Aqui va el contenido -->
        <div class="main">
            <h2>Bienvenido</h2>
        </div>
    </div>