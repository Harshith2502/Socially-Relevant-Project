<?php
$servername="localhost"; //if we want to change the database from phpmyadmin to mysql workbench use "localhost:3307" as the server name because mysql work bench is running on port 3307 in this machine
$username ="root";
$password ="";
$database="devaraju";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Failed to connect:".mysqli_connect_error());
}
else{
echo "connection was successful<br>";   
}



if($_SERVER['REQUEST_METHOD']=='POST'){
    $MEALQUANTITY=$_POST["MEAL QUANTITY"];
    $PICKUPADDRESS=$_POST["PICKUP ADDRESS"];
    $PICKUPTIME=$_POST["PICKUP TIME"];
    $MOBILENO=$_POST["MOBILE NO"];
$sql="insert into `request_food`(`MEAL QUANTITY`,`PICKUP ADDRESS`,`PICKUP TIME`,`MOBILE NO`) values ('$MEALQUANTITY','$PICKUPADDRESS','$PICKUPTIME','$MOBILENO')";
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


<title>gethelp Page </title>
<style> 
Body {
  
  background-color: rgb(244, 246, 248);
  background-image: url('food.jpg');
  background-repeat: no-repeat;
  background-position: 90%;
  background-size: 40%;
  border: 3px solid rebeccapurple;
}
.logo{
    float: left;
    width: 60%;
}
.logo img{
    padding: 0px;
}

button { 
       background-color: #1ae53c; 
       width: 20%;
        color: rgb(11, 17, 20); 
        padding: 15px; 
        margin: 10px 0px; 
        cursor: pointer;
        align-items: center;
        } 
 form { 
        border-spacing: 0ch;

    } 
 input[type=text], input[type=address],input[type=number],input[type=datetime-local]{ 
        width: 50%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 3px solid rgb(85, 69, 229); 
        
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .feed { 
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        padding: 200px; 
        width: 40%;
        margin: 0%;
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
    <div class="logo">
        <a href="#"><img src="logo.jpg" width="150" ></a>
    </div>
    
    <form action="/gethelp.php" method="post" >
    <div class="feed"> 
            <center><h1>REQUEST NOW</h1></center>
            <label>MEAL QUANTITY : </label> 
            <input type="text" placeholder="Enter quantity" name="MEAL QUANTITY" id="mealquantity" required><br>
            <label>PICKUP ADDRESS : </label> 
            <input type="ADDRESS" placeholder="Enter pickup address" name="PICKUP ADDRESS" id="pickupaddress" required><br>
            <label>PICKUP TIME : </label> 
            <input type="time" placeholder="Enter pickup time" name="PICKUP TIME" id="pickuptime" required><br>
            <label>MOBILE NO : </label> 
            <input type="number" placeholder="Enter mobile no" name="MOBILE NO" id="mobileno" required><br>
            <button type="submit">submit</button><br>
            
            <button type="button" class="cancelbtn"> Cancel</button> <br>
            
        </div> 

        
        <html>
        <head>
            <title>search data by its id</title>
            <style>
                body{
                    background-color : grey;
                }
                table,th,td{
                    border:2px solid black;
                    width:1100px;
                    background-color:lightgreen;
            
                }
                .btn{
                    width:10%;
                    height:5%;
                    font-size:22px;
                    padding:0px;
                }
                </style>
            
                </head>
            <body>
                <h1 style ="text-align:center"> OUR REQUESTORS</h1>
                
                
    <table class="container">
                     <tr>
                    
                        <th>MEAL QUANTITY</th>
                        <th>PICKUP ADDRESS</th>
                        <th> PICKUP TIME</th>
                        <th>MOBILE NO</th>
                    </tr><br>
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'devaraju');

                    $QUERY = "SELECT * FROM `request_food`";
                    $query_run = mysqli_query($connection,$QUERY);

                    while($row =mysqli_fetch_array($query_run))
                    {
                        ?>
                        <tr>
                            
                            <td> <?php echo $row['MEAL QUANTITY']; ?> </td>
                            <td> <?php echo $row['PICKUP ADDRESS']; ?> </td>
                            <td> <?php echo $row['PICKUP TIME']; ?> </td>
                            <td> <?php echo $row['MOBILE NO']; ?> </td>
                    </tr>
                    <?php
                    }
?>

    </table>
    </div>
    </center>
</body>
</html>

     
    
  
        <!--<script type="text/javascript">
			const scriptURL = 'https://script.google.com/macros/s/AKfycbwgcYtOhmxPipwYe0bHnDMb7rXIiTqr7dOvvESYvM0RLNVSTB7fS0tmPSqOez0oSg/exec'
			const form = document.forms['submit-to-google-sheet']
		  
			form.addEventListener('submit', e => {
			  e.preventDefault()
			  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
				.then(response => alert("Thank you! your form is submitted successfully." ))
				.then(() => {  window.location.reload(); })
				.catch(error => console.error('Error!', error.message))
			})
		  </script>!-->
</body>   
</html>