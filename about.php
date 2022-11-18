<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>home</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> -->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">-->
    <!-- bootstrap css library -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> -->
    <!-- external css href -->
   
    <!-- font awesome icons -->
    <script src="https://kit.fontawesome.com/07b0ae2276.js" crossorigin="anonymous"></script> 


    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <style>
        body{
    background-color: white;
}
.nav{
    background-color:white;
    z-index: 9;
    padding: 5px;
    padding-left: 50px;
    padding-right: 50px;
    display: flex;
    box-shadow: 0px 3px 65px 0px rgba(0,0,0,.3);
    font-size: larger;
    font-weight: 500;
}
.nav_top{
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
}
.logo{
    float: left;
    width: 60%;
}
.logo img{
    padding: 0px;
}
.nav_side{
    float: right;
    padding-top: 1cm;
    width: 40%;
}
.nav_side a{
    padding-top: 20px;
    width: 40%;
    font-weight: 500;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: larger;
    font-style: normal;
    text-decoration: none;
    margin-right:20px;
    margin-top: 20px;
    color: black;
    align-items: center;
    text-align: center;
    align-content: center;
}
.nav_side a:hover{
    color: orange;
    transition: all ease;
}
.nav .nav_side .btn{
    float: left;
}
.nav .btn{
    width: 25cm;
    align-items: center;
    align-content: center;
    align-self: baseline;
    float: left;
    padding-right: 10cm;
    padding-bottom: 1cm;
    border: 2px black;
}
.nav .btn a:hover{
    color: orange;
    transition: all ease;
}
.nav .btn a{
text-decoration: none;
padding: 10px 20px 10px;
padding-bottom: 5cm;
background-color: rgb(70, 240, 70);
color: darkblue;
text-align: center;
border: 2px black;
border-radius: 10px;
margin: 30px;
width: 2cm;
padding-bottom: 0.4cm;
}
.main{
    align-items: center;
    align-content: center;
    padding-left: 13cm;
    padding-top: 5cm;
    
}
.main .main_content{
    padding-top: 5cm;
    width:80%;
    padding-bottom: 2cm;
    padding-right: 30%;
    padding-left: 5%;
    text-align: center;

}
.main_content p{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 800;
    padding-left: 10%;
    padding-right: 10%;
    font-size: xx-large;
}
.yt{
    box-shadow: 0px 3px 65px 0px rgba(0,0,0,.3);
    
}

.yt iframe{
    padding-left: 10%;
   
}

.yt h2{ 
    padding-top: 1cm;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    text-decoration:underline;
    padding-right: 5cm;
    
}
.bb{
    padding-top: 2cm;
    
}
.bb h2{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    text-decoration: underline;
}
.bb p{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding-left: 10%;
    padding-right: 10%;
    font-size: larger;
}
.int {
    padding-top: 2cm;
   
}
.int h2{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    text-decoration: underline;
}
.int h3{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    text-decoration: none;
}
.imp {
    padding-top: 2cm;
    box-shadow: 0px 3px 65px 0px rgba(0,0,0,.3);
}
.imp h2{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    text-decoration: underline;
}
.imp img{
    align-items: center;
    align-content: center;
    margin-right: 1cm;
    margin-left: 1cm;
}
footer{
    background-color: rgb(237, 230, 230);
    box-shadow: 0px 3px 65px 0px rgba(0,0,0,.3);
    padding: 50px;
}

footer .about{
    text-align: center;
    align-items: center;
    padding: 1%;
}
footer .about a{
    text-decoration: none;
    padding: 1%;
}
footer .about h5{
    color: black;
    text-align: center;
    align-items: center;
    align-content: center;
}  
footer .about a:hover{
    color: orange;
    transition: all ease;
}

footer .connect{
    text-align: center;
    align-items: center;
    padding: 1%;
}
footer .connect a{
    text-decoration: none;
    padding: 1%;
    align-items: center;
    align-content: center;
}
footer .connect h5{
    color: black;
    text-align: center;
    align-items: center;
    align-content: center;
}  
footer .connect a:hover{
    color: orange;
    transition: all ease;
}

footer .contact{
    text-align: center;
    align-items: center;
    padding: 1%;
}
footer .contact a{
    text-decoration: none;
    padding: 1%;
    align-items: center;
}
footer .contact h5{
    color: black;
    text-align: center;
    align-items: center;
    align-content: center;
}  
footer .contact a:hover{
    color: orange;
    transition: all ease;
}

    </style>
