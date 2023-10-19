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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
    <link rel="stylesheet" href="demandeur.css">

   
</head> 
<body>
    <div class="container">
        <div class="red1">
            <div class="card1">
                <div class="profile">
                <?php
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
                $cin22= $conn->prepare("SELECT cin FROM cv where pseudo=:pse");
	$cin22->bindParam(':pse', $_SESSION['suii']);
	$cin22->execute();
	$cin = $cin22->fetchColumn();
                $stmt = $conn->prepare("SELECT dataa,typee FROM img WHERE cin=:img");
                $stmt->bindParam(':img', $cin);
                $stmt->execute();
                $resultimg = $stmt->fetch(PDO::FETCH_ASSOC);
                 $sttr='';
                 $sttr=$sttr. '<img src="data:' . $resultimg["typee"] . ';base64,' . base64_encode($resultimg["dataa"]) . '" alt="My Image" class="profile-img" >';
                 echo $sttr;
                ?>
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
}   $pseudolog=$_SESSION['suii'] ;
echo     $pseudolog;           
                    ?>  </h1>

                 </div>
                <hr color="red" size="5" width="100%">
                <div class="btnm">
                    <form method="post">
                    
                <button type="button" id="123"  onclick="showDiv()">list the job offers</button>
                <button type="button"  onclick="showform()" >Update my CV</button>
                <button  type="button" onclick="showsubmit()" >Job offers submitted</button>  </from>
                </div>
            </div>
        </div>
        <div class="red2">
            <div class="blue1">
                
                    <nav class="card2">
                        <ul>
                          <li><a href="indexx.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                          <li class="right"><a id="login-btn" href="#"><i class="fa-solid fa-comment"></i> Feedback</a></li>
                          <li class="right dropdown">
                            <a href="#"><i class="fa-solid fa-circle-exclamation"></i> Support</a>
                            <ul class="dropdown-menu">
                              
                              <li><a  href="#">Service 2</a></li>
                              <li><a  href="#">Report a problem</a></li>
                            </ul>
                          </li>
                          <li class="right"><a href="#">Home</a></li>
                        </ul>
                      </nav>
                      
            </div>
            <div class="blue2">
                <div class="card3">

                          <div id="rand">
                            
                  <table><tr><td><?php
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

$sth = $conn->prepare("SELECT * FROM offre ORDER BY  RAND() LIMIT " . 1);
 $sth->execute();

 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
 
 $str ='';

 $ind=0;

 $stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
$stmta->bindParam(':job_degree',$resultat[0]["diplome"]);
$stmta->execute();
$idddd = $stmta->fetchColumn();


$stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat[0]["code_offre"]);
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


	$s = $conn->prepare("SELECT entreprise FROM employeur where coderegistre=(select coderegistre from employeur_offre where code_offre_emp=:job_degree)");
	$s->bindParam(':job_degree',$resultat[$ind]["code_offre"]);
	$s->execute();
	$id1 = $stmta->fetchColumn();







	$str = $str . "<form  method='post' action=''><div class='jobcard' onmouseover='showbtn()'>  <div class='job1'><h4>" . $id1 . "</h4><h3> Titre :". $resultat[$ind]["titre"]."</h3><p>Description :".$resultat[$ind]["descr"]."</p></div>
 
	<div class='job1'><h4>Skills :" . $laststr. "</h4><h3>Diplome :". $idddd."</h3><h3>Anne d'experience :". $resultat[$ind]["nb_exp"]."</h3></div>
	
	<div class='job1'><p>Posted ".$resultat[$ind]["dins"]." days ago</p>
	</div>	</form>";



  echo $str;



?></td>
<td><?php
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

$sth = $conn->prepare("SELECT * FROM offre ORDER BY  RAND() LIMIT " . 1);
 $sth->execute();

 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
 
 $str ='';

 $ind=0;

 $stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
$stmta->bindParam(':job_degree',$resultat[0]["diplome"]);
$stmta->execute();
$idddd = $stmta->fetchColumn();


$stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat[0]["code_offre"]);
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


	$s = $conn->prepare("SELECT entreprise FROM employeur where coderegistre=(select coderegistre from employeur_offre where code_offre_emp=:job_degree)");
	$s->bindParam(':job_degree',$resultat[$ind]["code_offre"]);
	$s->execute();
	$id1 = $stmta->fetchColumn();







	$str = $str . "<form  method='post' action=''><div class='jobcard' >  <div class='job1'><h4>" . $id1 . "</h4><h3> Titre :". $resultat[$ind]["titre"]."</h3><p>Description :".$resultat[$ind]["descr"]."</p></div>
 
	<div class='job1'><h4>Skills :" . $laststr. "</h4><h3>Diplome :". $idddd."</h3><h3>Anne d'experience :". $resultat[$ind]["nb_exp"]."</h3></div>
	
	<div class='job1'><p>Posted ".$resultat[$ind]["dins"]." days ago</p>
	</div>	</form>";

  echo $str;





?></td></tr>
<tr><td><?php
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

$sth = $conn->prepare("SELECT * FROM offre ORDER BY  RAND() LIMIT " . 1);
 $sth->execute();

 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
 
 $str ='';

 $ind=0;

 $stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
$stmta->bindParam(':job_degree',$resultat[0]["diplome"]);
$stmta->execute();
$idddd = $stmta->fetchColumn();


$stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat[0]["code_offre"]);
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


	$s = $conn->prepare("SELECT entreprise FROM employeur where coderegistre=(select coderegistre from employeur_offre where code_offre_emp=:job_degree)");
	$s->bindParam(':job_degree',$resultat[$ind]["code_offre"]);
	$s->execute();
	$id1 = $stmta->fetchColumn();







	$str = $str . "<form  method='post' action=''><div class='jobcard'>  <div class='job1'><h4>" . $id1 . "</h4><h3> Titre :". $resultat[$ind]["titre"]."</h3><p>Description :".$resultat[$ind]["descr"]."</p></div>
 
	<div class='job1'><h4>Skills :" . $laststr. "</h4><h3>Diplome :". $idddd."</h3><h3>Anne d'experience :". $resultat[$ind]["nb_exp"]."</h3></div>
	
	<div class='job1'><p>Posted ".$resultat[$ind]["dins"]." days ago</p>
	</div>	</form>";


  echo $str;




?></td>
<td><?php
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

$sth = $conn->prepare("SELECT * FROM offre ORDER BY  RAND() LIMIT " . 1);
 $sth->execute();

 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
 
 $str ='';

 $ind=0;

 $stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
$stmta->bindParam(':job_degree',$resultat[0]["diplome"]);
$stmta->execute();
$idddd = $stmta->fetchColumn();


$stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat[0]["code_offre"]);
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


	$s = $conn->prepare("SELECT entreprise FROM employeur where coderegistre=(select coderegistre from employeur_offre where code_offre_emp=:job_degree)");
	$s->bindParam(':job_degree',$resultat[$ind]["code_offre"]);
	$s->execute();
	$id1 = $stmta->fetchColumn();







	$str = $str . "<form  method='post' action=''><div class='jobcard'>  <div class='job1'><h4>" . $id1 . "</h4><h3> Titre :". $resultat[$ind]["titre"]."</h3><p>Description :".$resultat[$ind]["descr"]."</p></div>
 
	<div class='job1'><h4>Skills :" . $laststr. "</h4><h3>Diplome :". $idddd."</h3><h3>Anne d'experience :". $resultat[$ind]["nb_exp"]."</h3></div>
	
	<div class='job1'><p>Posted ".$resultat[$ind]["dins"]." days ago</p>
	</div>	</form>";


  echo $str;






?></td></tr>
<tr><td><?php
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

$sth = $conn->prepare("SELECT * FROM offre ORDER BY  RAND() LIMIT " . 1);
 $sth->execute();

 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
 
 $str ='';

 $ind=0;

 $stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
