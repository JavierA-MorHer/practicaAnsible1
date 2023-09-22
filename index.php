<html>
<head>
    <title>Mi Página</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <?php
        $servername = "localhost";
        $username = "javier";
        $password = "admin";
        $dbname = "mi_base_de_datos";

        try{
         $conn = new mysqli($servername, $username, $password, $dbname);
        echo "Conectado :) <br> <br>";

        }catch(Exception $e) {
             echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}


// Consulta SQL para seleccionar datos
$sql = "SELECT id, nombre, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión a la base de datos
$conn->close();

?>
<body>
</html>
