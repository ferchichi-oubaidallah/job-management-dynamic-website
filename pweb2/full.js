
let formulaire = document.getElementById('dem');
formulaire.addEventListener('submit',function(e){
    let name=document.getElementById("name");
    
    let mail = document.getElementById("email");
    let prename=document.getElementById("prename");
    let phone = document.getElementById("phone");
    let age = document.getElementById("experience");
   


    let regExNom=/^[a-zA-Z\s]+$/;
    let regExEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
    let myError=document.getElementById('erreur');
    myError.style.color='red';
    
 
if (name.value.trim()=='')
{	
myError.innerHTML='Le champ name   est requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(name.value)==false){

myError.innerHTML="Le champ nom doit être composé de lettres ou d'espaces";
e.preventDefault();
}



if (prename.value.trim()=='')
{	
myError.innerHTML='Le champ last name name requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(mlast.value)==false){

myError.innerHTML="Le champ lastname doit être composé de lettres ou d'espaces";
e.preventDefault();
}




//controle de l'email
if (mail.value.trim()=='')
{	
myError.innerHTML='Le champ Email est requis';
e.preventDefault();
}
else 
  if(regExEmail.test(mail.value)==false){
myError.innerHTML="L'adresse email n'est pas valide";
e.preventDefault();
  }


  if (phone.value.length==0)
  {	
  myError.innerHTML='Le champ phone number est requis';
  myError.style.color='red';
  e.preventDefault();
  }
  else if(phone.value.length!=8){
  
  myError.innerHTML="Le champ phone number doit être composé de 8 chiffres";
  e.preventDefault();
  }

  let select = document.getElementById('diplomas');
    listeComp = "";
    for (let i=0; i<select.length; i++) {
        if (select[i].selected) {
            listeComp += select[i].value + '  ';		
        }
    }

  if (listeComp.trim()=='')
    {	
		myError.innerHTML='Veuillez saisir au moins une compétence';
		e.preventDefault();
    }

    let select2 = document.getElementById('skills');
    listeComp = "";
    for (let i=0; i<select2.length; i++) {
        if (select2[i].selected) {
            listeComp += select2[i].value + '  ';		
        }
    }

  if (listeComp.trim()=='')
    {	
		myError.innerHTML='you must choose at least one skill';
		e.preventDefault();
    }

    if (age.value.trim()=='')
    {	
		myError.innerHTML='experience is  required';
		e.preventDefault();
    }
    else
	    if(Number(age.value)>40   || Number(age.value) < 2 ){
			myError.innerHTML="must be between 2 and 40";
			e.preventDefault();
	    }
});



