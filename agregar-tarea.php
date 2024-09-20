<?php
session_start();
//array asociativo (variable de session)
if (!isset($_SESSION['tareas'])) //el if verifica si la variable de session tareas existe(si no existe la creas)
{
    $_SESSION['tareas']=[];
}

$tareas=$_SESSION['tareas']; //array local

$nueva_tarea=$_POST['tarea'];//jalando del formulario

$tareas[]=$nueva_tarea;
$_SESSION['tareas']=$tareas;
header('Location:index.php');
?>