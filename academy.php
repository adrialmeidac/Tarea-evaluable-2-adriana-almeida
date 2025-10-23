<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
require './Miembro.php';
require './Alumno.php';
require './Profesor.php';
require './Asignatura.php';

$alumnos = Alumno::crearAlumnoDeMuestra();
$profesores = Profesor::crearProfesoresDeMuestra();
$asignaturas = Asignatura::crearAsignaturaDeMuestra();

$alumnos[0]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);

$alumnosMenores23 =array_filter($alumnos, function($alumno){
return $alumno->getEdad()<23;

});


$alumnosConDosAsignaturas= array_filter($alumnos,function($alumno){
return count($alumno-> getAsignatura())>=2;

});





$asignaturasConAlumnos=array_filter ($asignaturas,function($asignatura) use ($alumnos){
    foreach($alumnos as $alumno)
        foreach ($alumno->getAsignatura() as $asignaturaAlumno){
    if ($asignaturaAlumno==$asignatura){
    return true;
    }
}
return false;
});
?>
<h1>Alumnos </h1>
<ul>
    <?php
    foreach ($alumnos as $alumno){
        ?>
    <li><?php echo $alumno; ?></li>
    <?php
}
?>
</ul>
<h2>Profesores</h2>
<ul>
    <?php foreach ($profesores as $profesores) {
        ?>
        <li><?php echo $profesores ?></li>
        <?php        
    }
    ?>
    </ul>

    <h2>Asignaturas</h2>
<ul>
    <?php foreach ($asignaturas as $asignatura) {
        ?>
        <li><?php echo $asignatura ?></li>
        <?php        
    }
    ?>
    </ul>


    <h2>Asignaturas con algun alumno matriculado </h2>
<ul>
    <?php foreach ($asignaturasConAlumnos as $asignatura) {
        ?>
        <li><?php echo $asignatura ?></li>
        <?php        
    }
    ?>
    </ul>
    <h2>Alumnos con menos de 23 años </h2>
<ul>
    <?php foreach($alumnosMenores23 as $alumno){ ?>
    <li><?= $alumno ?></li>
    <?php }
?>

    </ul>
    <h2>Asignaturas con al menos dos asignaturas </h2>
<ul>
    <?php foreach($alumnosConDosAsignaturas as $alumno){?>
    <li><?= $alumno ?></li>
<?php }
    ?>
    </ul>
   
</body>
</html>