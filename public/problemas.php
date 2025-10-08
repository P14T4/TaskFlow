<?php
// Problema 1.1:
$nombre = "Ainhoa";
$apellido = "Plata";
$edad = 21;
$altura = 1.65;
$es_estudiante = true;

echo "Nombre: $nombre<br>";
echo "Apellido: $apellido<br>";
echo "Edad: $edad años<br>";
echo "Altura: $altura m<br>";
echo "¿Es estudiante?: " . ($es_estudiante ? "Sí" : "No") . "<br>";

echo "<hr>";
//Problema 1.2:
$nombre_producto = "Pc";
$precio = 803.59;
$stock_disponible = 2;
$esta_en_oferta = false;

echo "Nombre del producto: $nombre_producto<br>";
echo "Precio: $precio €<br>";
echo "Stock disponible: $stock_disponible unidades<br>";
echo "¿Está en oferta?: " . ($esta_en_oferta ? "Sí" : "No") . "<br>";

echo "<hr>";
//Problema 1.3: 
const nombre_sitio = "Mi Tienda Online";
const version_app = 1.0;

echo nombre_sitio . "<br>";
echo version_app;

echo "<hr>";
//Problema 2.1:
$num1 = 10;
$num2 = 5;

// Suma
$suma = $num1 + $num2;
echo "Suma: $suma<br>";

// Resta
$resta = $num1 - $num2;
echo "Resta: $resta<br>";

// Multiplicación
$multiplicacion = $num1 * $num2;
echo "Multiplicación: $multiplicacion<br>";

// División
$division = $num1 / $num2;
echo "División: $division<br>";

//Problema 2.2:
$stock = 100;
echo "Stock inicial: $stock<br>";
$stock = $stock - 25;
echo "Stock después de la venta de 25 unidades: $stock<br>";
$stock = $stock + 50;
echo "Stock después de recibir 50 unidades más: $stock<br>";
//Problema 2.3:
$nombre = "Oskar";
$apellido = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";
$fraseCompleta = "El profesor $nombre $apellido imparte el curso de $curso";
echo $fraseCompleta;

//Problema 2.4:
$edad = 20;
$edadMinima = 18;
var_dump($edad >= $edadMinima); // true si cumple, false si no
echo "<br>";
$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";
var_dump($contraseñaGuardada === $contraseñaUsuario); // true o false

//Problema 2.5:
$numero = 7;
if ($numero % 2 == 0) {
    echo "El número $numero es par";
} else {
    echo "El número $numero es impar";
}

//Problema 3.1:
$edad = 17;
if ($edad >= 18) {
    echo "Puedes pasar";
} else {
    echo "No puedes pasar";
}

//Problema 3.2:
$nota = 7.5;
if ($nota >= 9) {
    echo "Sobresaliente";
} elseif ($nota >= 7 && $nota < 9) {
    echo "Notable";
} elseif ($nota >= 5 && $nota < 7) {
    echo "Aprobado";
} else {
    echo "Suspenso";
}
//Problema 3.3:
$diaSemana = "lunes";
switch ($diaSemana) {
    case "lunes":
        echo "Lentejas";
        break;
    case "miércoles":
        echo "Paella";
        break;
    case "viernes":
        echo "Pescado al horno";
        break;
    default:
        echo "Hoy no hay menú especial";
        break;
}

//Problema 3.4:
$rolUsuario = "admin";
$usuarioActivo = true;

if ($rolUsuario === "admin" && $usuarioActivo) {
    echo "Acceso concedido";
} else {
    echo "Acceso denegado";
}

//Problema 4.1:

for ($i = 1; $i <= 10; $i++) {
    $resultado = 7 * $i;
    echo "7 x $i = $resultado<br>";
}

//Problema 4.2:
$contador = 10;

while ($contador >= 1) {
    echo "$contador<br>";
    $contador--; // Disminuye el valor en 1 en cada iteración
}

echo "¡Feliz Año Nuevo!";

//Problema 4.3:
$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];

foreach ($alumnos as $alumno) {
    echo "Hola, $alumno<br>";
}

//Problema 4.4:
$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];
foreach ($productos as $producto) {
    echo "Producto: " . $producto["nombre"] . ", Precio: " . $producto["precio"] . " €<br>";
}


//Problema 5.1:
$usuario = [
    "nombre" => "Ainhoa",
    "edad" => 21,
    "email" => "ainhoa@example.com",
    "estudiante" => true
];
echo "Nombre: " . $usuario["nombre"] . "<br>";
echo "Edad: " . $usuario["edad"] . "<br>";
echo "Email: " . $usuario["email"] . "<br>";
echo "¿Es estudiante?: " . ($usuario["estudiante"] ? "Sí" : "No") . "<br>";

//Problema 5.2:
$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];

foreach ($notas as $nota) {
    if ($nota >= 5) {
        echo "Nota aprobada: $nota<br>";
    }
}
//Problema 5.3:
$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];
foreach ($listaCompra as $categoria => $productos) {
    echo "<strong>$categoria:</strong><br>";
    foreach ($productos as $producto) {
        echo "- $producto<br>";
    }
    echo "<br>";
}

?>