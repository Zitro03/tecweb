<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";
$username = "nombre_de_usuario";
$password = "contraseña";
$dbname = "nombre_de_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

// Validar datos
if (empty($nombre) || empty($descripcion) || empty($precio) || empty($stock) || !is_numeric($precio) || strpos($precio, '.') === false) {
    echo "Error: Todos los campos son obligatorios y el precio debe ser un número con punto decimal.";
} else {
    // Insertar datos en la base de datos
    $sql = "INSERT INTO nombre_de_tabla (nombre, descripcion, precio, stock) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdd", $nombre, $descripcion, $precio, $stock);

    if ($stmt->execute()) {
        echo "Producto registrado con éxito.<br>";
        echo "<b>Resumen:</b><br>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Descripción: " . $descripcion . "<br>";
        echo "Precio: $" . $precio . "<br>";
        echo "Stock: " . $stock . "<br>";
    } else {
        echo "Error al registrar el producto: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
