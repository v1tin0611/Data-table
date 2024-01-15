$host = "localhost";
$user = "tu_usuario_de_mysql";
$password = "tu_contraseña_de_mysql";
$database = "datatable_demo";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
