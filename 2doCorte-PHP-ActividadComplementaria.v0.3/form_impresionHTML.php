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
                    <h4 style='text-align: center; margin-bottom: 20px;'>Datos ingresados:</h4>
                    <ul style='padding: 0; list-style-type: none'>
                        <?php
                        include ('form_process.php');
                        if (isset($array_datosPersonales)) {
                            $claves = array_keys($array_datosPersonales);
                            $valores = array_values($array_datosPersonales);
                            for ($i = 0; $i < count($claves); $i++) {
                                $campo = $claves[$i];
                                $valor = $valores[$i];
                                echo "<li style='margin-bottom: 15px;'><strong>" . htmlspecialchars($campo) . ":</strong>" . htmlspecialchars($valor) . "</li>";
                            }
                        }
                        ?>
                    </ul>
                </fieldset>
            </div>
        </section>
    </body>
</html>