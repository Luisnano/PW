<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Examen</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="ejercicio_formulario_script.php" method="post">
        E-mail: <input type="email" name="email">
        <br></br>
        Confirmacion de E-mail: <input type="email" name="email_confirmacion">
        <br></br>
        <p>
            Sex: <input type="radio" name = "sexo" value="Male">Male
                <input type="radio" name = "sexo" value="Female">Female
        </p>
        <br></br>
        Year of birth: <input type="date" name="nacimiento">
        <br></br>
        Zip Postal Code: <input type="text" name="zip">
        <br></br>
        <p>Country: <select name="country">
                <?php
                    foreach($Countries as $clave => $valor){
                        echo "<option>$valor</option>";
                    }
                    ?>
                    </select>
        </p>
        Select a password: <input type="password" name="contraseña">
        <br></br>
        Confirm password: <input type="password" name="contraseña_repe">
        <br></br>
        <p>
            <input type="submit" value="REGISTER!">
        </p>
    <form>
</body>
</html>