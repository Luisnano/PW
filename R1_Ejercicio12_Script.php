<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>PHP DE CONVERSION</h1>

    <?php

        $euro = $_POST['euro'];
        $moneda = $_POST['moneda'];

        settype($euro, "float");

        $conversion_a_libras = 0.86;
        $conversion_a_dolares = 1.14;

        if($moneda == "libras")
        {
            $libras = $euro*$conversion_a_libras;

            echo "$euro euros equivalen a $libras libras<br>\n";
        }
        if($moneda == "dolares")
        {
            $dolares = $euro*$conversion_a_dolares;

            echo "$euro euros equivalen a $dolares dolares<br>\n";
        }

    ?>

</FORM>
</body>
</html>