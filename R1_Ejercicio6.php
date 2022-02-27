<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>Problema 6 de la Relacion 1</h1>
<?php
    function potencias($num)
    {
        for($i = 0; $i <= 3; $i++)
        {
            $pot[$i] = pow($num, $i);
        }
        return $pot;
    }
    #$solucion = potencias(2); Asi se hace para guardar tremendo resultado 
?>

<h2>Tabla de potencias</h2>

<table border="5"bordercolor="pink">
<?php
    $cuenta_filas = 0;

    for($numeros = 1; $numeros <= 4; $numeros++)
    {

        $potencias = potencias($numeros);

        for($i = 0; $i <= 3; $i++)
        {
            echo '<td>'.$potencias[$i].'</td>';
        }

        echo '<tr bgcolor="gainsboro">';

    }
?>
</table>
</body>
</html>