<?php 

require('model/Conexion.php');

//se crea un objeto con toda la logica del modelo
$con = new Conexion();

// obtener datos ingresados 
$policlinica = $_POST['policlinica'];
$especialidad = $_POST['especialidad'];
$medico = $_POST['medico'];


// obtener los datos a mostrar en la vista
$id = $con->RecuperarPoliclinicaFase2($policlinica);

$especialidades = $con->recuperarEspecialidadesFase2($especialidad);

$medicos = $con->obtenerMedicoFase2($medico);

$horarios = $con->obtenerHorarios();

require('view/crear_cita_4_v.php');//se muestra que el guardado fue exitoso
?>