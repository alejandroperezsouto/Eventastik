<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>EveNTasTiK</title>
</head>
<body>
<h1>EveNtaSTiC</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "local";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<div class="botones">
<div class="fiesta">
<a href="fiesta.php">
<button>Fiesta</button></a><br/>
</div>

<div class="concierto"> 
    <a href="concierto.php"><button>Concierto</button></a><br/>
</div>

<div class="cine">
    <a href="cine.php"><button>Cine</button></a><br/>
</div>

<div class="teatro">
    <a href="teatro.php"><button>Teatro</button></a><br/>
</div>
</div>
<div class="todos">
    <a href="Todos.php"><button>Ver Todos</button></a><br/>

</div>



