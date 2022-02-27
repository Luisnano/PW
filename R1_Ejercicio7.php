<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>Problema 7 de la Relacion 1</h1>
<?php
    $cont = 0;
    $lleno = FALSE;
    for ($i = 1; $i <= 100 && $lleno != TRUE; $i++)
    {
        if($i%2 == 0)
        {
            $cont++;
            $pares[$cont] = $i;
        }
        if($cont == 10)
        {
            $lleno = TRUE;
        }
    }
    for($i = 1; $i <= 10; $i++)
    {
        print "$pares[$i]<br>\n";
    }
?>
</body>
</html>