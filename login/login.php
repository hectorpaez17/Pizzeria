<?php
require ('../db/conexion.php');
$user=$_POST['user'];
$pass=$_POST['pass'];
echo 'email:'.$user;
echo '<br>contraseña:'.$pass;
$error = '';
$sha1_pass = sha1($pass);
$sql = "SELECT * FROM usuario WHERE correo= '$user' AND contraseña = '$pass'";
		$result=$con->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
		    $row = $result->fetch_assoc();
			session_start();
			$_SESSION["logueado"] = TRUE;
			if($_SESSION["logueado"] == 1){
				$_SESSION["logueado"] = $row['nombre_usuario'];
			}
		    $_SESSION['id'] = $row['pk_usuario']."<br>";			
			$_SESSION['pribilegio'] = $row['fk_tipo_usuario']."<br>";
			$_SESSION['email'] = $row['correo']."<br>";
			$_SESSION['nombre'] = $row['nombre_usuario'];
			$type=$_SESSION['tipo'] = $row['fk_tipo_usuario'];
			if($type==1){
				header('Location: ./indexadmin.php');
			}
			if($type==2){
				header('Location: ./indexcliente.php');
			}
			} else {
            $error = "El nombre o contraseña son incorrectos";
            echo  $error;
		}
	
?>