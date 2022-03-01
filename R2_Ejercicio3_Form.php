<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Formulario R2_E3</title>
</head>
<body>
    <h1 style="color:blue">Inserción de una nueva noticia</h1>

    <div class="boxed">

        <form action = "R2_Ejercicio3_Script.php" method = "post">

        Título: *<input type = "text" name = "titulo" size = 20 required><br><br>

        <label for="texto">Texto: *</label>

        <textarea id="texto" name="texto" rows="4" cols="50" required></textarea><br><br>

        <p>Categoria: 
                <select name="categoria">
                    <option>Promociones</option>
                    <option>Ofertas</option>
                    <option>Costas</option>
                </select>
        </p>
        <!-- <form enctype="multipart/form-data" action="R2_Ejercicio3_ScriptImage.php" method="post">
        Imagen:  <input type="file" name="imagen_usuario"> -->
        <br><br>

        <input type = "submit" value = "Insertar noticia" style="width : 100px; heigth : 50px">

    </div>

    NOTA: Los campos marcados con (*) deben ser rellenados obligatoriamente.

    </form>
</body>
</html>