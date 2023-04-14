<?php
require_once('conexiones.php');




$nombrec = $_POST['boxname'];
$numdocumento = $_POST['boxnumdocumento'];
$tipoid = $_POST['format'];
$opcionCD = $_POST['OpcionConsejoDir'];


print "<p> el nombre es $nombrec</p>\n";
print "<p> su tipo de documento es $tipoid</p>\n";
print "<p> su numero de documento es $numdocumento</p>\n";
print "<p> la opcion de directivo es $opcionCD</p>\n";


$sql=("INSERT INTO `votacionesdoc` (`VotoNumero`, `NombreCompleto`, `TipoDocumento`, `NumeroDocumento`, `OpcionConsejoDir`) 
VALUES ('', '$nombrec', '$tipoid', '$numdocumento', '$opcionCD');");

//Ejecutar el query en la base de datos mediante la conexion

if (mysqli_query($conn, $sql)) {
    echo "Exito en la insercion";
    header("Location: ../PHP/privado.php", TRUE, 301);
    exit();
    mysqli_close($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




?>