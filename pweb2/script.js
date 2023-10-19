

const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnPopup = document.querySelector(".btnlogin-popup");
const iconClose = document.querySelector(".icon-close");

registerLink.addEventListener('click', ()=>{wrapper.classList.add('active');});
loginLink.addEventListener('click', ()=>{wrapper.classList.remove('active');});
btnPopup.addEventListener('click', ()=>{wrapper.classList.add('active-popup');});
iconClose.addEventListener('click', ()=>{wrapper.classList.remove('active-popup');});

function formde(r){
    let x=document.getElementById(r);
    x.remove();
    let p = document.getElementById("for");

    let ff2 =document.getElementById("ff2");
    let div1 =document.createElement("div");
   ff2.appendChild(div1);
    
    div1.setAttribute("class","dd");
   
    
     let titre=document.createElement("h1");
     titre.textContent=" demandeur  demploi";
     div1.appendChild(titre);
   
   
     const nameLabel = document.createElement('label');
     nameLabel.setAttribute('for', 'name');
     nameLabel.textContent = 'Name: ';
     
     // Create an input element for the name
     const nameInput = document.createElement('input');
     nameInput.setAttribute('type', 'text');
     nameInput.setAttribute('id', 'name');
     nameInput.setAttribute('name', 'name1');
     
     // Append the label and input elements to the form
     div1.appendChild(nameLabel);
     div1.appendChild(nameInput);
     
     const nameLabe11 = document.createElement('label');
     nameLabe11.setAttribute('for', 'prename');
     nameLabe11.textContent = 'last name: ';
     
     // Create an input element for the name
     const prenameInput = document.createElement('input');
     prenameInput.setAttribute('type', 'text');
     prenameInput.setAttribute('id', 'prename');
     prenameInput.setAttribute('name', 'prename1');
     
     // Append the label and input elements to the form
     div1.appendChild(nameLabe11);
     div1.appendChild(prenameInput);
     
     const number1 = document.createElement('label');
     number1.setAttribute('for', 'nbt');
     number1.textContent = 'NUMBER: ';
     
     // Create an input element for the name
     const nbt = document.createElement('input');
     nbt.setAttribute('type', 'number');
     nbt.setAttribute('id', 'nbt');
     nbt.setAttribute('name', 'nbt1');
     
     // Append the label and input elements to the form
     div1.appendChild( number1);
     div1.appendChild(nbt);



     // Create a label element for the email input
     const emailLabel = document.createElement('label');
     emailLabel.setAttribute('for', 'email');
     emailLabel.textContent = 'Email: ';
     
     // Create an input element for the email
     const emailInput = document.createElement('input');
     emailInput.setAttribute('type', 'email');
     emailInput.setAttribute('id', 'email');
     emailInput.setAttribute('name', 'email1');
     
     // Append the label and input elements to the form
     div1.appendChild(emailLabel);
     div1.appendChild(emailInput);
     
     // Create a label element for the message input
     const messageLabel = document.createElement('label');
     messageLabel.setAttribute('for', 'message');
     messageLabel.textContent = 'CIN: ';
     
     // Create a textarea element for the message
     const messageTextarea = document.createElement('input');
     messageTextarea.setAttribute('type', 'number');
     messageTextarea.setAttribute('id', 'message');
     messageTextarea.setAttribute('name', 'cin1');
     
     // Append the label and textarea elements to the form
     div1.appendChild(messageLabel);
     div1.appendChild(messageTextarea);

      const pseudo=document.createElement('label');
      pseudo.setAttribute('for','pseudo1');
      pseudo.textContent='pseudo';

      const pseudo1 = document.createElement('input');
      pseudo1.setAttribute('type', 'text');
      pseudo1.setAttribute('id', 'pseudo1');
      pseudo1.setAttribute('name', 'pseudo1');
 
     div1.appendChild(pseudo);
     div1.appendChild(pseudo1);


     const passw=document.createElement('label');
     passw.setAttribute('for','pass');
     passw.textContent='password';
     const pass = document.createElement('input');
     pass.setAttribute('type', 'password');
     pass.setAttribute('id', 'pass');
     pass.setAttribute('name', 'pass1');
     div1.appendChild(passw);
     div1.appendChild(pass);

    var submitButton = document.createElement('button');
   submitButton.setAttribute('type', 'submit');
   submitButton.setAttribute('value', 'pwp');
   submitButton.setAttribute('class', 'zon');
   submitButton.setAttribute('id', 'zon55');
   submitButton.setAttribute('name', 'pwp');
   //submitButton.setAttribute('onclick', 'CONTROLSAISIEEMPLOYEUR()');
   div1.appendChild(submitButton);


     let formString = ff2.outerHTML;
     p.insertAdjacentHTML('afterbegin',formString);
   // p.appendChild(form);
  
}

