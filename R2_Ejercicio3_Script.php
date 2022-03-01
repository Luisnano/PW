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

        $conexion = mysqli_connect("localhost", "cursophp-ad1", "php.hph", "lindavista");

        if ($conexion == false){
            echo "Conexión rechazada por la base de datos";
        }

        $query_inicial = mysqli_query($conexion, "SELECT * FROM noticias");

        $nfilas = mysqli_num_rows ($query_inicial);

        $id_noticia_nueva = $nfilas + 1;

        echo "Debug 1<br>";

        $fecha = date("y-m-d");

        $query_insercion = "INSERT INTO noticias VALUES (titulo = $titulo, texto = $texto, categoria = $categoria)";

        if (mysqli_query($conexion, $query_insercion)==false){
            echo "Esta query esta mal";
        }

        echo "Debug 2<br>";

        mysqli_close($conexion);

    
    
    ?>
</body>
</html>