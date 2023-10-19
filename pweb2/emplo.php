<?php  session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<style >  /*@import url('https://https://fonts.google.com/specimen/Poppins')*/

*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family:  sans-serif ;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;  
    background:no-repeat;
    background: linear-gradient(to right, #4ca2cd, #67B26F);
}
.container{
    display: flex;
  flex-direction: column; 
  justify-content: space-around; 
  align-items: center;
  gap: 20px;
}
.container .red2{
    display: flex;
    flex-direction: row; 
    justify-content: space-around; 
    align-items: center;
    gap: 20px;  
}

.card1{
    width: 1160px;
    height: 90px;
    display: inline-block;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    
    margin: 10px 15px;
    background-color: #fff;
    background-position: center;
    background-size: cover;
}
.card2{

    
    width: 350px;
    height: 560px;
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    margin: 10px 15px;
    background-color: #fff;
    background-position: center;
    background-size: cover;
    gap: 30px;
}
.card3{
    width: 760px;
    height: 560px;
    display: flex;

    
    flex-direction:row;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    cursor: pointer;
    margin: 10px 15px;
    background-color: #fff;
    background-position: center;
    background-size: cover;
  overflow: auto;
}










nav {
    background-color: #fff;
    font-family: sans-serif;
    text-align: right;
    
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  nav li {
    display: inline-block;
    position: relative;
  }
  
  nav a {
    color: #2fb92d;
    display: block;
    line-height: 50px;
    padding: 0 15px;
    text-decoration: none;
  }
  
  nav ul ul {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #333;
    border-radius: 0 0 4px 4px;
  }
  
  nav ul li:hover > ul {
    display: inherit;
  }
  
  nav ul ul li {
    display: block;
    width: 200px;
  }
  
  nav ul ul a {
    line-height: 40px;
  }
  
  nav ul ul ul {
    left: 100%;
    top: 0;
    position: absolute;
  }
  
  nav ul li:first-child {
    float: left;
  }
  
  nav ul li:hover > a {
    background-color: hsl(0, 9%, 91%);
  }
  
  nav ul li:hover a:hover {
    background-color: hsl(0, 9%, 91%);
  }
  
  .dropdown-menu {
    display: none;
    position: absolute;
    background-color: hsl(0, 9%, 91%);
    border-radius: 0 0 4px 4px;
    top: 100%;
    right: 0;
  }
  
  .dropdown-menu li {
    display:block;
    width: 200px;
  }
  
  .dropdown-menu li a {
    color:#2fb92d;
    display: block;
    line-height: 40px;
    padding: 0 15px;
    text-decoration: none;
  }

  
  .dropdown-menu li a:hover {
    background-color: #959a30;
  }
  






  hr {
    border: 0;
    height: 2px;
    background-color: black;
    margin-top: 20px;
    margin-bottom: 20px;
  }
  .img66{
    margin-left: 65px;
border-radius: 50%;
max-width: 50%;
max-height: 50%;

  }
  .profile img {
    display: block; /* This is to ensure the image is centered within its container */
    margin: 0 auto; /* This centers the image horizontally */
    border-radius: 50%; /* This makes the image circular */
    width: 190px;
  }
  .profile {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  
  .username {
    font-size: 24px;
    margin-top: 16px;
  }
  .btnm{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 7px;
  }
  button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 260px;
    height: 60px;
    border-radius: 7px;
  }
  .jobcard{
    width: 300px;
    height: 370px;
    display: flex; 
    flex-direction:column;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    cursor: pointer;
    margin: 10px 15px;
    background-color: #f2e2c9;
    color: #543d1c;
    background-position: center;
    background-size: cover;
    overflow: hidden;
    border: 1px solid black;
    overflow-y: auto;
  }
  .jobcard button{
    margin-top: 50px;
  
  }
  .abutton{
  background-color: #4ca2cd;

}
#main{
    display: flex;
  }
  #accept{
    display: none;
  }
  .login-form-container{
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255,255,255,.9);
  position:fixed;
  top: 0; right:-105% ;
  z-index: 10000;
  height: 100%;
  width: 100%;
}

.login-form-container.active{
  right: 0;
}

