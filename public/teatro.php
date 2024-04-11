<?  require_once "_header.php" ;
$sql = "SELECT * FROM eventos WHERE (tipo = 'teatro')"?>
<?
$result = "";
$result = $conn->query($sql);

$eventos=[];


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "<li>";
    // echo "<p>titulo: ".$row["nombre"]."</p>";
    // echo "<p>latitud: ".$row["lat"]."</p>";
    // echo "<p>longitud: ".$row["lon"]."</p>";
    // echo "<p>texto: ".$row["parrafada"]."</p>";
    // echo "<p>imagen: ".$row["foto"]."</p>";
    // echo "<p>inicio: ".$row["fechainicio"]."</p>";
    // echo "<p>fin: ".$row["fechafin"]."</p>";
    // echo "</li>";

    $eventos[]= $row;
  }
} else {
  echo "0 resultados";
}?>
<?php
$busqueda = "";
if (isset($_POST['busqueda'])) {
  $busqueda = $_POST['busqueda'];

$sql = "SELECT * FROM eventos WHERE (tipo = 'teatro') AND (titulo LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' OR localidad LIKE '%$busqueda%')";
  
}
?>

<a href="index.php"><button class="inicio">Inicio</button></a>
  <form action="teatro.php" method="post">
    <input type="text" name="busqueda" placeholder="Introduce tu búsqueda" value="<?php echo $busqueda; ?>">
    <button type="submit">Buscar</button>
  </form>

  <?php

  
  if ($busqueda != "") {
    $resultado = $conn->query($sql);
    $eventos=[];
    if ($resultado->num_rows > 0) {
      // Mostrar resultados
      while($row = $resultado->fetch_assoc()) {
        echo "<p>titulo: ".$row["titulo"]."</p>";
        echo "<p>descripcion: ".$row["descripcion"]."</p>";
        echo "<p>localidad: ".$row["localidad"]."</p>";
        $eventos[]= $row;
      }
    } else {
      echo "No se encontraron resultados para tu búsqueda.";
    }
  }
  


require_once "apimap.php";
?>
 <? include "_footer.php"; ?>
