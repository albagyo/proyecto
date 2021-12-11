<?php 

require('model/Conexion.php');

//se crea un objeto con toda la logica del modelo
$con = new Conexion();

// obtener datos ingresados
$policlinica = $_POST['policlinica'];
$especialidad = $_POST['especialidad'];


// obtener datos que se muestran en la vista
$id = $con->RecuperarPoliclinicaFase2($policlinica);

$especialidades = $con->recuperarEspecialidadesFase2($especialidad);

$doctores = $con->getMedico();

$medicos = $con->obtenerMedico($especialidad,$policlinica);

require('view/crear_cita_3_v.php');//se muestra que el guardado fue exitoso
?>