<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>Problema 13 de la Relacion 1</h1>

<form enctype="multipart/form-data" action="R1_Ejercicio13_Script.php" method="post">
    Imagen a subir: <input type="file" name="imagen_usuario">
    <br />
    <input type="submit" value="Enviar imagen">


<?php

    function extension($imagen)
    {
        $esValido = FALSE;
        $ext = pathinfo($imagen, PATHINFO_EXTENSION);
        $array = array('jpg','png','bmp','gif');
        foreach ($array as $i)
        {
            if ($ext == $i)
            {
                $esValido = TRUE;
            }
        }
        return $esValido;
    }

?>

<table border="6" bordercolor="black">
<?php

    $cont = 0;

    chdir('fotos/');

    $imagenes = scandir(getcwd());

    $size = sizeof($imagenes);

    for($i = 2; $i < $size; $i++)
    {
        $esValido = extension($imagenes[$i]);
        if ($esValido == TRUE)
        {
            $str[$i] = "fotos/" . $imagenes[$i];

            if($cont ==  4){
                $cont = 0;
                echo '<tr></tr>';
            }
    
            echo "<td>
                    <a href= '$str[$i]'>
                        <img src= '$str[$i]' width='100' height='100'>
                    </a>
                </td>";
            $cont++;
        }
    }

?>
</table>
</body>
</html>