.login-form-container form{
  background: #fff;
  border: var(--border);
  width: 37rem;
  height: 24rem;
  padding: 2rem;
  box-shadow: var(--box-shadow);
  border-radius: .5rem;
  margin: 2rem;
}

.login-form-container form p{
  font-size: 2.5rem;
  text-transform: uppercase;
  color: black;
  text-align: center;
}

.login-form-container form span{
  display: block;
  font-size: 1.5rem;
  padding-top: 1rem;
  color: grey;
}

.login-form-container form .box{
  width: 100%;
  margin: .7rem 0;
  font-size: 1.6rem;
  border: var(--border);
  border-radius: .5rem;
  padding: 1rem 1.2rem;
  color: var(--black);
  text-transform: none;
}

.login-form-container form .checkbox{
  display: flex;
  align-items: center;
  gap: .5rem  ;
  padding: 1rem 0;
}

.login-form-container form .checkbox label{
  font-size: 1.5rem;
  color: var(--light-color);
  cursor: pointer;
}

.login-form-container form .btn{
text-align: center;
  width:40%;
  margin: 1.5rem 0;
  margin-top: 1rem;
  display: inline-block;
  padding: .9rem 3rem;
  border-radius: .5rem;
  color: #fff;
  background: var(--green);
  font-size: 1.7rem;
  cursor: pointer;
  font-weight: 500;   
}
.login-form-container form .btn:hover{
  background: var(--dark-color);
}

.login-form-container form p{
  padding-top: .8rem;
  color: var(--light-color);
  font-size: 1.5rem;
}

.login-form-container form p a{
  color: var(--green);
  text-decoration: underline;
}

.login-form-container #close-login-btn{
  position: absolute;
  top: 1.5rem; right:2.5rem ;
  font-size: 3rem;
  color: var(--black);
  cursor: pointer;
}
   </style>
</head> 
<body>
    <div class="container">
        <div class="red1">
            <div class="card1">
                <nav>
            <ul>
                          <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                          <li class="right"><a id="login-btn" href="#"><i class="fa-solid fa-comment"></i> Feedback</a></li>
                          <li class="right dropdown">
                            <a href="offre.php"><i class="fa-solid fa-circle-plus"></i> Add offer</a>
                            
                          </li>
                          <li class="right"><a href="#"><i class="fa-solid fa-user"></i> Profile</a></li>
                        </ul>
                      </nav>
            </div>
        </div>
        <div class="red2">
            <div class="blue1">
                
                    <nav class="card2">

                    <div class="profile">
                        <br><br>
                    <h1 class="username"><?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; // add your database password here
$dbname = "ppweb";

// Create a PDO object
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}   $pseudolog=$_SESSION['suiii'] ;
   echo     $pseudolog;           
                    ?> </h1>
                      <br><br>
                 </div>
                <hr color="red" size="5" width="100%"><br><br>
                <div class="btnm">
                    
                    
                <button type="button" onclick="empo1()">relatable job applications</button>
                <button type="button" onclick="empo2()">Job offers submitted</button>
                </div>

                        
                      
            </div>
            <div class="blue2">
                <div class="card3">
                  <div id="main">
                <?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; // add your database password here
$dbname = "ppweb";

// Create a PDO object
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}  


$pseudo=$_SESSION['suiii'] ;
$stmcin = $conn->prepare("SELECT coderegistre FROM employeur where pseudo=:job_degree");
$stmcin->bindParam(':job_degree',$pseudo);
$stmcin->execute();
$codereg = $stmcin->fetchColumn();
$_SESSION['pew'] =  $pseudo;

$sth = $conn->prepare("SELECT  code_offre,titre, descr,diplome,nb_exp,sal,dins FROM offre where    code_offre in(select code_offre_emp from employeur_offre where  code_reg_comm=:cr)");

 $sth->bindParam(':cr',$codereg); $sth->execute();
 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
 $strr="" ;
 for($i=0;$i<count($resultat);$i++){
  $stm = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
  $stm->bindParam(':job_degree',$resultat[$i]["diplome"]);
  $stm->execute();
  $dip = $stm->fetchColumn();
  $stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat[$i]["code_offre"]);
