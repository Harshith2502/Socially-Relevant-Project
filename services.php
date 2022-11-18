
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- bootstrap css library -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- external css href -->
   <!-- <link rel="stylesheet" href="style(1).css">-->
    <!-- font awesome icons -->
    <script src="https://kit.fontawesome.com/07b0ae2276.js" crossorigin="anonymous"></script>


    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
.container{
    padding-top: 10%;
}
.container h2{
    text-align: center;
    font-weight: 600;

    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.container .carousel-inner .carousel-caption h2{
    color: rgb(135, 236, 91);
    text-shadow: 50px;
    text-rendering: geometricPrecision;
    font-weight: 600;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.loc iframe{
    width: 100%;
    
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 5%;
}
.loc h2{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 600;
    text-align: center;
    padding-top: 10%;
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
            <a href="#"><img src="logo.jpg" width="150" ></a>
        </div>
        <div class="nav_side">
            <div class="btn">
            <a href="./donate.php">Donate food</a>
            <a href="./gethelp.php">Request food</a>
            </div>
            <a href="./about.php">Home</a>
            <a href="./aboutus.php">About us</a>
            <a href="./about.php">Services</a>
            <a href="#">Contact us</a>
            <a href="./login.php">Register/Login</a>
        </div>
       
    </nav>

    
    
    <div class="container" >
        <h2>OUR WORKS</h2>  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="x.jpg" alt="" style="width:100%;">
              <div class="carousel-caption">
                <h2>ORPHANAGES</h3>
              </div>
            </div>
      
            <div class="item">
              <img src="v.jpg" alt="" style="width:100%;">
              <div class="carousel-caption">
               
              </div>
            </div>
          
            <div class="item">
              <img src="k.jpg" alt="" style="width:100%;">
              <div class="carousel-caption">
                <h2>OLD AGE HOMES</h2>
                
              </div>
            </div>

            <div class="item">
                <img src="y.jpg" alt="" style="width:100%;">
                <div class="carousel-caption">
                    
                  </div>
              </div>

              <div class="item">
                <img src="z.jpg" alt="" style="width:100%;">
                <div class="carousel-caption">
                    
                  </div>
              </div>
          </div>
           <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="loc">
    <h2>OUR LOCATION</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.2456770969543!2d83.40339111480624!3d18.060177987678685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3be4c4081c8dbb%3A0x1c634bbcd67ea3bf!2sMaharaj%20Vijayaram%20Gajapathi%20Raj%20College%20of%20Engineering%20(Autonomous)!5e0!3m2!1sen!2sin!4v1666811990463!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
</div>
    <footer>
        
        <div  class="about">
            <h5>Get to know us</h5>
            <a href="./aboutus.php">About us</a>|
            <a href="">Services</a>|
            <a href="./signup.php">Register</a>|
            <a href="./login.php">Login</a>
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