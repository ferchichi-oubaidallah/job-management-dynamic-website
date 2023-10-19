function showDiv() {
    document.getElementById("mydiv").style.display = "flex";
    document.getElementById("myform").style.display = "none";
    document.getElementById("rand").style.display = "none";
    document.getElementById("sub").style.display = "none";
  
  }
  function showform() {
    document.getElementById("myform").style.display = "flex";
    document.getElementById("myform").style.flexDirection="column";
 
    document.getElementById("mydiv").style.display = "none";
    document.getElementById("rand").style.display = "none";
    document.getElementById("sub").style.display = "none";
  
    
  }
  function showsubmit() {
    document.getElementById("myform").style.display = "none";
    document.getElementById("mydiv").style.display = "none";
    document.getElementById("rand").style.display = "none";
    document.getElementById("sub").style.display = "flex";
  }
  let loginForm = document.querySelector('.login-form-container');
  
  document.querySelector('#login-btn').onclick = () =>{
      loginForm.classList.toggle('active')
  }
  
  document.querySelector('#close-login-btn').onclick = () =>{
      loginForm.classList.remove('active')
  }
  let loginForm2 = document.querySelector('.login-form-container2');

  document.querySelector('#login-btn2').onclick = () =>{
      loginForm2.classList.toggle('active')
  }
  
  document.querySelector('#close-login-btn2').onclick = () =>{
      loginForm2.classList.remove('active')
  }
  function showbtn(){
    document.getElementById("uu").style.visibility= "visible";
  }
  function hidebtn(){
    document.getElementById("uu").style.visibility= "hidden";
  }
  new MultiSelectTag('skills2')