$stmta->bindParam(':job_degree',$resultat[0]["diplome"]);
$stmta->execute();
$idddd = $stmta->fetchColumn();


$stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat[0]["code_offre"]);
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


	$s = $conn->prepare("SELECT entreprise FROM employeur where coderegistre=(select coderegistre from employeur_offre where code_offre_emp=:job_degree)");
	$s->bindParam(':job_degree',$resultat[$ind]["code_offre"]);
	$s->execute();
	$id1 = $stmta->fetchColumn();







	$str = $str . "<form  method='post' action=''><div class='jobcard'>  <div class='job1'><h4>" . $id1 . "</h4><h3> Titre :". $resultat[$ind]["titre"]."</h3><p>Description :".$resultat[$ind]["descr"]."</p></div>
 
	<div class='job1'><h4>Skills :" . $laststr. "</h4><h3>Diplome :". $idddd."</h3><h3>Anne d'experience :". $resultat[$ind]["nb_exp"]."</h3></div>
	
	<div class='job1'><p>Posted ".$resultat[$ind]["dins"]." days ago</p>
	</div>	</form>";



  echo $str;






?></td>
<td><?php
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

$sth = $conn->prepare("SELECT * FROM offre ORDER BY  RAND() LIMIT " . 1);
 $sth->execute();

 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
 
 $str ='';

 $ind=0;

 $stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
$stmta->bindParam(':job_degree',$resultat[0]["diplome"]);
$stmta->execute();
$idddd = $stmta->fetchColumn();


$stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat[0]["code_offre"]);
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


	$s = $conn->prepare("SELECT entreprise FROM employeur where coderegistre=(select coderegistre from employeur_offre where code_offre_emp=:job_degree)");
	$s->bindParam(':job_degree',$resultat[$ind]["code_offre"]);
	$s->execute();
	$id1 = $stmta->fetchColumn();







	$str = $str . "<form  method='post' action=''><div class='jobcard'>  <div class='job1'><h4>" . $id1 . "</h4><h3> Titre :". $resultat[$ind]["titre"]."</h3><p>Description :".$resultat[$ind]["descr"]."</p></div>
 
	<div class='job1'><h4>Skills :" . $laststr. "</h4><h3>Diplome :". $idddd."</h3><h3>Anne d'experience :". $resultat[$ind]["nb_exp"]."</h3></div>
	
	<div class='job1'><p>Posted in ".$resultat[$ind]["dins"]." </p>
	</div>	</form>";



  echo $str;






