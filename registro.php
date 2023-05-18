<?php
if($_POST){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
}

$servername="localhost";
$username="root";
$password="";
$dbname="cursosql";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql= "INSERT INTO usuario (NOMBRE,APELLIDO,EMAIL) VALUES ('$nombre','$apellido','$email')";
if($conn->query($sql)===TRUE){
   echo "<h1>Usuario creado correctamente</h1>";
   echo "<p>Bienvenido/a: $nombre $apellido</p>";
   echo "<br>";

}else{
    echo "Error: ". $sql."<br>".$conn->error;
}

$conn->close();

?>