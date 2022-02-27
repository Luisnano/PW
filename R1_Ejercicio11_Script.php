<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>PHP DE CONVERSION</h1>

    <?php

        $valor = $_POST['euro'];
        settype($valor, "float");
        $conversion = 0.86;
        $libras = $valor*$conversion;

        echo "$valor euros equivalen a $libras libras<br>\n";

    ?>

</FORM>
</body>
</html>