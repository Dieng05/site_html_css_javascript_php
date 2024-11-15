<?php 

function ouvrirBD(){
	
	try {
	$servername = "mysql:host=localhost;dbname=ecom";
	$user = "root"; 
	$pass = " ";
	$con = new PDO("mysql:host=localhost;dbname=ecom","root","");
	}
	catch(PDOException $e) {
		print("connexion impossible a al BD");
	}
	return $con;          
}
function FermerBD($con){
	if(mysqli_close($con)==false){
		print("fermuture impossible de la BD");
		exit;
	}
}
?>