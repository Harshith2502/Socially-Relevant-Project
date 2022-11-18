<?php
    $username= $_POST['username'];
    $password= $_POST['password'];  
      
    $con = mysqli_connect("localhost","root","","devaraju");  
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

    $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); 


        $sql = "select * from signup where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        

    //database connection here
    /*$con = new mysqli("localhost","root","","devaraju");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);

    }else {
         $stmt = $con->prepare("select * from signup where username = ?");
        $stmt->bind_param("s",$username);
         $stmt->execute();
         $stmt_result = $stmt->get_result();
         if($stmt_result->num_rows > 0) {
       $data = $stmt_result->fetch_assoc();
         if($data['password'] == $password){
                echo "<h2>Login Successfully</h2>";
            }else{
          echo "<h2>Invalid-email-or-password</h2>";
            }

         }else {
             echo "<h2>Invaid-username-or-password</h2>";
        }


    }
    */

?>


<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Page </title>
<style> 
Body {
  
  background-color: rgb(244, 246, 248);
  background-image: url('food.jpg');
  background-repeat: no-repeat;
  background-position: 90%;
  background-size: 40%;
  border: 3px solid rebeccapurple;
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

button { 
       background-color: #1ae53c; 
       width: 20%;
        color: rgb(11, 17, 20); 
        padding: 15px; 
        margin: 10px 0px; 
        cursor: pointer;
        align-items: center;
        border-radius: 10px;
        } 
 form { 
        border-spacing: 0ch;
    } 
 input[type=text], input[type=password] { 
        width: 50%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 3px solid rgb(85, 69, 229); 
        
    }
 button:hover { 
        opacity: 0.7; 
        color: orange;
        transition: all ease;
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: large;
        font-weight: 500;
    } 
      
   
 .feed { 
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        padding: 200px; 
        width: 40%;
        
        margin: 0%;
        border-top: 10cm;
        border-collapse: collapse;
        align-content: center;
        font-size: x-large;
        font-style: normal;
        font-weight: 200;
        color: rgb(18, 14, 12);
        font-stretch: expanded;
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
    
    <form action ="/login.php" method="POST" >
        <div class="feed"> 
            <center><h1>LOGIN</h1></center>
            <label>USERNAME : </label> 
            <input type="text" placeholder="Enter Username" id= "username" name="username" required><br>
            <label>PASSWORD : </label> 
            <input type="password" placeholder="Enter Password"id ="password " name="password" required><br>
            <button type="submit" href="about.php">submit</button><br>
            <input type="checkbox" checked="checked"> Remember me 
            <button type="button" class="cancelbtn"> Cancel</button> <br>
            New user? <a href="./signup.php">Sign up</a>

            <?php
if($count == 1){  
    echo "<h1><center> Login successful </center></h1>";
    $_SESSION["user"] = $username;


    echo $_SESSION["user"];
 
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
} 

?>


            
        </div>
    </form> 
    
  
        <!-- <script type="text/javascript">
			const scriptURL = 'https://script.google.com/macros/s/AKfycbwgcYtOhmxPipwYe0bHnDMb7rXIiTqr7dOvvESYvM0RLNVSTB7fS0tmPSqOez0oSg/exec'
			const form = document.forms['submit-to-google-sheet']
		  
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