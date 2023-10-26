<?php

$conn = mysqli_connect('localhost','root','','user_db');

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">


   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        
        .header .logo {
            display: flex;
            align-items: center;
        }
        
        .header .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        
        .header .nav {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }
        
        .header .nav li {
            margin-right: 10px;
        }
        
        .header .nav li:first-child {
            margin-right: auto;
        }
        
        .header .nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .header .nav a:hover {
            background-color: #555;
        }
        </style>



<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6492f81d94cf5d49dc5f06a1/1h3f1idmn';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>

</head>




<body>
<body>
    <div class="header">
        <div class="logo">
            <img src="websitelogo.png" alt="Online Education Logo">
            <h1>Online Education</h1>
        </div>
        <ul class="nav">
            <li><a href="mainmanu.html">Home</a></li>
            <li><a href="login_form.php">Menu</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="teachers.html">Teachers</a></li>
            <li><a href="courses.html">Courses</a></li>
           
        </ul>
    </div>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="calculator.html" class="btn">Calculator</a>
      <a href="quizzgame.html" class="btn">QuizGame</a>
      <a href="library.html" class="btn">Library</a>
      <a href="noticesection.html" class="btn">Notice</a>
   </div>

</div>

</body>
</html>