$stmtt->execute();
$resultat1 = $stmtt->fetchAll(PDO::FETCH_ASSOC);
if (!empty($resultat1)) {
  $resultat1_str = json_encode($resultat1);
  $skillsArr = json_decode($resultat1_str, true);
  $laststr = "";
 foreach ($skillsArr as $skillObj) {
    $laststr .= "-" . $skillObj['skill'];
  }
}
$strr = $strr . "<form  method='post' action=''><div class='jobcard'><h4>code offre  est:" .$resultat[$i]["code_offre"] . "</h4><h3> Titre :".$resultat[$i]["titre"]."</h3><p>Description :".$resultat[$i]["descr"]."</p>
 
<h4>Skills :" . $laststr. "</h4><h3>Diplome :". $dip."</h3><h3>Anne d'experience :". $resultat[$i]["nb_exp"]."</h3>" . "</p><p>Posted ".$resultat[$i]["dins"]." days ago</p><p>codeoffre est :". $resultat[$i] ["code_offre"] . "</p><button type='submit' name='supproffre'class='abutton'  value=". $resultat[$i] ["code_offre"] . ">delete offer</button>


    ". " <div class='job1'> <button type='submit' name='candidats' class='abutton'  value=". $resultat[$i] ["code_offre"] . ">show candidate</button></div>"." </div> </form>";




 }
 echo $strr;
 if (isset($_POST['supproffre'])){ 
  $var= $_POST['supproffre'];
  $stmdip2 = $conn->prepare("delete from comp_offre where code_offre_emp=:codeoffre");
  $stmdip2->bindParam(':codeoffre',$var);
  $stmdip2->execute();
  $stmdip1 = $conn->prepare("delete from applyy where codeoffre=:codeoffre");
  $stmdip1->bindParam(':codeoffre',$var);
  $stmdip1->execute();
  $stmdip3 = $conn->prepare("delete from employeur_offre where code_offre_emp=:codeoffre");
  $stmdip3->bindParam(':codeoffre',$var);
  $stmdip3->execute();
  $stmdip = $conn->prepare("delete from offre where code_offre=:codeoffre");
  $stmdip->bindParam(':codeoffre',$var);
  $stmdip->execute();
 
  } ?></div>

 <div id="accept">
 <?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; // add your database password here
$dbname = "ppweb";

// Create a PDO object
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}  