?></td></tr>
</table>
                          </div>
                 
                    <div id="mydiv">
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
try{
$sth = $conn->prepare("SELECT code_offre,titre, descr, diplome, nb_exp, sal ,dins FROM offre  " );
 $sth->execute();

 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
  
 $pseudolog=$_SESSION['suii'] ;


 $stmcin = $conn->prepare("SELECT cin FROM cv where pseudo=:job_degree");
 $stmcin->bindParam(':job_degree',$pseudolog);
 $stmcin->execute();
 $cin = $stmcin->fetchColumn();
$score=0;
$tabscore=array();
$dip_dem = "";
 $stmdip = $conn->prepare("SELECT diplome FROM diplome WHERE id = (SELECT code_dip	 FROM diplome_dem WHERE cin=:offer_id)");
 $stmdip->bindParam(':offer_id', $cin);
 $stmdip->execute();
 $resultatdip = $stmdip->fetchAll(PDO::FETCH_ASSOC);
 if (!empty($resultatdip)) {
	$resultat1_str = json_encode($resultatdip);
	$skillsArr = json_decode($resultat1_str, true);
	
  
	foreach ($skillsArr as $skillObj) {
	  $dip_dem .= $skillObj['diplome'];
	}
	
	// do something with $laststr
  }
  $comp_dem = "";
  $stmcomp = $conn->prepare("SELECT skill FROM skills WHERE id in (SELECT code_comp	 FROM comp_dem WHERE cin=:offer_id)");
  $stmcomp->bindParam(':offer_id', $cin );
  $stmcomp->execute();
  $resultatcomp = $stmcomp->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($resultatcomp)) {
   $resultat2_str = json_encode($resultatcomp);
   $skillsArr = json_decode($resultat2_str, true);
   
   
   foreach ($skillsArr as $skillObj) {
     $comp_dem .=$skillObj['skill'];
   }
   
   }
   $str = "";
 for($i=0;$i<count($resultat);$i++){ 
	
  $comp_offre="";
	$stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
    $stmta->bindParam(':job_degree',$resultat[$i]["diplome"]);
    $stmta->execute();
    $dip_offre = $stmta->fetchColumn();
 


    $stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
    $stmtt->bindParam(':offer_id', $resultat[$i]["code_offre"]);
    $stmtt->execute();
    $resultat1 = $stmtt->fetchAll(PDO::FETCH_ASSOC);
	if (!empty($resultat1)) {
		$resultat1_str = json_encode($resultat1);
		$skillsArr = json_decode($resultat1_str, true);
		
	  
		foreach ($skillsArr as $skillObj) {
		  $comp_offre .= "," . $skillObj['skill'];
		}
		
	  }
	  $array1 = explode(",",$comp_offre);
	  for($j=1;$j<count($array1);$j++){
	if (strpos($comp_dem,$array1[$j]) !== false) {
	$score=$score+5;
  } else {}
	}
	$sal=$resultat[$i]["sal"]/100;
	$score=$score+$sal;


	if (strpos($dip_dem,$dip_offre) !== false) 
	{}
	 else{
		
		$score=$score*0;

	}
	
	$tabscore[$i]=$score;

}

  //print_r($tabscore);

 $max=0;
$str = "";
$ind=0;
 for($i=0;$i<count($resultat);$i++){  

	for($j=0;$j<count($tabscore);$j++){ 
		if($tabscore[$j]>$max){
	    $max=$tabscore[$j];$ind=$j;}
	
	
	}
$stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
$stmta->bindParam(':job_degree',$resultat[$ind]["diplome"]);
$stmta->execute();
$idddd = $stmta->fetchColumn();


$stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat[$ind]["code_offre"]);
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
$s = $conn->prepare("SELECT entreprise FROM employeur where coderegistre=(select code_reg_comm from employeur_offre where code_offre_emp=:job_degree)");
$s->bindParam(':job_degree',$resultat[$ind]["code_offre"]);
$s->execute();
$id1 = $s->fetchColumn();




if($tabscore[$ind]!=0){
	$str = $str . "<form  method='post' action=''><div class='jobcard'>  <div class='job1'><h4>entreprise   :   ". $id1.  "</h4><h3> Titre :". $resultat[$ind]["titre"]."</h3><p>Description :".$resultat[$ind]["descr"]."</p></div>
 <div class='job1'><h4>Skills :" . $laststr. "</h4><h3>Diplome :". $idddd."</h3><h3>Anne d'experience :". $resultat[$ind]["nb_exp"]."</h3></div>
		<div class='job1'><p>Posted in : ".$resultat[$ind]["dins"]."</p></div><button type='submit' name='apply'class='abutton'  value=". $resultat[$ind] ["code_offre"] . ">Apply</button>
	</div>	</form>";
    }

 $tabscore[$ind]=-1;
 $ind=0;
 $max=-1;
}
 echo $str;
 if (isset($_POST['apply'])){  // enregistrer chaque offre pour un demandeur d emploi
  $var= $_POST['apply'];
  $stmdip = $conn->prepare("SELECT cin,codeoffre FROM applyy WHERE cin=:cin and codeoffre=:code_offre;");
  $stmdip->bindParam(':code_offre',$var);
  $stmdip->bindParam(':cin',$cin);
  $stmdip->execute();
  $resultatdip = $stmdip->fetchAll(PDO::FETCH_ASSOC); 
  if ($stmdip->rowCount() > 0) 
  {echo "already apply " ;} else {
  $stmt = $conn->prepare("INSERT INTO applyy(cin,codeoffre) VALUES (:aaa,:code_offre)");
  $stmt->bindParam(':code_offre',$var);
  $stmt->bindParam(':aaa',$cin);
  $stmt->execute(); }}}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