function forme(r){
  let x=document.getElementById(r);
  x.remove();
  let p = document.getElementById("for");

  let ff1 =document.getElementById("ff1");
  let div1 =document.createElement("div");
 ff1.appendChild(div1);
  
  div1.setAttribute("class","dd");
  
   let titre=document.createElement("h1");
   titre.textContent="employeur";
   div1.appendChild(titre);
 
 
   const nameLabel = document.createElement('label');
   nameLabel.setAttribute('for', 'name');
   nameLabel.textContent = 'Name of company: ';
   
   // Create an input element for the name
   const nameInput = document.createElement('input');
   nameInput.setAttribute('type', 'text');
   nameInput.setAttribute('id', 'name');
   nameInput.setAttribute('name', 'name');
   
   // Append the label and input elements to the form
   div1.appendChild(nameLabel);
   div1.appendChild(nameInput);
   

   const nameLabel1 = document.createElement('label');
   nameLabel1.setAttribute('for', 'nameInput1');
   nameLabel1.textContent = 'manager firstname: ';
   
   // Create an input element for the name
   const nameInput1 = document.createElement('input');
   nameInput1.setAttribute('type', 'text');
   nameInput1.setAttribute('id', 'namemanager');
   nameInput1.setAttribute('name', 'namemanager');
   div1.appendChild(nameLabel1);
   div1.appendChild(nameInput1);

   const nameLabe11 = document.createElement('label');
   nameLabe11.setAttribute('for', 'prename');
   nameLabe11.textContent = 'manager lastname: ';
   
   // Create an input element for the name
   const prenameInput = document.createElement('input');
   prenameInput.setAttribute('type', 'text');
   prenameInput.setAttribute('id', 'prename');
   prenameInput.setAttribute('name', 'prename');
   
   // Append the label and input elements to the form
   div1.appendChild(nameLabe11);
   div1.appendChild(prenameInput);
   
   const number1 = document.createElement('label');
   number1.setAttribute('for', 'nbt');
   number1.textContent = 'register commerce code: ';
   
   // Create an input element for the name
   const nbt = document.createElement('input');
   nbt.setAttribute('type', 'number');
   nbt.setAttribute('id', 'nbt');
   nbt.setAttribute('name', 'nbt');
   
   // Append the label and input elements to the form
   div1.appendChild( number1);
   div1.appendChild(nbt);



   // Create a label element for the email input
   const emailLabel = document.createElement('label');
   emailLabel.setAttribute('for', 'email');
   emailLabel.textContent = 'Email: ';
   
   // Create an input element for the email
   const emailInput = document.createElement('input');
   emailInput.setAttribute('type', 'email');
   emailInput.setAttribute('id', 'email');
   emailInput.setAttribute('name', 'email');
   
   // Append the label and input elements to the form
   div1.appendChild(emailLabel);
   div1.appendChild(emailInput);
   
   
   
    const pseudo=document.createElement('label');
    pseudo.setAttribute('for','pseudo1');
    pseudo.textContent='pseudo:';

    const pseudo1 = document.createElement('input');
    pseudo1.setAttribute('type', 'text');
    pseudo1.setAttribute('id', 'pseudo1');
    pseudo1.setAttribute('name', 'pseudo1');

   div1.appendChild(pseudo);
   div1.appendChild(pseudo1);


   const passw=document.createElement('label');
   passw.setAttribute('for','pass');
   passw.textContent='password:';
   const pass = document.createElement('input');
   pass.setAttribute('type', 'password');
   pass.setAttribute('id', 'pass');
   pass.setAttribute('name', 'pass');
   div1.appendChild(passw);
   div1.appendChild(pass);

   // Create a submit button
   const submitButton = document.createElement('button');
   submitButton.setAttribute('type', 'submit');
   submitButton.setAttribute('value', 'submit');
   submitButton.setAttribute('class', 'zon');
   submitButton.setAttribute('id', 'zon55');
   submitButton.setAttribute('name', 'awp');
   //submitButton.setAttribute('onclick', 'CONTROLSAISIEEMPLOYEUR()');
   div1.appendChild(submitButton);

   let formString = ff1.outerHTML;
   p.insertAdjacentHTML('afterbegin',formString);
 // p.appendChild(form);

}

