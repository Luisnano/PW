<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script de examen</title>
</head>
<body>
    <?php
    
        $conexion = mysqli_connect('localhost', 'user', 'contraseña', 'examen');

        $email = $_POST['email'];
        $email_confirmacion = $_POST['email_confirmacion'];
        $sexo = $_POST['sexo'];
        $date = $_POST['date'];
        $zip = $_POST['zip'];
        $country = $_POST['country'];
        $contraseña = $_POST['contraseña'];
        $contraseña_validacion = $_POST['contraseña_validacion'];

        $query = mysqli_query($conexion, "SELECT email FROM usuarios");

        $email_existe = FALSE;

        foreach($query as $valor){
            if ($valor == $email){
                $email_existe = TRUE;
            }
        }
        if ($email_existe == TRUE){
            echo "Error en el registro, el email ya existe";
            mysqli_close($conexion);
        }

        if ($contraseña != $contraseña_validacion){
            echo "Error en el registro, las dos contraseñas no coinciden";
            mysqli_close($conexion);
        }

        mysqli_query("INSERT INTO TABLE usuarios (email, sexo, date, zip, country, contraseña) VALUES ($email, $sexo, $date, $zip, $country, $contraseña )");
        mysqli_close($conexion);

    ?>
</body>
</html>