// here begind the new div 

?>
                    </div>
                            
   
                    <div id="myform">
<div>

 <?php 
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
 try{
	
	
	$cin22= $conn->prepare("SELECT cin FROM cv where pseudo=:pse");
	$cin22->bindParam(':pse', $_SESSION['suii']);
	$cin22->execute();
	$cin = $cin22->fetchColumn();
  $dip_dem='';
	$stmdip = $conn->prepare("SELECT diplome FROM diplome WHERE id IN (SELECT code_dip	 FROM diplome_dem WHERE cin=:cin)");
	$stmdip->bindParam(':cin',$cin );
	$stmdip->execute();
	$resultatdip = $stmdip->fetchAll(PDO::FETCH_ASSOC);
	if (!empty($resultatdip)) {
	   $resultat1_str = json_encode($resultatdip);
	   $skillsArr = json_decode($resultat1_str, true);
	   foreach ($skillsArr as $skillObj) {
		 $dip_dem .= $skillObj['diplome']."</br>";
	   }
	 
	 }

	 $comp_dem = "";
	 $stmcomp = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp	 FROM comp_dem WHERE cin=:cmp)");
	 $stmcomp->bindParam(':cmp',$cin  );
	 $stmcomp->execute();
	 $resultatcomp = $stmcomp->fetchAll(PDO::FETCH_ASSOC);
	 if (!empty($resultatcomp)) {
		$resultat2_str = json_encode($resultatcomp);
		$skillsArr = json_decode($resultat2_str, true);
		
	  
		foreach ($skillsArr as $skillObj) {
		  $comp_dem .=$skillObj['skill']."</br>";
		}
		
	  }
    $sth = $conn->prepare("SELECT nom, prenom, photo, datenaissance, etatcivil, adresse, num, email, universite, experience FROM cv where cin=:hhh ;");
    $sth->bindParam(':hhh', $cin );
    $sth->execute();
    $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
    $str = '';
   $i=0; $dip='';
   $st= $conn->prepare("SELECT university FROM university where id=:dip");
	 $st->bindParam(':dip',$resultat[$i]["universite"] );
	 $st->execute();
	 $dip  .= $st->fetchColumn();
	$stmt = $conn->prepare("SELECT dataa,typee FROM img WHERE cin=:img");
	$stmt->bindParam(':img', $cin);
	$stmt->execute();
	$resultimg = $stmt->fetch(PDO::FETCH_ASSOC);

	$str = $str . ' <div id="maincv" ><div class="left">
 <br>

 <div class="box-1">
	 <div class="heading">

		 <p>CONTACT :</p>
	 </div>
	 <p class="p1"> numero de telephone : <i class="material-icons icons1">call</i>' . $resultat[$i]["num"] . '</p>
	 <p class="p1"> adress email :<i class="material-icons icons1">email</i>' . $resultat[$i]["email"] . '</p>
	 <p class="p1"> adresse :<i class="material-icons icons1"></i>adresse ' . $resultat[$i]["adresse"] . '</p>
 </div>
 <div class="box-1">
	 <div class="heading">
		 <p>diplomes :</p>
	 </div>
	 <p class="p1">' .  $dip_dem . '
		 <div class="skill-container">
			 <div class="skill html"></div>
		 </div>
	 </p>
 </div>
 <br>
 <div class="box-1">
	 <div class="heading">
		 <p>COMPETENCES :</p>
	 </div>
	 <p class="p1">' . $comp_dem . '
		 <div class="skill-container">
			 <div class="skill web"></div>
		 </div>
	 </p>
 </div>
 <br>