$var="";
if (isset($_POST['candidats'])){ 
  $var= $_POST['candidats'];
  
  $score=0;
  $tabscore=array();
$sth = $conn->prepare("SELECT  * FROM offre where    code_offre=:var");
$sth->bindParam(':var',$var); $sth->execute();
$sth->execute();
$resultat22 = $sth->fetchAll(PDO::FETCH_ASSOC);
$stm = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
  $stm->bindParam(':job_degree',$resultat22[0]["diplome"]);
  $stm->execute();
  $dip2 = $stm->fetchColumn();
  $in='';
  $in = $in . "<form  method='post' action=''><div class='jobcard'>  <h4>code offre  est:" .$resultat22[0]["code_offre"] . "</h4><h3> Titre :".$resultat22[0]["titre"]."</h3><p>Description :".$resultat22[0]["descr"]."</p>
 
  <div class='job1'><h3>Diplome :". $dip2."</h3><h3>Anne d'experience :". $resultat22[0]["nb_exp"]."</h3></div>" . "</p><button type='submit' name='supproffre'class='abutton'  value=". $resultat22[0] ["code_offre"] . ">delete offer</button>
  
  <div class='job1'><p>Posted ".$resultat22[0]["dins"]." days ago</p></div><p>codeoffre est :". $resultat22[0] ["code_offre"] . "</p>
      ". " <div class='job1'> <button type='submit' name='candidatsss'class='abutton'  value=". $resultat22[0] ["code_offre"] . ">show candidate</button></div>"." </div> </form>";
    echo $in;
    
  
    $stmta = $conn->prepare("SELECT nb_exp FROM offre where code_offre=:job_degree");
    $stmta->bindParam(':job_degree',$resultat22[0]["code_offre"]);
    $stmta->execute();
    $exp_offre = $stmta->fetchColumn();
    $comp_offre = '';
    $stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
    $stmtt->bindParam(':offer_id', $resultat22[0]["code_offre"]);
    $stmtt->execute();
    $resultat1 = $stmtt->fetchAll(PDO::FETCH_ASSOC);
	if (!empty($resultat1)) {
		$resultat1_str = json_encode($resultat1);
		$skillsArr = json_decode($resultat1_str, true);
		
	  
		foreach ($skillsArr as $skillObj) {
		  $comp_offre .= "," . $skillObj['skill'];
		}
		
	  }
	  
    $sth55 = $conn->prepare("SELECT  * FROM cv where cin in ( select cin from applyy where codeoffre=:co ) ");
    $sth55->bindParam(':co',$var);
    $sth55->execute();
    $resultat55 = $sth55->fetchAll(PDO::FETCH_ASSOC);
    




 $str="" ;
 for($i=0;$i<count($resultat55);$i++){
  //diplome
  $dip_dem = "";
  $stmdip = $conn->prepare("SELECT diplome FROM diplome WHERE id IN (SELECT code_dip	 FROM diplome_dem WHERE cin=:offer_id)");
  $stmdip->bindParam(':offer_id', $resultat55[$i]['cin']);
  $stmdip->execute();
  $resultatdip = $stmdip->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($resultatdip)) {
     $resultat1_str = json_encode($resultatdip);
     $skillsArr = json_decode($resultat1_str, true);
     foreach ($skillsArr as $skillObj) {
       $dip_dem .= $skillObj['diplome'];}  }
      // competences
    $comp_dem = "";
    $stmcomp = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp	 FROM comp_dem WHERE cin=:offer_id)");
    $stmcomp->bindParam(':offer_id', $resultat55[$i]['cin'] );
    $stmcomp->execute();
    $resultatcomp = $stmcomp->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($resultatcomp)) {
       $resultat2_str = json_encode($resultatcomp);
       $skillsArr = json_decode($resultat2_str, true);
       foreach ($skillsArr as $skillObj) {
         $comp_dem .="," .$skillObj['skill'];
       }
     }
     $competences55 = explode(",",$comp_dem);
   //experience
     $stmexp = $conn->prepare("SELECT experience FROM cv where cin=:job_degree");
     $stmexp->bindParam(':job_degree',$resultat55[$i]['cin']);
     $stmexp->execute();
     $exp_dem = $stmexp->fetchColumn();
     for($j=1;$j<count($competences55);$j++){
      if (strpos($comp_offre,$competences55[$j]) !== false) {
      $score=$score+5;
  
      } 
    }
    if($exp_dem > $exp_offre){
  
  $diff=$exp_dem-$exp_offre;
         if($diff>0){
          for($k=0;$k<$diff;$k++)   {
          $score=$score+2;}
      }
    }
  
      if (strpos($dip_dem,$dip) !== false) 
    {}
     else{
      
      $score=$score*0;
    }
  $tabscore[$i]=$score;
  
   $score=0;
  }print_r($tabscore);
  $max=0;
