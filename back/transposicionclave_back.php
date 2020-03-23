<?php
//convertir la cadena a mayúsculas
$clave = mb_strtoupper(eliminar_acentos($_POST['clave'],'utf-8'));
$entrada = mb_strtoupper(eliminar_acentos($_POST['entrada'],'utf-8'));
//eliminar espacios en blanco
$clave =str_replace(' ', '', $clave);
$entrada =str_replace(' ', '', $entrada);
//verificar entrada
$clave = verificarClave($clave);
$cadena = verificarEntrada($entrada);
$columnas = mb_strlen($clave);

//verificamos si no hay cambiado la cadena para encriptarla
if(strlen($cadena) == strlen($entrada)) {
    encriptarTransposicion($columnas, $clave.$cadena);
} else {
    echo $cadena;
}

//compruebo que los caracteres sean los permitidos. Esta función solo recibe mayusculas
function verificarEntrada($entrada) {
    $mensaje = 0;
    $permitidos = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    for ($i=0; $i<mb_strlen($entrada); $i++) {
        if (mb_strpos($permitidos, mb_substr($entrada,$i,1))===false) {
            $mensaje ++;
        }
    }
    if($mensaje > 0) {
        echo $mensaje = $entrada . " Texto claro no es una cadena válida. ". $mensaje . " caracteres no validos. Solo ingrese caracteres alfabéticos."; die();
    } else {
        $mensaje = $entrada;
    }
    return $mensaje;
}

//compruebo que los caracteres sean los permitidos. Esta función solo recibe mayusculas
function verificarClave($clave) {
    $mensaje = 0;
    $permitidos = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    for ($i=0; $i<mb_strlen($clave); $i++) {
        if (mb_strpos($permitidos, mb_substr($clave,$i,1))===false) {
            $mensaje ++;
        }
    }
    if($mensaje > 0) {
        echo $mensaje = $clave . " Clave no es una cadena válida. ". $mensaje . " caracteres no validos. Solo ingrese caracteres alfabéticos."; die();
    } else {
        $mensaje = $clave;
    }
    return $mensaje;
}

//creo la ofuscación de la cadena
function encriptarTransposicion($paquete, $cadena) {
    $columnas = $paquete;
    $residuo = mb_strlen($cadena)%$columnas;
    $entero = intval(mb_strlen($cadena)/$columnas);
    if($residuo != 0) { $entero++; }
    $filas = $entero;
    $c = 0;
    for($i = 0; $i < $columnas; $i++) {
        for($j = 0; $j < $filas; $j++) {
            if(mb_substr($cadena, $c, 1) != '') {
                $matriz[$j][$i] = mb_substr($cadena, $c, 1);
            } else {
                $matriz[$j][$i] = 'E';
            }
            $c++;
        }
    }
    //var_dump($matriz);
    for($i = 0; $i < $filas; $i++) {
        for($j= 0; $j < $columnas; $j++) {
            echo $matriz[$i][$j];
        }
    }
}

function eliminar_acentos($cadena) {

        //Reemplazamos la A y a
        $cadena = str_replace(
        array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
        array('A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
        $cadena
        );

        //Reemplazamos la E y e
        $cadena = str_replace(
        array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
        array('E', 'E', 'E', 'E', 'E', 'E', 'E', 'E'),
        $cadena );

        //Reemplazamos la I y i
        $cadena = str_replace(
        array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
        array('I', 'I', 'I', 'I', 'I', 'I', 'I', 'I'),
        $cadena );

        //Reemplazamos la O y o
        $cadena = str_replace(
        array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
        array('O', 'O', 'O', 'O', 'O', 'O', 'O', 'O'),
        $cadena );

        //Reemplazamos la U y u
        $cadena = str_replace(
        array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
        array('U', 'U', 'U', 'U', 'U', 'U', 'U', 'U'),
        $cadena );

        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
        array('Ñ', 'ñ', 'Ç', 'ç'),
        array('Ñ', 'Ñ', 'C', 'C'),
        $cadena
        );

        return $cadena;
}
?>
