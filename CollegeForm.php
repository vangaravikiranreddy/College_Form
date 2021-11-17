<?php 
if(isset($_POST['name']))
{
$server="localhost:3307";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$sql = "INSERT INTO `college`.`tour` (`name`, `age`, `gender`, `phone`, `email`) VALUES ('$name', '$age', '$gender', '$phone', '$email');";
if($con->query($sql)==true)
{
// echo "Successfully Inserted";
}
else{
    echo "ERROR:$sql<br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="CollegeForm.css">
</head>
<body>
 <div class="container">
<h1>CMR College Form</h1>
<form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter Your name"><br><br>
    <input type="text" name="age" id="age" placeholder="Enter Your Age"><br><br>
    <input type="text" name="gender" id="gender" placeholder="Enter yout gender"><br><br>
    <input type="tel" name="phone" id="phone" placeholder="Enter Your phone number"><br><br>
    <input type="email" name="email" id="email" placeholder="Enter your email"><br><br>
    <button class="btn" onclick="myfunction()">Submit</button>
</form>
 </div>
 <script src="index.js"></script>  
</body>
</html>