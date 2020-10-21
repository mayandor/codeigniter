<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <h1>Ejemplo!</h1>
        <div id="body">
            <p>Ejemplo de clases</p>
        </div>
        <?php 
        $this-> load->helper('url');
        echo "Hola tu ".$nombre;
        echo "<br/>";
        echo base_url("Welcome/index2");
        echo "<br/>";
        echo site_url("Welcome/index2");

        ?>

        <form action="http://localhost/code/bcit-ci-CodeIgniter-b73eb19/index.php/Welcome/index2" method="GET">
            <label>Nombre</label>
            <input type="text" name="nombre">
            <input type="submit" name="Aceptar" value="aceptar">

        </form>
    </div>
</body>
</html>