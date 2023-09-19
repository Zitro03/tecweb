<!DOCTYPE html>
<html>
<head>
    <title>Encontrar Múltiplo</title>
</head>
<body>
<?php
// Obtener el número dado a través de GET
$numero_dado = isset($_GET['numero']) ? intval($_GET['numero']) : 1;

// Inicializar una variable para almacenar el número aleatorio
$numero_aleatorio = 0;

// Usar un ciclo while para encontrar el primer número entero aleatorio que sea múltiplo del número dado
while ($numero_aleatorio % $numero_dado != 0) {
    $numero_aleatorio = rand(1, 100); // Cambia el rango según tus necesidades
}

// Mostrar el resultado
echo "El primer número entero aleatorio múltiplo de $numero_dado es: $numero_aleatorio";
?>

</body>
</html>