<!DOCTYPE html>
<html lang = "es">
<body>
    <h1>PROBLEMA 14 DE LA RELACION 1</h1>

    <FORM ACTION= "R1_Ejercicio14_Script.php" METHOD= "POST">

    <p>Nombre: <INPUT TYPE="text" NAME= "nombre" SIZE= 40 ></p>

    <p>Edad: <INPUT TYPE="number" NAME= "edad" min="0"></p>

    <p>Sexo: 
        <input type="radio" NAME= "sexo" value="hombre"> Hombre
        <input type="radio" NAME= "sexo" value="mujer"> Mujer
    </p>

    <p>Ciudad de nacimiento: <INPUT TYPE="text" NAME= "ciudad_nac" SIZE= 40></p>

    <p>Ciudad de residencia: <INPUT TYPE="text" NAME= "ciudad_res" SIZE= 40></p>

    <p>Licenciatura: <INPUT TYPE="text" NAME= "licenciatura" SIZE= 40></p>

    <p>Curso: 
            <select name="curso">
                <option>Primero</option>
                <option>Segundo</option>
                <option>Tercero</option>
                <option>Cuarto</option>
            </select>
    </p>

    <p>¿Que deporye te gusta?:<br>
        
        Futbol: <input tyoe = "checkbox" name = "futbol" >
        Baloncesto: <input tyoe = "checkbox" name = "baloncesto" >
        Balonmano: <input tyoe = "checkbox" name = "balonmano" >
    
    </p>

    <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </p>

</FORM>
</body>
</html>