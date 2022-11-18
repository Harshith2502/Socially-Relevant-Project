
<?php
$servername="localhost"; //if we want to change the database from phpmyadmin to mysql workbench use "localhost:3307" as the server name because mysql work bench is running on port 3307 in this machine
$username ="root";
$password ="";
$database="devaraju";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Failed to connect:".mysqli_connect_error());
}




if($_SERVER['REQUEST_METHOD']=='POST'){
  $NAME=$_POST["name"];
  $EMAIL=$_POST["email"];
  $Mobileno=$_POST["Mobileno"];
  $Adharno=$_POST["Adharno"];
  $username=$_POST["username"];
  $password=$_POST["password"];
  $ADDRESS=$_POST["address"];
$sql="insert into `signup`(`NAME`,`EMAIL`,`Mobile no`,`Aadhar no`,`Username`,`Password`,`ADDRESS`) values ('$NAME','$EMAIL','$Mobileno','$Adharno','$username','$password','$ADDRESS')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "logged in succesfully";
}
else{
    echo "error logginging into account";
}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>signup page</title>
<style>
body {
    background-color: #f1f1f1 ;
    background-image: url('food.jpg');
    background-repeat: no-repeat;
  background-position: 90%;
  background-size: 40%;
  border: 3px solid rebeccapurple;
}
* {box-sizing: border-box}
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
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
input[type=text], input[type=email],input[type=number],input[type=address] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 3px solid rgb(85, 69, 239) ;
  background: #f1f1f1;
  
}
hr {
  border: 1px solid #db1313;
  margin-bottom: 25px;
}

button {
  background-color: #2eec48;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1.0;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f4f0ef;
  
}

.cancelbtn, .signupbtn {
  float: left;
  /*border: 3px solid white;*/
  width: 50%;
  border:3px solid black;
  color: black;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  font-size: large;
  font-weight: 400;
}

.abc {
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        padding: 200px; 
        width: 60%;
        margin: 0%;
        border-collapse: collapse;
        align-content: center;
        font-size: x-large;
        font-style: normal;
        font-weight: 200;
        color: rgb(18, 14, 12);
        font-stretch: expanded;
}
.abc p{
  color: black;
  font-size: medium;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
  
}
.home::after{
  text-decoration: none;
  color: black;
}
</style>
</head>
<body>
  <nav class="nav nav_top">
    <div class="logo">
        <a href="#"><img src="logo.jpg" width="150"></a>
    </div>
    <div class="nav_side">
        <div class="btn">
        <a href="./donate.php">Donate food</a>
        <a href="./gethelp.php">Request food</a>
        </div>
        <a href="./about.php">Home</a>
        <a href="./aboutus.php">About us</a>
        <a href="./services.php">Services</a>
        <a href="#">Contact us</a>
        <a href="./login.php">Register/Login</a>
    </div>
   
</nav>

<form  action="/signup.php" method="post">
  <div class="abc">
  
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>NAME :</b></label>
    <input type="text" placeholder="Enter full name" name="name"  id="name"required>

    <label for="email"><b>EMAIL :</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Mobile no :</b></label>
    <input type="number" placeholder="Enter phone no" name="Mobileno" id="Mobileno" required>

    <label for="psw"><b>Aadhar no :</b></label>
    <input type="number" placeholder="Enter Aadhar no" name="Aadharno" id="Aadharno" required>


    <label for="psw"><b>User name :</b></label>
    <input type="text" placeholder="Enter user name" name="username" id="username" required>


    <label for="psw"><b>Password :</b></label> 
    <input type="password" placeholder="Enter password" name="password" id="password"required>
            

    <label for="address"><b>ADDRESS :</b></label>
    <textarea row="150" cols="50" name="address"id="address" placeholder="Enter address" required></textarea>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">submit</button>
      <a href="./login.php">Register/Login</a>
    </div>
    
  </div>
</form>
    <!-- <script type="text/javascript">
        const scriptURL ='https://script.google.com/macros/s/AKfycbzLLHS2G69_lRXvbWZgQdYuhXmJQPRP25ShmShY1PsFKVvGOqc1EWFvNxqLIoAN6I7OjQ/exec'
			const form = document.forms['googleform']
		  
			form.addEventListener('submit', e => {
			  e.preventDefault()
			  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
				.then(response => alert("Thank you! your form is submitted successfully." ))
				.then(() => {  window.location.reload(); })
				.catch(error => console.error('Error!', error.message))
			})
	</script> -->
</body>
</html>