</div>
<div class="right">
 
	 <p>nom et prenom : ' . $resultat[$i]["nom"] .' '. $resultat[$i]["prenom"] . '</p>
	 <p></p>
 
	 <p>Etat cicvil :' . $resultat[$i]["etatcivil"] . '</p>
	 <p class="p2"></p>
	 <p>EDUCATION :' . $dip . '<i class="material-icons icons3" >border_color</i></p>

	 <p class="p2"></p>
 
	 <p>WORK EXPERIENCE :' . $resultat[$i]["experience"] . ' YEARS</p>
	 
</div></div>';


echo $str;

                       
 }catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
  }




   
                          ?>       </div>

                    <form id="dem" method="post" action="" enctype="multipart/form-data">
        <h2>Update my CV</h2>
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
 $str = $str . "<option>" . $resultat[$i]["skill"] . "</option>" ;

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
}?>
          </select>
        </div>
        <div class="form-group">
          <label for="experience">Number of Years of Experiencee:</label>
          <input type="number" id="experience" name="experience">
        </div>
        <button type="submit" name="updatecv">update cv</button>
        <?php

      try{

if (isset($_POST['updatecv'])){ 
$pseudolog=$_SESSION['suii'] ;
$stmcin = $conn->prepare("SELECT cin FROM cv where pseudo=:job_degree");
$stmcin->bindParam(':job_degree',$pseudolog);
$stmcin->execute();
$cin = $stmcin->fetchColumn();
$st= $conn->prepare("SELECT universite FROM cv where pseudo=:job_degree");
$st->bindParam(':job_degree', $pseudolog);
$st->execute();
$univ  = $st->fetchColumn();


$stmt = $conn->prepare("DELETE  FROM img where  cin=:aaa ");
$stmt->bindParam(':aaa',$cin);
$stmt->execute();

$stmt = $conn->prepare("DELETE  FROM diplome_dem where  cin=:aaa ");
$stmt->bindParam(':aaa',$cin);
$stmt->execute();


$stmt = $conn->prepare("DELETE  FROM comp_dem where  cin=:aaa");
$stmt->bindParam(':aaa',$cin);
$stmt->execute();



$listCompetences = "";
      $Competences = $_POST['competences'];
      if(!empty($Competences)) 
       {
      
       for($i=0; $i <count($Competences) ; $i++)
      $listCompetences .= ($Competences[$i] . ",");
       }
       $status=$_POST['marital-status'];$adress=$_POST['address'];$diplomas=$_POST['diplomas'];
       $uni=$_POST['university'];   $experience=$_POST['experience'];
      $name=$_POST['name'];$prename=$_POST['prename'];$date=date('Y-m-d', strtotime($_POST['dob']));
       $stmt11 = $conn->prepare("SELECT id FROM university where university=:job_degree");
   $stmt11->bindParam(':job_degree',$uni );
   $stmt11->execute();
   $idd = $stmt11->fetchColumn();
   $sth = $conn->prepare("UPDATE cv SET nom=:nom,prenom=:prenom,   datenaissance=:email  ,etatcivil=:cinN ,adresse=:sui ,universite=:b ,experience=:c WHERE cin=:oubaid ") ;
   $sth->execute(array(
  ':cinN' => $status,':sui' => $adress,'cinN'=> $status,
':c' => $experience,':b' => $idd,':email' => $date,'oubaid'=> $cin,'nom'=> $name,'prenom'=> $prename,
   ));

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
  $stmtt->bindParam(':offer_id', $cin);
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
  
  
  
  $stmtt = $conn->prepare("INSERT INTO diplome_dem (cin,code_dip) VALUES (:offer_id, :skill_id)");
  $stmtt->bindParam(':offer_id', $cin);
  $stmtt->bindParam(':skill_id', $idddd);
  $stmtt->execute();}
   }
   $imageData = file_get_contents($_FILES["abc"]["tmp_name"]);
   // Insert the image data into the database
   $stmt = $conn->prepare("INSERT INTO img (cin,dataa, name, size, typee, create_time) VALUES (? ,?, ?, ?, ?, NOW())");
   $stmt->bindParam(1, $cin);
   $stmt->bindParam(2, $imageData, PDO::PARAM_LOB);
   $stmt->bindParam(3, $_FILES["abc"]["name"]);
   $stmt->bindParam(4, $_FILES["abc"]["size"]);
   $stmt->bindParam(5, $_FILES["abc"]["type"]);
   $stmt->execute();
  
  

}}catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
  }
  
