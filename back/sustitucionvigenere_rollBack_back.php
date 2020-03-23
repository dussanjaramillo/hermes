<?php
// Limpiar cadenas
$pswd = str_replace(' ', '', $_POST['key']);
$text = str_replace(' ', '', $_POST['entrada']);
// Ajustar clave para estandarizar
$pswd = eliminar_acentos($pswd);
$pswd = verificarEntrada($pswd);
// Ajustar cadena para estandarizar
$text = eliminar_acentos($text);
$text = verificarEntrada($text);
//Desencriptar cadena
echo decrypt($pswd, $text);

// Funcion para desencriptar cadena
function decrypt($pswd, $text)
{
    // Cambiar la clave a minusculas para recortar el calculo
    $pswd = strtolower($pswd);

    // Inicializar variables
    $code = "";
    $ki = 0;
    $kl = strlen($pswd);
    $length = strlen($text);

    // Iteración para cada linea de texto
    for ($i = 0; $i < $length; $i++)
    {
        // Si la letra es alpha lo desencriptamos
        if (ctype_alpha($text[$i]))
        {
            // Mayusculas
            if (ctype_upper($text[$i]))
            {
                $x = (ord($text[$i]) - ord("A")) - (ord($pswd[$ki]) - ord("a"));

                if ($x < 0)
                {
                    $x += 26;
                }

                $x = $x + ord("A");

                $text[$i] = chr($x);
            }

            // Minusculas
            else
            {
                $x = (ord($text[$i]) - ord("a")) - (ord($pswd[$ki]) - ord("a"));

                if ($x < 0)
                {
                    $x += 26;
                }

                $x = $x + ord("a");

                $text[$i] = chr($x);
            }

            // Actulizar indice de clave
            $ki++;
            if ($ki >= $kl)
            {
                $ki = 0;
            }
        }
    }

    return $text;
}

//compruebo que los caracteres sean los permitidos. Esta función solo recibe mayusculas
function verificarEntrada($entrada) {
    $mensaje = 0;
    $permitidos = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz";
    for ($i=0; $i<mb_strlen($entrada); $i++) {
        if (mb_strpos($permitidos, mb_substr($entrada,$i,1))===false) {
            $mensaje ++;
        }
    }
    if($mensaje > 0) {
        $mensaje = $entrada . " no es una cadena válida. ". $mensaje . " caracteres no validos. Solo ingrese caracteres alfabéticos.";
    } else {
        $mensaje = $entrada;
    }
    return $mensaje;
}

function eliminar_acentos($cadena) {

        //Reemplazamos la A y a
        $cadena = str_replace(
        array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
        array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
        $cadena
        );

        //Reemplazamos la E y e
        $cadena = str_replace(
        array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
        array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
        $cadena );

        //Reemplazamos la I y i
        $cadena = str_replace(
        array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
        array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
        $cadena );

        //Reemplazamos la O y o
        $cadena = str_replace(
        array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
        array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
        $cadena );

        //Reemplazamos la U y u
        $cadena = str_replace(
        array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
        array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
        $cadena );

        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
        array('Ñ', 'ñ', 'Ç', 'ç'),
        array('Ñ', 'ñ', 'C', 'c'),
        $cadena
        );

        return $cadena;
}

?>
