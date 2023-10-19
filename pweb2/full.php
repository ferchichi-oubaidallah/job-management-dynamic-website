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
 echo 'Connexion réussie'; 
 }
 
 /*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/
 catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
 }
 try{



    if (isset($_POST['submit'])){      
      
      $listCompetences = "";
      $Competences = $_POST['competences'];
      if(!empty($Competences)) 
       {
      
       for($i=0; $i <count($Competences) ; $i++)
      $listCompetences .= ($Competences[$i] . ",");
       }
    
  
       session_start();
       $cinlog=$_SESSION['cincin'] ;
     
		

    $status=$_POST['marital-status'];$adress=$_POST['address'];$diplomas=$_POST['diplomas'];
    $uni=$_POST['university'];
   $picture='';
   //$skill=$_POST['skills']; 
  
  
   $stmt11 = $conn->prepare("SELECT id FROM university where university=:job_degree");
   $stmt11->bindParam(':job_degree',$uni );
   $stmt11->execute();
   $idd = $stmt11->fetchColumn();

  
   $experience=$_POST['experience'];
   $dob = date('Y-m-d', strtotime($_POST['dob']));
   //$sth appartient à la classe PDOStatement
   $sth = $conn->prepare("UPDATE cv SET  photo =:num,  datenaissance=:email  ,etatcivil=:cinN ,adresse=:sui ,universite=:b ,experience=:c WHERE cin=:oubaid ") ;
   
  
  
  
   //on remplace les valeurs dans notre requête SQL par nos marqueurs nommés
   $sth->execute(array(
  ':num' => $picture,':cinN' => $status,':sui' => $adress,'cinN'=> $status,
':c' => $experience,':b' => $idd,':email' => $dob,'oubaid'=> $cinlog,
  
  ));
  
  
  //competences
  $result='';
  $st= $conn->prepare("SELECT cin FROM cv where pseudo=:job_degree");
        $st->bindParam(':job_degree', $$cinlog);
        $st->execute();
        $cin  = $st->fetchColumn();
  
  
  $separator=',';
  $string = $_POST['competences'];
  $result = implode($separator, $string);
  
  
  
   $skills = explode(',',$result);
  foreach ($skills as $skill) {
  $skill = trim($skill);
  if (!empty($skill)) {
  
  $stmt11 = $conn->prepare("SELECT id FROM skills where skill=:job_degree");
  $stmt11->bindParam(':job_degree', $skill);
  $stmt11->execute();
  $iddd = $stmt11->fetchColumn();
  
  
  
  $stmtt = $conn->prepare("INSERT INTO comp_dem (cin	, code_comp	) VALUES (:offer_id, :skill_id)");
  $stmtt->bindParam(':offer_id', $cinlog);
  $stmtt->bindParam(':skill_id', $iddd);
  $stmtt->execute();}
   }
  
  //diplomes
  
  $result='';
  
  
  
  $separator=',';
  $string = $_POST['diplomas'];
  $result = implode($separator, $string);
  
  $skills = explode(',',$result);
  foreach ($skills as $skill) {
  $skill = trim($skill);
  if (!empty($skill)) {
  
  $stmta = $conn->prepare("SELECT id FROM diplome where diplome=:job_degree");
  $stmta->bindParam(':job_degree', $skill);
  $stmta->execute();
  $idddd = $stmta->fetchColumn();
  
  
  
  $stmtt = $conn->prepare("INSERT INTO diplome_dem (cin	, code_dip	) VALUES (:offer_id, :skill_id)");
  $stmtt->bindParam(':offer_id', $cinlog);
  $stmtt->bindParam(':skill_id', $idddd);
  $stmtt->execute();}
   }

   $imageData = file_get_contents($_FILES["abc"]["tmp_name"]);
   // Insert the image data into the database
   $stmt = $conn->prepare("INSERT INTO img (cin,dataa, name, size, typee, create_time) VALUES (? ,?, ?, ?, ?, NOW())");
   $stmt->bindParam(1, $cinlog);
   $stmt->bindParam(2, $imageData, PDO::PARAM_LOB);
   $stmt->bindParam(3, $_FILES["abc"]["name"]);
   $stmt->bindParam(4, $_FILES["abc"]["size"]);
   $stmt->bindParam(5, $_FILES["abc"]["type"]);
   $stmt->execute();
  
  
  
  
  
   header('location:indexx.php');
  
  
  
  
  
   echo "Entrée ajoutée dans la table";   } }
   catch(PDOException $e){
   echo "Erreur : " . $e->getMessage();
   }
  
  
  
  
  
  
  
  
  
  
  
 ?> 





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="full1.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
    <title></title>
</head>
<body>
  
    <form id="dem" method="post" action="" enctype="multipart/form-data">
        <h2>Personal Information</h2>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="prename">Prename:</label>
          <input type="text" id="prename" name="prename">
        </div>
        <div class="form-group">
          <label for="identity-picture">Identity Picture:</label>
          <input type="file" id="identity-picture" name="abc">
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob">
        </div>
        <div class="form-group">
          <label for="marital-status">Marital Status:</label>
          <select id="marital-status" name="marital-status">
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address">
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="diplomas">List of Diplomas:</label>
          <select id="diplomas" name="diplomas[]" multiple>
          <?php
$servname = "localhost"; $dbname = "ppweb"; $user = "root"; $pass = "";
try{

  

  $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  /*regrouper nos clients selon leur code Postal et 
  afficher le nombre de fois où un même code Postal a été trouvé */ 
  $sth = $dbco->prepare("
  SELECT diplome FROM diplome
  
  ");
  $sth->execute(); 
  /*Retourne un tableau associatif pour chaque entrée de notre table
  *avec le nom des colonnes sélectionnées en clefs*/
  $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
  // on affiche pour chaque codePostal le nombre des clients ayant ce code 
  $str = "";
 
  for($i=0;$i<count($resultat);$i++)
 $str = $str . "<option>"  . $resultat[$i]["diplome"] . "</option>" ;

  echo $str; 
 // on affiche le résultat sous forme d'array pour comprendre sa structure
  echo '<pre>';
  print_r($resultat);
  echo '</pre>';
}
 
