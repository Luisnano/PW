<!DOCTYPE html>
<html lang = "es">
<h1>Problema 5 de la Relacion 1</h1>
<?php
    define("TAM", 10);
    $cont = 0;
    $filas = 1;
?>
<table border="5"bordercolor="pink">
<?php
    for ($i = 1; $i <= 100; $i++){

        if($cont ==  TAM){
            $cont = 0;
            if($filas%2==1){echo '<tr bgcolor="gainsboro">';}
            if($filas%2==0){echo '<tr bgcolor="white">';};
            $filas++;
        }
        echo '<td>'.$i.'</td>';

        $cont++;
    }
?>
</table>
</body>
</html>