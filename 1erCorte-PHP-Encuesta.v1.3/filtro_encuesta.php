<?php

function filtro_encuestado($datos) {
    return isset($datos) && is_string(htmlspecialchars(stripslashes(trim($datos))));
}

function filtro_opciones($datos) {
    return is_numeric(htmlspecialchars(stripslashes(trim($datos))));
}

function filtro_vacio($datos) {
    if (empty($datos)) {
        $datos = "Dato no ingresado";
    } else if (!empty($datos)) {
        $datos = "Dato ingresado";
    }
    return $datos;
}

function filtro_opciones_vacio($dato1, $dato2, $dato3) {
    if (empty($dato1) || empty($dato2) || empty($dato3)) {
        echo "<fieldset>";
        echo "Seleccione una opcion de los campos a responder";
        echo "</fieldset>";
        ?> 
        <fieldset>
            <a href="index.php">Regresar...</a>   
        </fieldset>
        <?php
        exit;
    }
}

function apreciacion($datos) {
    if ($datos >= 14) {
        echo "<fieldset>Apreciacion del cliente: Buena <br> El cliente esta satisfecho con todos los aspectos de la experiencia</fieldset>";
    } else if ($datos >= 10 && $datos <= 13) {
        echo "<fieldset>";
        echo "Apreciacion del cliente: Regular <br>";
        echo "El cliente esta satisfecho con la mayoria de los aspectos de la experiencia, pero se requiere la mejora varios aspectos";
        echo "</fieldset>";
    } else if ($datos <= 9) {
        echo "<fieldset>Apreciacion del cliente: Mala <br> El cliente no esta satisfecho con la experiencia ofrecida</fieldset>";
    }
}
