<?php  session_start();?>
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
 
 /*On capture les exceptions si une ex
 ception est lancée et on affiche les informations relatives à celle-ci*/
 catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
 }
 try{
    if (isset($_POST['submit'])){



    //  $listCompetences = "";
      //$Competences = $_POST['competences'];
      //if(!empty($Competences)) 
       //{
       //$N = count($Competences);
       //for($i=0; $i < $N; $i++)
      //$listCompetences .= ($Competences[$i] . ", ");
     //}
         // $pseudolog=$_SESSION['suiii'] ;
         $pseudolog=$_SESSION['pew'] ;




 $title=$_POST['title'];
 $des=$_POST['description'];
 $dip=$_POST['diploma'];
 //$skill=$_POST['skills']; 
 $experience=$_POST['experience'];$sal=$_POST['salary'];
 
 $stmt1 = $conn->prepare("SELECT id FROM diplome where diplome=:job_degree");
 $stmt1->bindParam(':job_degree', $dip);
 $stmt1->execute();
 $id = $stmt1->fetchColumn();


 $stmt = $conn->prepare("INSERT INTO offre (titre, descr, diplome, nb_exp, sal) VALUES (:job_title, :job_description, :diplomas, :job_experience, :job_salary)");
 $stmt->bindParam(':job_title', $title);
 $stmt->bindParam(':job_description', $des);
 $stmt->bindParam(':diplomas', $id);
 $stmt->bindParam(':job_experience', $experience);
 $stmt->bindParam(':job_salary', $sal);
 $stmt->execute();


 
 $result='';

 $offer_id = $conn->lastInsertId();

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
$idd = $stmt11->fetchColumn();



$stmtt = $conn->prepare("INSERT INTO comp_offre (code_offre_emp	, code_comp	) VALUES (:offer_id, :skill_id)");
$stmtt->bindParam(':offer_id', $offer_id);
$stmtt->bindParam(':skill_id', $idd);
$stmtt->execute();



}   }

$st= $conn->prepare("SELECT coderegistre FROM employeur where pseudo=:logiin");
$st->bindParam(':logiin',  $pseudolog);
$st->execute();
$code = $st->fetchColumn();
$stm = $conn->prepare("INSERT INTO employeur_offre (code_reg_comm	, code_offre_emp	) VALUES (:offer_id, :skill_id)");
$stm->bindParam(':offer_id', $code);
$stm->bindParam(':skill_id', $offer_id);
$stm->execute();} echo "Entrée ajoutée dans la table";}

 catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
 }
 ?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="offre.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
    <title></title>
</head>
<body>
    <form id="offre" method="post" action="">
        <h2>Personal Information</h2>
        <label for="title">Title of the Offer</label>
        <input type="text" name="title" required id="title">
      
        <label for="description">Description of the Offer:</label>
        <input type="text" name="description"  required name="descreption">
      
        <label for="diploma">Name of Diploma Requested:</label>
        <select name="diploma" required id="diplomas" >
        <?php
$servname = "localhost"; $dbname = "ppweb"; $user = "root"; $pass = "";
try{

  

  $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  /*regrouper nos clients selon leur code Postal et 
  afficher le nombre de fois où un même code Postal a été trouvé */ 
  $sth = $dbco->prepare("
  SELECT * FROM diplome
  
  ");
  $sth->execute(); 
  /*Retourne un tableau associatif pour chaque entrée de notre table
  *avec le nom des colonnes sélectionnées en clefs*/
  $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
  // on affiche pour chaque codePostal le nombre des clients ayant ce code 
  $str = "";
 
  for($i=0;$i<count($resultat);$i++)
 $str = $str . "<option>" . $resultat[$i]["diplome"] . "</option>" ;

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

        <label for="skills">List of Skills Required:</label>
        <select name="competences[]" required id="skills" multiple>
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
      
        
      
        <label for="experience">Number of Years of Experience:</label>
        <input type="number" name="experience" required id="experience">
      
        <label for="salary">Proposed Salary:</label>
        <input type="number" name="salary" required  id="sal">
      
        <input type="submit" value="Submit" name="submit">
        <button class="wa"> <a href="emplo.php">go back </a></button>
      </form>
      <p id="erreur"></p>
      <script src="offre.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
      

  <script>
    new MultiSelectTag('skills')  // id
</script>
</body>
</html>
