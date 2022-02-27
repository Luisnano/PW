<!DOCTYPE html>
<html lang = "es">
<style>
table, th, td {
  border:6px solid black;
}
</style>
<h1>Problema 4 de la Relacion 1</h1>
<?php
    $cont = 0;
?>
<table>
<?php
    for ($i = 1; $i <= 100; $i++){

        if($cont ==  10){
            $cont = 0;
            echo '<tr></tr>';
        }
        echo '<td>'.$i.'</td>';

        $cont++;
    }
?>
</table>
</body>
</html>