</head>
<body>
    
    <nav class="nav nav_top">
        <div class="logo">
            <a href="#"><img src="../images/mainlogo.jpeg" width="350" ></a>
        </div>
        <div class="nav_side">
            <div class="btn">
            <a href="donate.html">DONATE FOOD</a>
            <a href="gethelp.html">REQUEST FOOD</a>
            </div>
            <a href="about.html">Home</a>
            <a href="aboutus.html">About us</a>
            <a href="services.html">Services</a>
            <a href="#">Contact us</a>
            <a href="login.html">Register/Login</a>
        </div>
       
    </nav>
    <div class="main">
            <img src="../images/b.png" width="500" >
        </div>
       <!--<div class="pic"><img src="b.png" width="500"> 
       </div>-->
      

    <div class="main_content"> 
        <p>Feed the tummies, instead of drains. The left-overs yout throw into drains, may feed someone's tummy.</p>
        <p>- May we be successful in fighting against hunger and ensuring people get safe, clean and affordable food.</p>
    </div>
     
<div class="yt">
    <h2>STORIES OF IMPACT</h2>
    <iframe width="580" height="325" src="https://www.youtube.com/embed/48gSq_Dud-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
    <iframe width="580" height="325" src="https://www.youtube.com/embed/SxgB-rSMUbA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> 

<div class="bb">
    <h2>WHY DONATIONS ARE IMPORTANT</h2>
    <p>Every donation provides nutritious food for hungry children and families.When you donate to the World Food Programme, your generosity is immediately put to work helping build a world with zero hunger.You can help save lives during emergencies or give children nutritious meals in school.</p><br>
    <p>Whatever goods you donate — as long as it is in good working condition and unexpired — is probably useful. But we should devote some thought to what we donate and strive to donate items which are overlooked, and satisfy unfilled needs.</p>
</div>

<div class="int">
    <h2>STATISTICS</h2>
    
</div>

<div class="counter-bgimage bgimage-property">
   <!-- <div class="container"> -->
     <div class="row counter-div"> 
     <div class="col-xs-6 col-sm-1 text-center counter-col"></div> 
     <div class="col-xs-6 col-sm-2 text-center counter-col"> 
    <div class="counter-img">
    <img src="../images/16t.jpeg"  class="img-responsive" width="100%" height="100%">
    </div>
    <p class="counter-value top-space10"><span class="count">1</span></p>
    <h4 class="counter-title top-space10">Organizations Count</h4>
    </div>
    <div class="col-xs-6 col-sm-2 text-center counter-col counter1-resSpace">
    <div class="counter-img">
    <img src="../images/17t.jpeg"  class="img-responsive">
    </div>
    <p class="counter-value top-space10"><span class="count">30</span></p>
    <h4 class="counter-title top-space10">Meals Served</h4>
    </div>
    <div class="col-xs-6 col-sm-2 text-center counter-col counter1-resSpace">
    <div class="counter-img">
    <img src="../images/xx.jpg"  class="img-responsive">
    </div>
    <p class="counter-value top-space10"><span class="count">1</span></p>
    <h4 class="counter-title top-space10"> Cities Operated </h4>
    </div>
    <div class="col-xs-6 col-sm-2 text-center counter-col counter-resSpace">
    <div class="counter-img">
    <img src="../images/7.jpg" class="img-responsive">
    </div>
    <p class="counter-value top-space10"><span class="count"> 10KG</span></p>
    <h4 class="counter-title top-space10">Rice quantity </h4>
    </div>
    <div class="col-xs-6 col-sm-2 text-center counter-col counter-resSpace">
    <div class="counter-img">
    <img src="../images/22.jpg"  class="img-responsive">
    </div>
    <p class="counter-value top-space10"><span class="count">10KG</span></p>
    <h4 class="counter-title top-space10">Vegetables quantity </h4>
    </div>
    </div>
    </div>
    </div>
     
    <div class="imp">
        <h2>FIELD WORK</h2>
        <img src="../images/img1.jpeg" width="200">
        <img src="../images/img2.jpeg" width="500">
        <img src="../images/img3.jpeg" width="200">
        <img src="../images/img4.jpeg" width="200">
    </div>

    <footer>
        
        <div  class="about">
            <h5>Get to know us</h5>
            <a href="aboutus.html">About us</a>|
            <a href="services.html">Services</a>|
            <a href="signup.html">Register</a>|
            <a href="login.html">Login</a>
        </div>
        <div class="connect">
            <h5>Connect with us</h5>
            <a href=""><i class="fa fa-facebook" area-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram"area-hidden="true" ></i></a>
            <a href=""><i class="fa fa-linkedin" area-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" area-hidden="true" ></i></a>
       
        </div>
        <div class="contact">
            <h5>Contact us</h5>
            <a href=""><i class="fa fa-whatsapp" area-hidden="true"></i></a>
            <a href=""><i class="fa fa-phone" area-hidden="true"></i></a>
            <a href=""><i class="fa fa-envelope-o" area-hidden="true"></i></a>
               
        </div>
        <hr>
        <p>Copyright &copy; 2022 abcd</p>
    </footer>
        <!-- bootstrap javascript cdn link -->
        
      
       <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>-->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    </body>
    </html>