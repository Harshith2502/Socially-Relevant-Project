<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aboutus</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- bootstrap css library -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- external css href -->
    <!--<link rel="stylesheet" href="style(1).css">-->
    <!-- font awesome icons -->
    <script src="https://kit.fontawesome.com/07b0ae2276.js" crossorigin="anonymous"></script>
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
    font-size: larger;
    font-style: normal;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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

.x{
    background-color: white;
    height: 80vh;
}
.x .x_c{
    padding-top: 5cm;
    text-align: center;
    width: 80%;
    padding-left: 15%;
}
.x .x_c h2{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: xx-large;
    font-weight: 500;
}
.x .x_c span{
    font-size: larger;
}
.kkk {
    padding-top: 2cm;
    box-shadow: 0px 3px 65px 0px rgba(0,0,0,.3);
}
.kkk h2{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    text-decoration: underline;
}
.kkk img{
    align-items: center;
    align-content: center;
    margin-right: 1cm;
    margin-left: 1cm;
    width: 100%;
 padding-left: 5%;
 padding-right: 5%;
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
            <a href="#"><img src="../images/mainlogo.jpeg" width="350"></a>
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
       <!----<div class="btn">
            <a href="donate.html">Donate now</a>
            <a href="gethelp.html">Get food</a>
        </div>-->
    </nav>

    <div class="x">
        <div class="x_c">
            <h2>WHAT WE DO!</h2><br>
                <span>We are a non-profit orginization working for the well being of less fortunate people.</span><br>
                <span>Food is the main resource, every human craves for, and work hard for!</span><br>
                <span>We are all students, working together to help less forutnate people from food crisis,</span><br>
                <span> by providing them food from the restaurant and committees, and also from other private functions.<span>
        </div>
    </div>  

    <!--<div class="kkk">
        <h2>OUR TEAM</h2>
        <img src="team.jpeg">
        </div>
    </div>-->

     <!-- footer section -->
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>