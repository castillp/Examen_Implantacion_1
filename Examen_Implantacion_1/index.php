<?php
session_start();
include 'head.php';
require_once 'clases/Conexion.php';                                             

echo'<center><img src="images/alta_incidencia.png" width="600" height="300" alt="incidencia"/></center>';

 $obj_conexion=new Conexion();
 $con=$obj_conexion->conectar();//ya tengo en esa variable la conexion


$incidencias[]=array(1,"Si","Vandalismo","25-10-2020 10:37:43","Plaza mayor","193.12.56.25","Farola rota");
$incidencias[]=array(2,"Si","Basuras","26-10-2020 12:07:23","C/Pelicano 25","131.130.121.125","Contenedor basura roto");
$incidencias[]=array(3,"Si","Aseo Urbano","27-10-2020 00:07:23","C/Cigueña 5","145.20.11.15","Aseos averiados");
$incidencias[]=array(4,"No","Mobiliario Urbano","27-10-2020 00:07:23","C/Cigueña 5","145.10.11.15","Estanteria, le falta una pata");
$incidencias[]=array(5,"Si","Transporte","27-10-2020 00:07:23","C/Cigueña 5","145.10.18.15","Trailer volcado");
$incidencias[]=array(6,"No","Señales y Semafortos","27-10-2020 00:07:23","C/Cigueña 5","145.10.11.35","Semaforo roto");
$incidencias[]=array(7,"Si","Otros","27-10-2020 00:07:23","C/Cigueña 5","145.80.11.125","Coche en llamas");
$_SESSION['incidencias']=$incidencias;
var_dump($_SESSION['incidencias']);

include 'pie.php';

