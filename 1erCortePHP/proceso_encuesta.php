<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>1er Corte - Trabajo Practico (Chipia) - Encuesta</title>
    </head>
    <body>
        <section style="width: 50%; margin: 0 auto">
            <fieldset>
                <legend>Resultados</legend>
                <?php
                include ('filtro_encuesta.php'); #Inclusion del archivo con funciones de filtrado
                
                #Asignación de variables de formulario con filtrado de encuestados (clientes):
                $Nombre = filtro_encuestado($_POST['Nombre']) ? $_POST['Nombre'] : '';
                $Apellido = filtro_encuestado($_POST['Apellido']) ? $_POST['Apellido'] : '';
                $Email = filtro_encuestado($_POST['Email']) ? $_POST['Email'] : '';
                
                $errorNombre = filtro_vacio($Nombre); #Uso de función para validar campo vacío.
                echo $errorNombre . " | " . $Nombre . "<hr>"; #Impresion de resultado con concatenacion.
                $errorApellido = filtro_vacio($Apellido);
                echo $errorApellido . " | " . $Apellido . "<hr>";
                $errorEmail = filtro_vacio($Email);
                echo $errorEmail . " | " . $Email . "<hr>";
                
                #Asignación de opciones del formulario tras filtrarlas:
                $personal = isset($_POST['personal']) && filtro_opciones($_POST['personal']) ? $_POST['personal'] : '';
                $comida = isset($_POST['comida']) && filtro_opciones($_POST['comida']) ? $_POST['comida'] : '';
                $tiempo = isset($_POST['tiempo']) && filtro_opciones($_POST['tiempo']) ? $_POST['tiempo'] : '';
               
                is_numeric($resultado = $personal + $comida + $tiempo); #Variable de calculo del resultado, validando que sean "values" numericos.
                echo "<fieldset>Resultado de la encuesta: $resultado</fieldset><hr>"; #Impresion de resultado.
                apreciacion($resultado); #Funcion para determinar apreciacion de los encuestados (clientes)
                ?>
                <hr>
                <fieldset>
                    <a href="index.php">Regresar...</a>   
                </fieldset>
            </fieldset>
        </section> 
    </body>
</html>