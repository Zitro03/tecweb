<!DOCTYPE html>
<html>
<head>
    <title>Encontrar Múltiplo (do-while)</title>
</head>
<body>
    <h2>Ejercicio 3</h2>
    <?php
// Obtener el número dado a través de GET
$numero_dado = isset($_GET['numero']) ? intval($_GET['numero']) : 1;

// Inicializar una variable para almacenar el número aleatorio
$numero_aleatorio = 0;

// Usar un ciclo do-while para encontrar el primer número entero aleatorio que sea múltiplo del número dado
do {
    $numero_aleatorio = rand(1, 100); // Cambia el rango según tus necesidades
} while ($numero_aleatorio % $numero_dado != 0);

// Mostrar el resultado
echo "El primer número entero aleatorio múltiplo de $numero_dado es: $numero_aleatorio";
?>

</body>
</html>