<?php
session_start();

if (isset($_POST['submit'])){
    $username = "EDWICAVE";
    $password = "921015";
    if ( (isset($_POST['nombre'])) || (isset($_POST['password']) ) ) {
    	
           $nombre = $_POST['nombre'];
           $pass = $_POST['password'];

           if (($nombre == $username) && ($pass == $password)) {
           	//Crear nuestra sesión
           	$_SESSION['username'] = $nombre;
           	header("location: resgistrados.php");

           } else {

           	header("location: sesiones.php?res=incorrecto");

           }


    }else{

    	header("location: sesiones.php");

    }

   
}else{

	header("location: sesiones.php");
}


?>