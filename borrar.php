<?php
session_start();
include 'head.php';
if(isset($_REQUEST['borrar']))
{
  $tipo=($_REQUEST['incidencias']);
  //numero elementos array antes de borrar 
  $contador_antes=count($_SESSION['incidencias']);
  //borrar en el array
  unset($_SESSION['id'][$incidencias]);
  //numero elementos despues de borrar
  $contador_despues=count($_SESSION['incidencias']);
  if($contador_antes==$contador_despues)
  {
    echo '<script>alert("No se encuentra esa incidencia");</script>';
  }
  else
  {
    unset($_SESSION['incidencia'][$incidencias]);
    echo '<script>alert("La incidencia se a borrado con exito");</script>';
  }
  

  echo '<pre>';
  var_dump($_SESSION['incidencias']);
  echo '</pre>';
}












                                             
 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';