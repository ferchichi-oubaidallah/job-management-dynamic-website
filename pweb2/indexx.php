<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 
 //On essaie de se connecter
 try{
 // pour tester l'erreur on se connecte à une base inexistancte "achats"
 $conn = new PDO("mysql:host=$servername;dbname=ppweb", $username, $password);
 //On définit le mode d'erreur de PDO sur Exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo 'Connexion réussie'; 
 }
 
 /*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/
 catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
 }
 try{
    if (isset($_POST['pwp'])){
        $nbt1=$_POST['nbt1'];
        $pseudo=$_POST['pseudo1'];
        $password=$_POST['pass1'];
        $nom=$_POST['name1'];
        $prenom=$_POST['prename1'];
        $Email=$_POST['email1'];
        $cin=$_POST['cin1'];
        $stmt = $conn->prepare("INSERT INTO cv(nom,prenom,CIN,email,pseudo,mdp,num) VALUES (:nom,:prenom,:cin,:Email,:pseudo,:mdp,:num)");
        $params = array(":nom" => $nom, ":prenom" => $prenom , ":cin" => $cin ,":Email" => $Email ,":pseudo" => $pseudo, ":mdp" => $password,":num" => $nbt1);
        $stmt->execute($params);
        session_start();
		$_SESSION['cincin'] =  $cin;
		echo "Login successful!"; 
		header('location:full.php');
        echo "Data inserted successfully";
 echo "Entrée ajoutée dans la table";
 }
}
 catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
 }
 try{
    if (isset($_POST['awp'])){
 
        $pseudo = $_POST['pseudo1'];
        $password = $_POST['pass'];
        $nom = $_POST['namemanager'];
        $prenom = $_POST['prename'];
        $Email = $_POST['email'];
        $RC = $_POST['nbt'];
        $entreprise = $_POST['name'];
        $stmt = $conn->prepare("INSERT INTO employeur(entreprise,nom,prenom,coderegistre,email,pseudo,mdp) VALUES (:entreprise,:nom,:prenom,:RC,:Email,:pseudo,:mdp)");
        $params = array(":entreprise" => $entreprise, ":nom" => $nom, ":prenom" => $prenom, ":RC" => $RC, ":Email" => $Email, ":pseudo" => $pseudo, ":mdp" => $password);
        $stmt->execute($params);

      
 echo "Entrée ajoutée dans la table";
 }
}
 catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
 }
 
 try{
    if (isset($_POST['log'])){
        $nomlog=$_POST['pslogin'];
        $paslog=$_POST['passlog'];

        

        $stmt = $conn->prepare("SELECT pseudo,mdp FROM cv WHERE pseudo=:pseudo");
        $stmt->execute(array(':pseudo' => $nomlog));
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $stmt = $conn->prepare("SELECT pseudo,mdp FROM employeur WHERE pseudo=:pseudo");
        $stmt->execute(array(':pseudo' => $nomlog));
       $resultat2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (isset($resultat[0]) && $resultat[0]['pseudo'] == $nomlog && $resultat[0]['mdp'] == $paslog){


        session_start();
		$_SESSION['suii'] =  $nomlog;
		echo "Login successful!"; 
		header('location:demandeur.php');

        }
        else if(isset($resultat2[0]) && $resultat2[0]['pseudo'] == $nomlog && $resultat2[0]['mdp'] == $paslog){
            session_start();
            $_SESSION['suiii'] =  $nomlog;
            echo "Login successful!"; 
            header('location:emplo.php');
        }
        else {echo'<script>
            alert("pseudo or password dont match" );
             </script>';}
 
  
 }
}

 catch(PDOException $e){
 echo "Erreur de selct: " . $e->getMessage();
 }
 

 ?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style1.css">
</head> 
<body><div class="pew">
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
           <a href="indexx.php">Home</a>
           <a href="contact.php">Contact</a>
           <a href="#">About</a>
           <button class="btnlogin-popup"  >Login</button>
        </nav>
    </header>
    <div id="c2"></div>
       
        <div class="wrapper" id="pi">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
            <div class="form-box login" id="poo1">
                 <h2>Login</h2>
                 <form  method="post" action="">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="text" required name="pslogin">
                        <label>pseudo</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="passlog">
                        <label>Password</label>
                    </div>  
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>   
                    <button type="submit" class="btn" name="log">Login</button>   
                    <div class="login-register">
                        <p>Dont have an account?<a href="#" class="register-link">Register</a></p>
                    </div>           
                 </form>
            </div>
            <div class="form-box register" id="poo2">

                <h2 class="h22">registration</h2>
                <form action="#">
                   <div class="input-boxx">
                       <span class="icon"></span>
                       <input type="radio" value="demp"name="radioo"required>
                       <label>demandeur d emploi</label>
                   </div>
                   <div class="input-boxx">
                       <span class="icon"></ion-icon></span>
                       <input type="radio"value="emp" name="radioo" required>
                       <label>employeur</label>
                   </div>  
                  
                   <button type="submit" class="btn" onclick="choix('pi')">create account</button>   
                   <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Log in</a></p>
                </div>         
                </form>
            </div>
                    
        </div>
        <form id="ff1"  method="post" action="" ></form>
        <form id="ff2" method="post" action=""></form>
<p id="erreur"></p>
</div>
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
<!--try{
if (isset($_POST['sendff2'])){
 
    $pseudo=$_POST['pseudo1'];
    $pass=$_POST['pass1'];
    $nom=$_POST['name1'];
    $number=$_POST['nbt1'];
    $prenom=$_POST['prename1'];
    $Email=$_POST['email1'];
    $cin=$_POST['cin1'];
    $stmt = $conn->prepare("INSERT INTO demandeur(nom,prenom,numero,email,cin,pseudo,password) VALUES (:nom,:prenom,:number,:Email,:cin,:pseudo,:pass)");
    $params = array(":nom" => $nom, ":prenom" => $prenom ,":number" => $number , ":Email" => $Email ,":cin" => $cin ,":pseudo" => $pseudo, ":pass" => $pass);
    $stmt->execute($params);

     echo "Data inserted successfully";


}} catch(PDOException $e) {
    echo "email ou pseudo existant:" . $e->getMessage();

}
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
 $str = "";
 $str = $str . "<table class='tabu' border=1>";
 $str = $str . "<caption> Liste des Clients </caption>";
 for($i=0;$i<count($resultat);$i++)
 $str = $str . "<tr> <td>" . $resultat[$i]["psuedo"] . "</td> <td>" . $resultat[$i]["password"] . 
 "</td> </tr>" ;
 $str = $str . "</table>";
 echo $str;
 echo "select work";
-->