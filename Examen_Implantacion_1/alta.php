<?php
session_start();
include 'head.php';
if(isset($_REQUEST['enviar']))
{
  $urgente=($_REQUEST['urgente']); 
  $tipo=($_REQUEST['tipo']);
  $lugar=($_REQUEST['lugar']);
  $descripcion=($_REQUEST['descripcion']);
  //insertar en el array
  $_SESSION['incidencias'][$incidencias]=array($urgente,$tipo,$lugar,$descripcion,$Num_incidencia);
  // $_SESSION['tipo'][$tipo]=array($Num_incidencia,$Urgencia,$Tipo,$FechaHora,$Lugar,$Ip,$Descripcion);
  echo '<pre>';
  var_dump($_SESSION['tipo']);
  echo '</pre>';

  $contador=0;
  if ($Num_incidencia=1){
        $contador++;
  }
}
                                             
 print' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="alta.php" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si											  </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
              <div align="left">
                    <select name="tipo">
                      <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                      
                    </select>
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        

        </div>        
';

 include 'pie.php';
											
                           