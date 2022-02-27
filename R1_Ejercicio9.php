<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>Problema 9 de la Relacion 1</h1>

<table border="6" bordercolor="pink">
<?php

    $cont = 0;

    chdir('fotos/');

    $imagenes = scandir(getcwd());

    $size = sizeof($imagenes);

    for($i = 2; $i < $size; $i++)
    {
        $str[$i] = "fotos/" . $imagenes[$i];

        if($cont ==  4){
            $cont = 0;
            echo '<tr></tr>';
        }

        echo "<td><img src= '$str[$i]' width='200' height='200'></td>";
        $cont++;
    }

?>
</table>
</body>
</html>