<?php  


include 'conexion.php';


//variable en donde almacenaremos los datos que nosotros escribamos en la casilla nombre completo del formulario registro
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$RFC = $_POST['RFC'];
$contrasena = $_POST['contrasena'];

//Creamos query para que los datos se almacenen en la base de datos de xampp
$query = "INSERT INTO usuarios(nombre_completo, correo, RFC, contrasena)  VALUES('$nombre_completo', '$correo', '$RFC', '$contrasena')";

//ejecutamos query
$ejecutar = mysqli_query($conexion, $query);



?>