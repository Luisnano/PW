<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Prueba de la encuesta</title>
</head>

<h1 style= "color:blue">Prueba de la encuesta</h1>
<link rel="stylesheet" type="text/css" href="estilo.css">

    <?php

        $conexion = mysqli_connect("127.0.0.1", "root", "", "lindavista");

        #mysqli_select_db ("lindavista") or die ("No se puede acceder a la base de datos");

        $consulta = mysqli_query($conexion, "SELECT * FROM votos");

        if ($consulta === false)
        {
            echo "Error de conexion, revise sus permisos en la base de datos";
        }

        echo "<table>";

        $nfilas = mysqli_num_rows ($consulta);
        print "<td bgcolor = 'steelblue'>Respuesta</td>";
        print "<td bgcolor = 'steelblue'>Votos</td>";
        print "<td bgcolor = 'steelblue'>Porcentaje</td>";
        print "<td bgcolor = 'steelblue'>Grafica</td>";
        echo '<tr></tr>';

        for ($i=0; $i<$nfilas; $i++)
        {
            $fila = mysqli_fetch_array ($consulta);
            $cuenta_si = $cuenta_si + $fila["votos1"];
            $cuenta_no = $cuenta_no + $fila["votos2"];
        }

        echo "</table>";

        $cuenta_si++;
        $cuenta_no++;
        
        $sql_si = "UPDATE votos SET votos1='$cuenta_si'";
        $sql_no = "UPDATE votos SET votos2='$cuenta_no'";


        if(mysqli_query($conexion, $sql_si))
        {

            echo "Registro actualizado.";
        } else 
        {
            echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
        }


        if(mysqli_query($conexion, $sql_no))
        {

            echo "Registro actualizado.";
        } else 
        {
            echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
        }

        echo "Votos si:".$cuenta_si;
        echo "Votos no:".$cuenta_no;

        mysqli_close($conexion);


    ?>

</html>