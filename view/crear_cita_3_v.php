<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
html, body {
  height: 100%;
  margin: 0;
}

</style>
</head>
<body>
<div class="row" style="height:auto">
<div class="col">
<div class="card border-dark mb-3" style="width: 18rem;">
  <img src="css.png" class="card-img-top" alt="Caja de Seguro Social">
  <div class="card-body">
    <h5 class="card-title">Policlínicas</h5>
    <p class="card-text">Elija la Policlínica de su preferencia</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
<form action="crear_cita_4.php" method="post">
<h1>Médico</h1>

    <label for="cars">elige 1:</label>

<select name="policlinica" id="policlinica">
<?php 
foreach ($id as $i){
    echo ('<option value="'.$i['id'].'">'.$i['nombre'].'</option>');
}

?>
</select>

<label for="cars">elige 1:</label>

<select name="especialidad" id="especialidad">
<?php 
foreach ($especialidades as $especialidad){
    echo ('<option value="'.$especialidad['id'].'">'.$especialidad['nombre'].'</option>');
}

?>
</select>


</select>

<label for="cars">elige 1:</label>

<select name="medico" id="medico">
<?php 
foreach ($medicos as $medico){
    echo ('<option value="'.$medico['id'].'">'.$medico['nombre'].'</option>');
}

?>
</select>

<input type="submit" value="siguiente">

</form>
</li>
  </ul>
</div>
</div>
</div>
</body>
</html>