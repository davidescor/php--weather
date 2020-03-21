<?php
	if(isset($_POST["name"])){
		$name = $_POST["name"]; 
	}else{
		header('Location: index.php');
	}
?>