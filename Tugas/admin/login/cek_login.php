<?php 
session_start();

if(empty($_SESSION["session_nama"])){
	header("Location: ../index.php");
}
?>
