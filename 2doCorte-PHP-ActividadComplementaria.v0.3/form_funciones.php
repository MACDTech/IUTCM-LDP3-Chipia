<?php

function filtro_datosPersonales($datos) {
    return isset($datos) && htmlspecialchars(stripslashes(trim($datos)));
}

function filtro_correo($datos){
    
    
}
