//Problema 1
<?php 
function calcularDescuento ($precio, $categoria) {
switch ($categoria) {
    case "electronica":
        $descuento = 0.15;
        break;
    case "ropa":
        $descuento = 0.10;
        break;
    case "alimentacion":
        $descuento = 0.05;
        break;
}
$precioFinal = $precio - ($precio * $descuento);
return $precioFinal;
}
//Problema 2
function fizzBuzz($numero){
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        return "FizzBuzz";
    } elseif ($numero % 3 == 0) {
        return "Fizz";
    } elseif ($numero % 5 == 0) {
        return "Buzz";
    } else {
        return $numero;
    }
} 

//Problema 3 
function validarContraseña($pass) {
    $longitud = strlen($pass);
    $tieneMayuscula = preg_match('/[A-Z]/', $pass); 
    $tieneNumero = preg_match('/[0-9]/', $pass);   

    //FUERTE 
    if ($longitud > 8 && $tieneMayuscula && $tieneNumero) {
        return "FUERTE";
    }

    //MEDIA
    if ($longitud > 8 && (!$tieneMayuscula || !$tieneNumero)) {
        return "MEDIA";
    }

    //DEBIL
    return "DEBIL";
}

//Problema 4
function encontrarMaximo($array) {
    $maximo = $array[0];
    foreach ($array as $numero) {
        if ($numero > $maximo) {
            $maximo = $numero;
        }
    }

    return $maximo;
}
//Problema 5

?>