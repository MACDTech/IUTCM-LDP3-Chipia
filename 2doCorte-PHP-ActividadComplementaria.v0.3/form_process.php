<!DOCTYPE html>
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
        <?php
        include_once ('form_funciones.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : '';
            $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : '';
            $correo = isset($_POST["correo"]) ? $_POST["correo"] : '';
            $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : '';
            $array_datosPersonales = ["Nombre" => $nombre, "Apellido" => $apellido, "Correo" => $correo, "Telefono" => $telefono];
        }
        ?>
        <section style="padding: 15px; background-color: #f9f9f9;">
            <div style="display: flex; align-items: center; justify-content: center;">
                <fieldset style="width: 100%; max-width: 500px; margin: 0 auto; background-color: #ffffff; border-radius: 5px; border: 1px solid #ccc; padding: 20px;">
                    <legend style="font-weight: bold; padding-bottom: 10px;">Formulario</legend>
                    <h4 style='text-align: center; margin-bottom: 20px;'>Datos ingresados:</h4>
                    <ul style='padding: 0; list-style-type: none'>
                        <?php
                        if (isset($array_datosPersonales)) {
                            $claves = array_keys($array_datosPersonales);
                            $valores = array_values($array_datosPersonales);
                            for ($i = 0; $i < count($claves); $i++) {
                                $campo = $claves[$i];
                                $valor = $valores[$i];
                                echo "<li style='margin-bottom: 15px;'><strong>" . htmlspecialchars($campo) . ":</strong> " . htmlspecialchars($valor) . "</li>";
                            }
                        }
                        ?>
                    </ul>
                </fieldset>
            </div>
        </section>
    </body>
</html>
