
<?php

session_start();
if(!isset($_SESSION['username']))
{
header('location:home1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url("background.jpg") ;
            background-position: center;
            background-attachment:fixed;
            background-size:cover;
        }
        .dropdown{
            width:80%;
            height:200px;
            margin:30px auto;
            /* margin-left:240px;
            margin-right:240px; */
            position:center;
            align-items: center;
            /* overflow:auto; */
        }

        .dropdown ul{
            padding:1px;
            width:1600px;
        }

        .dropdown ul li {
            float:left;
            background-color:black;
            color:white;
            width:200px;
            list-style:none;
            height:50px;
            line-height:50px;
            font-size:20px;
            text-align:center;
            /* opacity:0.6; */
            cursor:pointer;
        } 
        .dropdown ul li a{
            padding:3px 3px;
            text-decoration:none;
            color:white;
            display:block;
            text-align:center;
        }
        .dropdown ul li a:hover {
            color:red; 
        }
        /* .dropdown ul li a:visited {
            color:deeppink; 
        
        }
        .dropdown ul li a:active{
            color:aqua; 
        
        } */
    </style> 
</head>
<body>
    <nav class="dropdown">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="quizzes.html">Quizzes</a>
            </li>
            <li><a href="about.html">About us </a></li>
            <li><a href="contactus.html">Contact us</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </nav>
</body>
</html>