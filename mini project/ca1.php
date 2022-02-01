
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
        padding:0px;
        margin:0x;
        box-sizing:border-box;

    }
         body{
            background-image:url("background.jpg") ;
            background-position: center;
            background-attachment:fixed;
            background-size:cover;
        }
        .dropdown{
            width:90%;
            height:200px;
            margin:30px auto;
            margin-top:30px;
            margin-left:80px;
            position:center;
            align-items:center;
            /* overflow:auto; */
        }

        .dropdown ul{
            padding:1px;

            /* width:1000px;  */
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
       
        .container
        {
            background-color:darksalmon;
            border:3px solid red;
            /* margin:24px 20px; */
            padding:24px 20px;
            border-radius:23px;
            width:233px;
            height:100%;
        }
        .row{
        margin:20px;
        padding:0px;
        display:flex;
        flex-direction:row;
        justify-content:space-around;
        flex-flow:wrap;
    }

    .card{
        width:30%;
        background:#fff;
        border:1px solid #ccc;
        margin-bottom:50px;
        transition:0.3s;
    }
    .card-header{
        text-align:center;
        padding:15px 15px;
        background:linear-gradient(to right,#010c07,#e22200e1);
        color:#fff;

    }
    .card-body{
        padding:30px 20px;
        text-align:center;
        font-size:18px;
    }
    .card-body .btn{
        display:block;
        color:#fff;
        text-align:center;
        background:linear-gradient(to right,#010c07,#e22200e1);
        margin-top:30px;
        text-decoration:none;
        padding:10px 5px;
    }
    .card:hover{
        transform:scale(1.05);
        /* box-shadow:00 40px rgba(0, 0, 0, 0.25); */
    }
    @media screen and (max-width:1000px)
    {
    .card{
        width:40%;
         }
    }
    @media screen and (max-width:620px)
    {
        .container{
            width:100%;
        }
        .heading{
            padding:20px;
            font-size:20px;
        }
    .card{
        width:80%;
        height:400px;
         }
    }
      .boxes{
          width:1100px; 
          margin:33px  auto;
          margin-top:0.01px;
          margin-top:3px;
          
          height:auto;
      }  
    </style>
</head>
<body>
    <nav class="dropdown">
        <ul>
            <li><a href="home1.php">Home</a></li>
            <!-- <li>Quizzes -->
            <li><a href="#">Quizzes</a>
                 
            </li>
            <li><a href="about.html">About us </a></li>
            <!-- <li><a href="https://www.google.com/">Login</a></li> -->
            <li><a href="contactus.html">Contact us</a></li>
            <li><a href="logout.php">Log out</a></li>



      </ul>
    </nav>
    <!-- -----------------------Boxes------------------------------- -->

<center>
<div class="boxes">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1>C</h1>
            </div>
            <div class="card-body">
                <p>
                    <!-- Quiz will be based on different modules of c which includes basics, datatypes, functions, pointers etc.
                    <br>Time limit:
                    <br>Marks:
                    <br>Total no of questions: -->
                 
                </p>
                <a href="home3.php" class="btn">Basics</a>
                <a href="home3.php" class="btn">Attempt quiz</a>
                <a href="home3.php" class="btn">Attempt quiz</a>
                <a href="home3.php" class="btn">Attempt quiz</a>
            </div>
        </div>

        
    </div>
</div>
</center>
</body>
</html>