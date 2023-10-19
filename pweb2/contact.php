<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact us</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
/*@import url('https://https://fonts.google.com/specimen/Poppins')*/

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


header{
    font-family: sans-serif;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;    
}
.logo{
    font-size: 2em;
    color: #fff;
    user-select: none;
}
.navigation a{
    position: relative;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
}
 
.navigation a::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .4s;
}
.navigation a:hover::after{
    transform-origin: left;
    transform: scaleX(1);
}
.navigation .btnlogin-popup{
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    font-weight: 500;
    margin-left: 40px; 
    transition: .5s;
}

.navigation .btnlogin-popup:hover {
    background: #fff;
    color: #162938;
}



.contact{
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background:url(pack.jpg);
    background-size: cover;    
}
.contact .content{
    max-width: 800px;
    text-align: center;
}
.contact .content h2{
    font-size: 36px;
    font-weight: 500;
    color: #fff;
}
.contact .content p{
    font-weight: 300;
    color: #fff;
}
.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;

}
.container .contactInfo{
    width: 50%;
    display: flex;
    flex-direction: column;
}
.container .contactInfo .box{
    position: relative;
    padding: 20px 0;
    display: flex;
}

.container .contactInfo .box .icon{
    min-width: 60px;
    height: 60px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 22px;
}
.container .contactInfo .box .text{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: #fff;
    flex-direction: column;
    font-weight: 300;
}
.container .contactInfo .box .text h3{
    font-weight: 500;
    color: #00bcd4;
}
.contactForm{
    width: 40%;
    padding: 40px;
    background: #fff;
}
.contactForm h2{
    font-size: 30px;
    color: #333;
    font-weight: 500;
}
.contactForm .inputBox{
    position: relative;
    width: 100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #333;
    outline: none;
    resize: none;
}
.contactForm .inputBox span{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span{
    color: #e91e63;
    font-size: 12px;
    transform: translateY(-20px);

}
.contactForm .inputBox input[type="submit"]{
    width: 100px;
    background: #00bcd4;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}

@media (max-width: 991px){
    .contact{
        padding: 50px;
    }
    .container{
        flex-direction: column;
    }
    .container .contactInfo{
        margin-bottom: 40px;
    }
    .container .contactForm{
        width: 100%;
    }
}
</style>
</head>
<body>
  
        <header>
            <h2 class="logo">Logo</h2>
            <nav class="navigation">
               <a href="index.html">Home</a>
               <a href="contact.html">Contact</a>
               <a href="#">About</a>
               <button class="btnlogin-popup">Login</button>
            </nav>
        </header>
    
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labor et dolare magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                 <div class="box">
                    <div class="icon"><ion-icon name="navigate"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>4671 Sugar Camp Road,<br>Owatonna,Minnesota,<br>55060</p>
                    </div>
                 </div>
                 <div class="box">
                    <div class="icon"><ion-icon name="call"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>4671-25-00</p>
                    </div>
                 </div>
                 <div class="box">
                    <div class="icon"><ion-icon name="mail"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>redjob.company@gmail.com</p>
                    </div>
                 </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>