

<?php
$user=$_POST["user"];
$pw=$_POST["passwd"];

//echo "user: ".$user."---- pw:".md5($pw);
$pwm5=md5($pw);
//echo "md5".$pwm5;

//conexion
include_once "conexion.php";

$sql = "SELECT user,password,nombres,apellidos FROM usuario WHERE user='$user' and password='$pwm5'";

$result = $conn->query($sql);

//comprobacion de usuario y contraseña correctos
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $nombre= $row['nombres']." ".$row['apellidos'];
    header("Location: bienvenido.php?nombres=$nombre");
    echo "user: " . $row["user"]. "<br>";

  }
} else {


//retorno a login si usuario y contraseña incorrectos 
 // header('Location: login.html');
 echo '<script type="text/javascript">
 alert("Usuario o Contraseña incorrectos");
 window.location.href = "login.html";
 
</script>';

  echo "0 results";
}

mysqli_close($conn);
?>

