<?php 

require('model/Conexion.php');

//se crea un objeto con toda la logica del modelo
$con = new Conexion();

// recuperar dato seleccionado 
$policlinica = $_POST['policlinica'];


// obtener datos a mostrar en la siguiente vista
$id = $con->RecuperarPoliclinicaFase2($policlinica);

$gruposid = $con->encotrarEspecialdades($id);

$especialidades = $con->obtenerNombreEspecialidad($gruposid);


require('view/crear_cita_2_v.php');//se muestra que el guardado fue exitoso
?>