$strcv = "";
$ind=0;
 for($i=0;$i<count($resultat55);$i++){  

	for($j=0;$j<count($tabscore);$j++){ 
		if($tabscore[$j]>$max){
	    $max=$tabscore[$j];$ind=$j;}
	
	
	}
  $dip_dem = "";
  $stmdip = $conn->prepare("SELECT diplome FROM diplome WHERE id IN (SELECT code_dip	 FROM diplome_dem WHERE cin=:offer_id)");
  $stmdip->bindParam(':offer_id', $resultat55[$ind]['cin']);
  $stmdip->execute();
  $resultatdip = $stmdip->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($resultatdip)) {
     $resultat1_str = json_encode($resultatdip);
     $skillsArr = json_decode($resultat1_str, true);
     
   
     foreach ($skillsArr as $skillObj) {
       $dip_dem .= '-'.$skillObj['diplome'];
     }
     
     // do something with $laststr
   }
  
 $comp_dem = "";
  $stmcomp = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp	 FROM comp_dem WHERE cin=:offer_id)");
  $stmcomp->bindParam(':offer_id', $resultat55[$ind]['cin'] );
  $stmcomp->execute();
  $resultatcomp = $stmcomp->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($resultatcomp)) {
     $resultat2_str = json_encode($resultatcomp);
     $skillsArr = json_decode($resultat2_str, true);
     
   
     foreach ($skillsArr as $skillObj) {
       $comp_dem .='-'.$skillObj['skill'];
     }
     
   }

   $st = $conn->prepare("SELECT time FROM applyy where cin=:job_degree and codeoffre=:aa" );
   $st->bindParam(':job_degree',$resultat55[$ind]["cin"]);
   $st->bindParam(':aa',$resultat22[0]["code_offre"]);
   $st->execute();
   $date = $st->fetchColumn();
   $stmt = $conn->prepare("SELECT dataa, typee FROM img WHERE cin=?");
   $stmt->bindParam(1, $resultat55[$ind] ["cin"]);
   $stmt->execute();
   $resultimg = $stmt->fetch(PDO::FETCH_ASSOC);

  

    $str=$str."<form  method='post'  enctype='multipart/form-data'><div class='jobcard'>  <div class='job1'>      <img src='data:" . $resultimg['typee'] . ";base64," . base64_encode($resultimg['dataa']) . "' alt='My Image' class='img66' >      <h4>NOM DE CANDIDAT  est:" .$resultat55[$ind]["nom"] . 
    "</h4><h3>prenom de candidat est :".$resultat55[$ind]["prenom"]."</h3><p>date naissance :".$resultat55[$ind]["datenaissance"]."</p></div>
 
    <div class='job1'> <input type='hidden' name='wasahbi' value='". $var."'>   <h4>Skills :" .$comp_dem.  "</h4><h3>Diplome :".  $dip_dem."</h3><h3>Anne d'experience :". $resultat55[$ind]["experience"]."</h3></div>". "<div class='job1'><p>email  ".$resultat55[$ind]["email"]."</p></div>"
    . "</p><button type='submit'   name='accepterrr'class='abutton'  value=". trim($resultat55[$ind] ["cin"]) .">accepter candidat</button>"."<button type='submit' name='refuserr'class='abutton'  value=". $resultat55[$ind] ["cin"] . ">refuser candidat</button>".
    "</p>
    </div>	</form>";
    
  $tabscore[$ind]=-1;
   $ind=0;
   $max=-1;
  
 
  } 


 echo $str;
}

if (isset($_POST['accepterrr'])){ 
  
  $var2=$_POST['accepterrr'];$vv = $_POST['wasahbi'];
  $stmtaa = $conn->prepare("UPDATE applyy SET  statu='Accepter' where codeoffre=:aa and cin=:cin");
  $stmtaa->bindParam(':cin',$var2);$stmtaa->bindParam(':aa',$vv);
  $stmtaa->execute();
}
if (isset($_POST['refuserr'])){
  $var2=$_POST['refuserr'];$vv = $_POST['wasahbi'];
  $stmtaa = $conn->prepare("UPDATE applyy SET  statu='refuser' where codeoffre=:aa and cin=:cin");
  $stmtaa->bindParam(':cin',$var2);$stmtaa->bindParam(':aa',$vv);
  $stmtaa->execute();
 }

?>

</div>




                </div>
            </div>
    </div>
    <div class="login-form-container">

<div id="close-login-btn" class="fas fa-times"></div>

<form action="">
    <p>We will be happy to listen to you</p>
    <span>Message</span>
    <textarea name="details" class="box" id="details"></textarea>
    <input type="submit" value="Send" class="btn">

</form>

</div>

<script>   function empo1() {
    document.getElementById("main").style.display = "flex";
    document.getElementById("accept").style.display = "none";
   }
   function empo2() {
    document.getElementById("main").style.display = "none";
    document.getElementById("accept").style.display = "flex";
   }
   
   let loginForm = document.querySelector('.login-form-container');
  
  document.querySelector('#login-btn').onclick = () =>{
      loginForm.classList.toggle('active')
  }
  
  document.querySelector('#close-login-btn').onclick = () =>{
      loginForm.classList.remove('active')
  }</script>

</body>
</html>

