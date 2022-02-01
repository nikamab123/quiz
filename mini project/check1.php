<!DOCTYPE html>
<html>
   <head>
      <title></title>
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
               echo "Out of 10, you have attempted  " .$count. " questions <br><br>";
            
               $result=0;
               $i=1;
               $selected =$_POST['quizcheck'];
               print_r($selected);

               $q="select * from questions";
               $query=mysqli_query($con,$q);

               while($rows=mysqli_fetch_array($query))
               {
                   print_r($rows['ans_id']);
                   $checked=$rows['ans_id'] == $selected[$i];
                  
                   if($checked){
                       $result++;
                   }
                   $i++;
               }
               
               echo "<br> Your total score is ".$result;
               
           }
       }

        $del="delete from cgraph";
        $del1=mysqli_query($con,$del);
        $name=$_SESSION['username'];
        $finalresult="insert into cgraph(user,Basics) values ('$name','$result')";
        $queryresult=mysqli_query($con,$finalresult);
        // $name = $_SESSION['username'];
        // $finalresult = " insert into user(username,totalques,answerscorrect) values ('$name','5','$result')";
        // $queryresult= mysqli_query($con,$finalresult); 

?>
</body>
</html>