<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Letras</title>
</head>
<body>
    <h2>Ejercicio 4</h2>
    <?php
// Crear el arreglo con letras del alfabeto
$alfabeto = array();

for ($i = 97; $i <= 122; $i++) {
    $letra = chr($i);
    $alfabeto[$i] = $letra;
}

// Crear una tabla XHTML con las letras del alfabeto
echo '<table border="1">';
echo '<tr><th>Índice</th><th>Letra</th></tr>';

foreach ($alfabeto as $indice => $letra) {
    echo '<tr>';
    echo '<td>' . $indice . '</td>';
    echo '<td>' . $letra . '</td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>