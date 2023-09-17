<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title>1er Corte - Ejercicio #1 (Chipia) - Encuesta</title>
    </head>
    <body>
        <header>
            <h1 align="center">Trabajo Practico. 1er Corte. Encuesta</h1>
        </header>
        <hr>
        <section style="width: 50%; margin: 0 auto;">
            <fieldset>
                <form action="proceso_encuesta.php" method="post">
                    <fieldset>
                        <legend>Datos del Encuestado</legend>
                        <div style="display: grid">
                            <label for="Nombre_Encuestado">Nombres: </label>
                            <input type="text" id="Nombre_Encuestado" name="Nombre">
                            <br>
                            <label for="Apellido_Encuestado">Apellidos: </label>
                            <input type="text" id="Apellido_Encuestado" name="Apellido">
                            <br>
                            <label for="Correo">Correo: </label>
                            <input type="email" id="Email_Encuestado" name="Email">
                        </div>
                    </fieldset>
                    <hr>
                    <div style="display: flex; justify-content: space-evenly">
                        <fieldset>
                            <legend>Atencion por parte del personal: </legend>
                            <input type="radio" name="personal" id="optn_personal" value="5"><label for="optn_personal">Buena</label><br>
                            <input type="radio" name="personal" id="optn_personal" value="3"><label for="optn_personal">Regular</label><br>
                            <input type="radio" name="personal" id="optn_personal" value="1"><label for="optn_personal">Mala</label><br>
                        </fieldset>
                        <fieldset>
                            <legend>Calidad de la comida servida: </legend>
                            <input type="radio" name="comida" id="optn_comida" value="5"><label for="optn_comida">Buena</label><br>
                            <input type="radio" name="comida" id="optn_comida" value="3"><label for="optn_comida">Regular</label><br>
                            <input type="radio" name="comida" id="optn_comida" value="1"><label for="optn_comida">Mala</label><br>
                        </fieldset>
                        <fieldset>
                            <legend>Tiempo entre toma de pedido y entrega del plato: </legend>
                            <input type="radio" name="tiempo" id="optn_tiempo" value="5"><label for="optn_tiempo">Buena</label><br>
                            <input type="radio" name="tiempo" id="optn_tiempo" value="3"><label for="optn_tiempo">Regular</label><br>
                            <input type="radio" name="tiempo" id="optn_tiempo" value="1"><label for="optn_tiempo">Mala</label><br>
                        </fieldset>
                    </div>
                    <hr>
                    <div style="display: flex; gap: 5px;justify-content: center;">
                        <input type="submit" name="Enviar">
                        <input type="reset" name="Borrar">
                    </div>
                </form>
            </fieldset>
            <hr>
            <fieldset style="display:block; margin: 0 auto; width: 100%; justify-content: center">
                <textarea style="display:block; margin: 0 auto; width: 100%" placeholder="Ingrese su opinion" maxlength=256></textarea>
            </fieldset>
        </section>
        <hr>
        <footer>
            <h4 align="center">Manuel Chipia. 2023</h4>
        </footer>
    </body>
</html>