function choix(r){
  let listeR = document.getElementsByName('radioo');
  let etatCivil="";
  let x;
  for (let i = 0; i < listeR.length; i++) {
    if (listeR[i].checked) 
   x=i;
   }
if(x==0){
  formde(r);

}
else if(x==1){
  forme(r);
}
else{
  alert("choisir employeur ou demandeur d emploi");
}
} 



let formulaire = document.getElementById('ff1');
formulaire.addEventListener('submit',function(e){
let name=document.getElementById("name");
let secname=document.getElementById("namemanager");
let mlast=document.getElementById("prename");
let mail = document.getElementById("email");
let pseudo1=document.getElementById("pseudo1");
let pass=document.getElementById("pass");
let passwordRegex =  /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{7,}$/
let regExNom=/^[a-zA-Z\s]+$/;
let regExEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
let myError=document.getElementById('erreur');
myError.style.color='red';

// controle du nom
if (name.value.trim()=='')
{	
myError.innerHTML='Le champ name of company  est requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(name.value)==false){

myError.innerHTML="Le champ nom doit être composé de lettres ou d'espaces";
e.preventDefault();
}

if (secname.value.trim()=='')
{	
myError.innerHTML='Le champ manager first name requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(secname.value)==false){

myError.innerHTML="Le champ nom doit être composé de lettres ou d'espaces";
e.preventDefault();
} 

if (mlast.value.trim()=='')
{	
myError.innerHTML='Le champ manager last name requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(mlast.value)==false){

myError.innerHTML="Le champ nom doit être composé de lettres ou d'espaces";
e.preventDefault();
}

if (pseudo1.value.trim()=='')
{	
myError.innerHTML='Le champ pseudo est requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(pseudo1.value)==false){

myError.innerHTML="Le champ psuedo doit être composé de lettres ou d'espaces";
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

  if (pass.value.trim()=='')
{	
myError.innerHTML='Le champ password est requis';
e.preventDefault();
}
else 
  if(passwordRegex.test(pass.value)==false){
myError.innerHTML="password n'est pas valide";
e.preventDefault();
  }





});

let formulaire2 = document.getElementById('ff2');
formulaire2.addEventListener('submit',function(e){let name=document.getElementById("name");
let secname=document.getElementById("namemanager");
let mlast=document.getElementById("prename");
let mail = document.getElementById("email");
let pseudo1=document.getElementById("pseudo1");
let cin=document.getElementById("message");
let num=document.getElementById("nbt");
let pass=document.getElementById("pass");
let passwordRegex =  /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{7,}$/

let regExNom=/^[a-zA-Z\s]+$/;
let regExEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
let myError=document.getElementById('erreur');
myError.style.color='red';

// controle du nom
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



if (mlast.value.trim()=='')
{	
myError.innerHTML='Le champ last name name requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(mlast.value)==false){

myError.innerHTML="Le champ nom doit être composé de lettres ou d'espaces";
e.preventDefault();
}

if (pseudo1.value.trim()=='')
{	
myError.innerHTML='Le champ pseudo est requis';
myError.style.color='red';
e.preventDefault();
}
else if(regExNom.test(pseudo1.value)==false){

myError.innerHTML="Le champ psuedo doit être composé de lettres ou d'espaces";
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


  if (message.value.length==0)
  {	
  myError.innerHTML='Le champ cin est requis';
  myError.style.color='red';
  e.preventDefault();
  }
  else if(message.value.length!=8){
  
  myError.innerHTML="Le champ cin doit être composé de 8 chiffres";
  e.preventDefault();
  }

  if (num.value.length==0)
  {	
  myError.innerHTML='Le champ phone number est requis';
  myError.style.color='red';
  e.preventDefault();
  }
  else if(num.value.length!=8){
  
  myError.innerHTML="Le champ phone number doit être composé de 8 chiffres";
  e.preventDefault();
  }

  if (pass.value.trim()=='')
{	
myError.innerHTML='Le champ password est requis';
e.preventDefault();
}
else 
  if(passwordRegex.test(pass.value)==false){
myError.innerHTML="password n'est pas valide";
e.preventDefault();
  }


});


