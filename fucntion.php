<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "datatable_demo";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

<?php

// Conectar a la base de datos
$conn = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

// Verificar la conexión
if (!$conn) {
  die("Error de conexión: " . mysqli_connect_error());
}

// Consulta para recuperar los datos de la tabla "usuarios"
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conn, $sql);

// Crear la tabla HTML y agregar los encabezados de columna
echo "<table id='datatable_users' class='table table-striped'>
        <caption>DataTable.js Demo</caption>
        <thead>
            <tr>
                <th class='centered'>#</th>
                <th class='centered'>Name</th>
                <th class='centered'>Email</th>
                <th class='centered'>City</th>
                <th class='centered'>Company</th>
                <th class='centered'>Status</th>
                <th class='centered'>Options</th>
            </tr>
        </thead>
        <tbody id='tableBody_users'>";

// Agregar los datos a la tabla
if (mysqli_num_rows($resultado) > 0) {
  while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td class='centered'>" . $fila["id"] . "</td>
            <td class='centered'>" . $fila["nombre"] . "</td>
            <td class='centered'>" . $fila["email"] . "</td>
            <td class='centered'>" . $fila["ciudad"] . "</td>
            <td class='centered'>" . $fila["compania"] . "</td>
            <td class='centered'>" . $fila["estado"] . "</td>
            <td class='centered'><a href='#'>Editar</a> | <a href='#'>Eliminar</a></td>
          </tr>";
  }
} else {
  echo "<tr><td colspan='7'>No hay datos disponibles.</td></tr>";
}

// Cerrar la tabla HTML y desconectar de la base de datos
echo "</tbody></table>";
mysqli_close($conn);

?> 

