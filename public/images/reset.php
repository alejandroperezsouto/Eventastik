<?php
$titulo='Reset';
include '_header.php';?>
<p>Este apartado reiniciará la base de datos, borrando el contenido actual y creandolo de nuevo en base a los parámetros iniciales que se llevaron a cabo durante la instalación.</p>
<p>Si no estás seguro de este paso no pulses el siguiente botón:</p>


<?php

if(isset($_POST['reset'])){

// Borrar Tabla
$sql = "DROP TABLE IF EXISTS eventos;";
consulta($sql, 0);
debug('Tabla Borrada Correctamente');
debug($sql, 'sql');

// Crear Tabla
$sql = "CREATE TABLE restaurantes (
      id	int(11) Incremento automático	
titulo	varchar(255)	
localidad	varchar(255)	
lat	varchar(255)	
lon	varchar(255)	
descripcion	varchar(255)	
fechainicio	date	
fechafin	date	
link	varchar(255))
    );
";
consulta($sql, 0);
debug('Tabla Restaurnates creada correctamente',);
debug($sql, 'sql');







}

else{
    ?>


<form method="post" action="">
    <input type="hidden" name="reset">
    <input type="submit" value="Resetear">
</form>

<?php 
} //fin else
?>