/*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}



?>

          </select>
        </div>
        <div class="form-group">
          <label for="skills">List of Skills:</label>
          <select id="skills" name="competences[]" multiple>
         
            <?php
$servname = "localhost"; $dbname = "ppweb"; $user = "root"; $pass = "";
try{

  

  $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  /*regrouper nos clients selon leur code Postal et 
  afficher le nombre de fois où un même code Postal a été trouvé */ 
  $sth = $dbco->prepare("
  SELECT * FROM skills
  
  ");
  $sth->execute(); 
  /*Retourne un tableau associatif pour chaque entrée de notre table
  *avec le nom des colonnes sélectionnées en clefs*/
  $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
  // on affiche pour chaque codePostal le nombre des clients ayant ce code 
  $str = "";
 
  for($i=0;$i<count($resultat);$i++)
 $str = $str . "<option>"  . $resultat[$i]["skill"] . "</option>" ;

  echo $str; 
 // on affiche le résultat sous forme d'array pour comprendre sa structure
  echo '<pre>';
  print_r($resultat);
  echo '</pre>';
}
 
/*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}



?>

            
          </select>
        </div>
        <div class="form-group">
          <label for="university">University:</label>
          <select id="university" name="university">
          
          <?php
$servname = "localhost"; $dbname = "ppweb"; $user = "root"; $pass = "";
try{

  

  $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  /*regrouper nos clients selon leur code Postal et 
  afficher le nombre de fois où un même code Postal a été trouvé */ 
  $sth = $dbco->prepare("
  SELECT * FROM university
  
  ");
  $sth->execute(); 
  /*Retourne un tableau associatif pour chaque entrée de notre table
  *avec le nom des colonnes sélectionnées en clefs*/
  $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
  // on affiche pour chaque codePostal le nombre des clients ayant ce code 
  $str = "";
 
  for($i=0;$i<count($resultat);$i++)
 $str = $str . "<option>"  . $resultat[$i]["university"] . "</option>" ;

  echo $str; 
 // on affiche le résultat sous forme d'array pour comprendre sa structure
  echo '<pre>';
  print_r($resultat);
  echo '</pre>';
}
 
/*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}



?>
          </select>
        </div>
        <div class="form-group">
          <label for="experience">Number of Years of Experience:</label>
          <input type="number" id="experience" name="experience">
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
      <p id="erreur"></p>
      <script src="full.js"></script>

      <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
      
  <script>
    new MultiSelectTag('skills')  // id
</script>

</body>
</html>