?>
        <button type="submit" name="showcv">show cv</button>
        <p id="ppp">PPPP</p>
      </form>
      <p id="erreur"></p>
                    </div>
                    <div id="sub">
        <?php


//lister les offres d’emploi pour lesquelles il a postulé ainsi que la réponse de l’entreprise concernant cette candidature
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

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

try{

  $pseudolog=$_SESSION['suii'] ;


  $stmcin = $conn->prepare("SELECT cin FROM cv where pseudo=:job_degree");
  $stmcin->bindParam(':job_degree',$pseudolog);
  $stmcin->execute();
  $cin = $stmcin->fetchColumn();
 $stmdipp = $conn->prepare("SELECT codeoffre FROM applyy WHERE cin=:cin;");
$stmdipp->bindParam(':cin',$cin);
	$stmdipp->execute();
	$resultatdipp = $stmdipp->fetchAll(PDO::FETCH_ASSOC); 

  $strr="";
  if ($stmdipp->rowCount() > 0){
    for($i=0;$i<count($resultatdipp);$i++){ 

      $res10 = $conn->prepare("SELECT * FROM offre  WHERE  code_offre in (select codeoffre from applyy where cin=:codeoffre);");
      $res10 ->bindParam(':codeoffre',$cin);
      $res10 ->execute();
      $resultat10 = $res10 ->fetchAll(PDO::FETCH_ASSOC); 
      $stmta = $conn->prepare("SELECT diplome FROM diplome where id=:job_degree");
$stmta->bindParam(':job_degree',$resultat10[$i]["diplome"]);
$stmta->execute();
$idddd = $stmta->fetchColumn();
$stmtt = $conn->prepare("SELECT skill FROM skills WHERE id IN (SELECT code_comp FROM comp_offre WHERE code_offre_emp=:offer_id)");
$stmtt->bindParam(':offer_id', $resultat10[$i]["code_offre"]);
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
	$s = $conn->prepare("SELECT entreprise FROM employeur where coderegistre=(select code_reg_comm from employeur_offre where code_offre_emp=:job_degree)");
	$s->bindParam(':job_degree',$resultat10[$i]["code_offre"]);
	$s->execute();
	$id1 =$s->fetchColumn();

      $strr = $strr . "<form  method='post' action=''><div class='jobcard'>  <div class='job1'><h4>entrprise :" . $id1 . "</h4><h3> Titre :". $resultat10[$i]["titre"]."</h3><p>Description :".$resultat10[$i]["descr"]."</p></div>
 
	<div class='job1'><h4>Skills :" . $laststr. "</h4><h3>Diplome :". $idddd."</h3><h3>Anne d'experience :". $resultat10[$i]["nb_exp"]."</h3></div>
	
	<div class='job1'><p>Posted in :  ".$resultat10[$i]["dins"]."</p></div><button type='submit' name='apply'class='abutton'  value=". $resultat10[$i] ["code_offre"] . ">Apply</button>
	</div>	</form>";
  }
  echo $strr;
}
else{
echo "no offers submitted ";
}
}
  catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
  }

?>
    </div>
                </div>
                
            </div>
            
    </div>
    <div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>Username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember me">
            <label for="remember me">remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>

    </form>

</div>

    

<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

<script>
new MultiSelectTag('skills')  // id
</script>

    <script src="offfre.js"></script>

</body>
</html>


