<?

$eventos=[];
if ($resultados->num_rows > 0) {
  // output data of each row
  while($row = $resultados->fetch_assoc()) {
   // echo "<li>";
   // echo "<p>titulo: ".$row["titulo"]."</p>";
    //  echo "<p>titulo: ".$row["localidad"]."</p>";
    //  echo "<p>latitud: ".$row["lat"]."</p>";
    //  echo "<p>longitud: ".$row["lon"]."</p>";
    //  echo "<p>texto: ".$row["descripcion"]."</p>";
    //  echo "<p>inicio: ".$row["fechainicio"]."</p>";
    //  echo "<p>fin: ".$row["fechafin"]."</p>";
    //  echo "<p>fin: ".$row["link"]."</p>";
    //  echo "</li>";
    $eventos[]= $row;
  }
} else {
  echo "0 resultadoss";
}