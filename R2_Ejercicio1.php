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

<table >
    <?php

        $conexion = mysqli_connect("127.0.0.1", "root", "", "lindavista");

        #mysqli_select_db ("lindavista") or die ("No se puede acceder a la base de datos");

        $consulta = mysqli_query($conexion, "SELECT * FROM noticias");

        $nfilas = mysqli_num_rows ($consulta);
        print "<td bgcolor = 'steelblue'>Titulo</td>";
        print "<td bgcolor = 'steelblue'>Texto</td>";
        print "<td bgcolor = 'steelblue'>Categoria</td>";
        print "<td bgcolor = 'steelblue'>Fecha</td>";
        print "<td bgcolor = 'steelblue'>Imagen</td>";
        echo '<tr></tr>';
        for ($i=0; $i<$nfilas; $i++)
        {
            $fila = mysqli_fetch_array ($consulta);
            print "<td bgcolor = 'Gainsboro'>" . $fila["titulo"] . "</td>";
            print "<td bgcolor = 'Gainsboro'>" . $fila["texto"] . "</td>";
            print "<td bgcolor = 'Gainsboro'>" . $fila["categoria"] . "</td>";
            print "<td bgcolor = 'Gainsboro'>" . $fila["fecha"] . "</td>";
            print "<td bgcolor = 'Gainsboro'>" . $fila["imagen"] . "</td>";
            echo '<tr></tr>';
        }

    ?>
</table>

</html>