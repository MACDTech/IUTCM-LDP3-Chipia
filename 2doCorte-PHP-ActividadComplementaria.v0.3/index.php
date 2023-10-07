<!DOCTYPE html>
<!--
IUTCM - Informatica
Author: MACD.
Lenguaje de Programacion III
Actividad: Crear un formulario web que permita al usuario ingresar sus datos personales, 
tales como nombre, apellido, correo electrónico y número de teléfono. 
Una vez que el usuario envíe el formulario, el código PHP deberá procesar 
los datos y almacenarlos en un array asociativo. 
Posteriormente, el código PHP deberá mostrar los datos en una hoja HTML.

El trabajo debe ser enviado a través de un repositorio de GitHub.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Asignacion complementaria - Manuel Chipia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="font-family: 'Roboto', sans-serif">
        <header>
            <div style="display: grid; align-content: center; justify-content: center; justify-items: center">
                <h1>2do. Corte - Formulario con Arrays Asociativos</h1>
                <hr style="width: 60%">
                <h3>Bienvenido, usuario</h3>
            </div>
        </header>

        <section style="padding: 15px; background-color: #f9f9f9;">
            <div style="display: flex; align-items: center; justify-content: center;">
                <fieldset style="width: 100%; max-width: 500px; margin: 0 auto; background-color: #ffffff; border-radius: 5px; border: 1px solid #ccc; padding: 20px;">
                    <legend style="font-weight: bold; padding-bottom: 10px;">Formulario</legend>
                    <form action="form_process.php" method="POST">
                        <h4 style="text-align: center; margin-bottom: 20px;">Ingrese sus datos</h4>
                        <hr style="border: none; border-top: 1px solid #ccc; margin-bottom: 20px;">
                        <ul style="padding: 0; list-style-type: none">
                            <li style="margin-bottom: 15px;"><label for="nombre" style="font-weight: bold;">Nombre:</label><input id="nombre" name="nombre" type="text" style="width: 100%; padding: 5px;"></li>
                            <li style="margin-bottom: 15px;"><label for="apellido" style="font-weight: bold;">Apellido:</label><input id="apellido" name="apellido" type="text" style="width: 100%; padding: 5px;"></li>
                            <li style="margin-bottom: 15px;"><label for="correo" style="font-weight: bold;">Correo Electrónico:</label><input id="correo" name="correo" type="email" style="width: 100%; padding: 5px;"></li>
                            <li style="margin-bottom: 15px;"><label for="telefono" style="font-weight: bold;">Nro. de teléfono:</label><input id="telefono" name="telefono" type="tel" style="width: 100%; padding: 5px;"></li>
                        </ul>
                        <button type="submit" style="background-color: #4CAF50; color: #fff; border: none; padding: 10px 20px; cursor: pointer; font-weight: bold;">Enviar</button>
                    </form>
                </fieldset>
            </div>
        </section>
    </body>
</html>