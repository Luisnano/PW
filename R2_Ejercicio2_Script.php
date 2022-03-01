<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Resultado de la votación</title>
</head>
<body>

    <h1 style= "color:blue">Encuesta</h1>

    <?php
    
        $valor = $_POST['eleccion'];

        $conexion = mysqli_connect("127.0.0.1", "root", "", "lindavista");

        #mysqli_select_db ("lindavista") or die ("No se puede acceder a la base de datos");

        $consulta = mysqli_query($conexion, "SELECT * FROM votos");

        if ($consulta === false)
        {
            echo "Error de conexion, revise sus permisos en la base de datos";
        }

        echo "<table>";

        $nfilas = mysqli_num_rows ($consulta);
        print "<td style='color:white' bgcolor = 'steelblue'>Respuesta</td>";
        print "<td style='color:white' bgcolor = 'steelblue'>Votos</td>";
        print "<td style='color:white' bgcolor = 'steelblue'>Porcentaje</td>";
        print "<td style='color:white' bgcolor = 'steelblue'>Grafica</td>";
        echo '<tr></tr>';

        for ($i=0; $i<$nfilas; $i++)
        {
            $fila = mysqli_fetch_array ($consulta);

            $cuenta_si = $fila["votos1"];
            $cuenta_no = $fila["votos2"];

            if($valor == "Si")
            {
                $cuenta_si ++;
            }
            if($valor == "No")
            {
                $cuenta_no ++;
            }

            print "<td bgcolor = 'gainsboro'>Si</td>";
            print "<td bgcolor = 'gainsboro'>$cuenta_si</td>";
            $porcentaje_si = ($cuenta_si*100)/($cuenta_si+$cuenta_no);
            print "<td bgcolor = 'gainsboro'>$porcentaje_si %</td>";
            echo "<tr></tr>";
            
            print "<td bgcolor = 'gainsboro'>No</td>";
            print "<td bgcolor = 'gainsboro'>$cuenta_no</td>";
            $porcentaje_no = ($cuenta_no*100)/($cuenta_si+$cuenta_no);
            print "<td bgcolor = 'gainsboro'>$porcentaje_no %</td>";
            echo "<tr></tr>";
            
        }

        echo "</table>";

        echo "Número total de votos emitidos: ". ($cuenta_si+$cuenta_no);
        echo "<br>";
        echo "<p><a href='R2_Ejercicio2_Form.php'>Pagina de votacion</a></p>";
        
        $sql_si = "UPDATE votos SET votos1='$cuenta_si'";
        $sql_no = "UPDATE votos SET votos2='$cuenta_no'";


        mysqli_query($conexion, $sql_si);
        mysqli_query($conexion, $sql_no);


        mysqli_close($conexion);
        
    
    
    ?>

    
</body>
</html>