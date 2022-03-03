<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Document</title>
</head>

<h1>Consulta de noticias</h1>
<link rel="stylesheet" type="text/css" href="estilo.css">

    <?php

        echo "<form method='post'>";

        echo "<table>";

        $conexion = mysqli_connect("localhost", "cursophp-ad1", "php.hph", "lindavista");

        #mysqli_select_db ("lindavista") or die ("No se puede acceder a la base de datos");

        $consulta = mysqli_query($conexion, "SELECT * FROM noticias");

        $nfilas = mysqli_num_rows ($consulta);
        print "<td style = 'color:steelblue' bgcolor = 'Steelblue'>Titulo</td>";
        print "<td style = 'color:steelblue' bgcolor = 'steelblue'>Texto</td>";
        print "<td style = 'color:steelblue' bgcolor = 'steelblue'>Categoria</td>";
        print "<td style = 'color:steelblue' bgcolor = 'steelblue'>Fecha</td>";
        print "<td style = 'color:steelblue' bgcolor = 'steelblue'>Imagen</td>";
        print "<td style = 'color:steelblue' bgcolor = 'steelblue'>Borrar</td>";
        echo '<tr></tr>';
        for ($i=0; $i<$nfilas; $i++)
        {
            $fila = mysqli_fetch_array ($consulta);
            print "<td bgcolor = 'Gainsboro'>" . $fila["titulo"] . "</td>";
            print "<td bgcolor = 'Gainsboro'>" . $fila["texto"] . "</td>";
            print "<td bgcolor = 'Gainsboro'>" . $fila["categoria"] . "</td>";
            print "<td bgcolor = 'Gainsboro'>" . $fila["fecha"] . "</td>";
            print "<td bgcolor = 'Gainsboro'>" . $fila["imagen"] . "</td>";

            echo "<td bgcolor = 'Gainsboro'><input type = 'checkbox' name='".$i."'></td>";
            
            echo '<tr></tr>';
        }
        echo "</table>";

        echo "<input type='submit' value='Borrar noticias seleccionadas'>";

        echo "</form>";

        #Ya tenemos hecho todo el formulario, procedemos a recoger los datos y actualizar la BD

        foreach($_POST as $clave => $valor)
        {
            #Aqui lo dejo, tenemos todos los indices en $_POST, la cosa es que ahora hay que encontrar las 
            #   filas de la consulta a las que se refiere.
            $query_eliminacion = "DELETE FROM noticias WHERE id = $valor";

            mysqli_query($conexion, $query_eliminacion);

        }


        mysqli_close($conexion);

    ?>

</html>