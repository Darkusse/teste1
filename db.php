<?php
$txt = $_POST['txt'];

	
	
$connect = mysqli_connect("127.0.0.1", "root", "", "dbd"); 
 
/* Vérification de la connexion */ 
if (!$connect) { 
   echo "Échec de la connexion : ".mysqli_connect_error(); 
   exit(); 
} 



$requete = "INSERT INTO formule (txt) VALUES('$txt')" ;
$resultat = mysqli_query($connect,$requete); 
$identifiant = mysqli_insert_id($connect); 
/* Fermeture de la connexion */ 
mysqli_close($connect); 
 
if ($resultat) { 
   echo "<br />Ajout du Article réussi."; 
} 
else { 
   echo "<br />Le article n'a pas pu être ajouté."; 
} 


?>