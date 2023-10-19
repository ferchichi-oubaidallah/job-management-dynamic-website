let formulaire = document.getElementById('offre');
formulaire.addEventListener('submit',function(e){
    let name=document.getElementById("title");
    
    
    let phone = document.getElementById("sal");
    let age = document.getElementById("experience");
    


    let regExNom=/^[a-zA-Z\s]+$/;
    let regExEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
    let myError=document.getElementById('erreur');
    myError.style.color='red';
    
 
if (name.value.trim()=='')
{	
myError.innerHTML='Le champ titre de l offre   est requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(name.value)==false){

myError.innerHTML="Le champ titre de l offre doit être composé de lettres ou d'espaces";
e.preventDefault();S
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

        if (phone.value.trim()=='')
        {	
            myError.innerHTML='salary is  required';
            e.preventDefault();
        }
        else
            if(Number(phone.value)==0   ){
                myError.innerHTML="SALARY must be different from 0";
                e.preventDefault();
            }
    


});