<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>Biografia del alumno</h1>
    <?php
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $ciudad_nac = $_POST['ciudad_nac'];
        $ciudad_res = $_POST['ciudad_res'];
        $licenciatura = $_POST['licenciatura'];
        $curso = $_POST['curso'];

        echo "El alumno $nombre de $edad anyos de edad es un $sexo nacido en $ciudad_nac<br>\n
                que actualmente reside en $ciudad_res. $nombre estudia $licenciatura y se encuentra en el curso $curso.<br>\n"
    ?>
</body>
</html>