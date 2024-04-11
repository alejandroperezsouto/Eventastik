<?php require_once '_header.php'; ?>

<?php

$sql = "SELECT DISTINCT titulo, localidad, lat, lon, descripcion, fechainicio, fechafin, link FROM eventos;";
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
}

//echo '<pre><code>';
//print_r($eventos);
//echo '</code></pre>';


$conn->close();
?>
  <a href="index.php"><button class="inicio">Inicio</button></a>
<?php require_once 'apimap.php'; ?>
