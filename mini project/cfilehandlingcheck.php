<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <style>
          *{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        body{
          background-color:white;
          /* background:url("result.jpg"); */
          font-size:24px;
          font-weight:bold;
          background-repeat:no-repeat;
          background-position: center;
          background-attachment:fixed;
          background-size:cover;

        }
     
      .score{
        font-size:36px;
        font-family:'ultra';
        display:border-box:

      }
      .show{
         
          margin-top:100px;
          margin-right:240px;
          margin-left:240px;
          margin-bottom:80px;
          border:3px solid green;
          padding:24px 20px;
          border-radius:23px;
          transition:0.3s;
           /* background-color:red;  */
           color:black;
      }
      .show:hover{
        transform:scale(1.05);
        box-shadow:10 10px;
    }
    
    
         
      </style>
<body>
<div class="show">

<?php
   session_start();
   
   if(!isset($_SESSION['username'])){
   	header('location:registration.php');
   }
   
   
   $con = mysqli_connect('localhost','root');
   if($con)
   {
    //    echo "Success";
   }
  
   	mysqli_select_db($con,'quizdbase');
       if(isset($_POST['submit']))
       {
           if(!empty($_POST['quizcheck']))
           {
               $count=count($_POST['quizcheck']);
               echo"<br><br><div class='score'><center><h2>" . $_SESSION['username'] ." , Your Result in File Handling </center></h2></div><br><br>";
               echo "<center>Out of 10 ,You have attempted " .$count. " questions</center><br/><br/>";
               
            
               $result=0;
               $i=1;
               $selected =$_POST['quizcheck'];
            //    print_r($selected);

               $q="select * from cfilehandling";
               $query=mysqli_query($con,$q);

               while($rows=mysqli_fetch_array($query))
               {
                //    print_r($rows['ans_id']);
                   $checked=$rows['ans_id'] == $selected[$i];
                  
                   if($checked){
                       $result++;
                   }
                   $i++;
               }
               
               echo "<center><div class='myclass'>Your total score is :<br><b>".$result."</b></center></div><br><br>";
               
           }
       }

        // $del="delete from usergraph";
        // $del1=mysqli_query($con,$del);

        $name=$_SESSION['username'];
        // $finalresult="insert into usergraph(user,basic) values ('$name','$result')";
        // $queryresult=mysqli_query($con,$finalresult);
        // // $name=$_SESSION['username'];
        // $finalresult="insert into usergraph(mid) values ('$result')";
        $finalresult="update cgraph set File_Handling='$result' where user='$name'";

        $queryresult=mysqli_query($con,$finalresult);
        // $name = $_SESSION['username'];
        // $finalresult = " insert into user(username,totalques,answerscorrect) values ('$name','5','$result')";
        // $queryresult= mysqli_query($con,$finalresult); 

?>
</div>
</body>
</html>