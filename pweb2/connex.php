<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 
 //On essaie de se connecter
 try{
 // pour tester l'erreur on se connecte à une base inexistancte "achats"
 $conn = new PDO("mysql:host=$servername;dbname=ppweb", $username, $password);
 
 echo 'Connexion réussie';
 }
 
 /*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/
 catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
 } ?> 
