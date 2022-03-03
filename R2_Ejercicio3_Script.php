<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado R2_E2</title>
</head>
<body>
    <?php
    
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $categoria = $_POST['categoria'];

        #Abrimos la conexion con la base de datos

        $conexion = mysqli_connect("localhost", "root", "root", "lindavista");

        $query_inicial = mysqli_query($conexion, "SELECT * FROM noticias");

        $fecha = date("y-m-d");

        $query_insercion = "INSERT INTO noticias (titulo,texto,categoria) VALUES ('" . $titulo . "', '" . $texto . "', '" . $categoria . "' )";

        mysqli_query($conexion, $query_insercion);

        mysqli_close($conexion);

        echo "Fin de la conexión";

    ?>
</body>
</html>