<?php
   session_start();
   
   if(!isset($_SESSION['username'])){
   	header('location:login2.php');
   }
   
   
   $con = mysqli_connect('localhost','root');
   if($con)
   {
       echo "Success";
   }
  
   	mysqli_select_db($con,'quizdbase');
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home3</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body >
    <div class="container">
        <h1 class="text-center text-primary">Quizzy Web</h1>
        <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username'];?></h2></br>
 <div class="col-lg-8 m-auto d-block">   
        <div class=" text-center card-header">
            <h5>Welcome <?php echo $_SESSION['username'];?>, You have to select only one from 4. Best of luck!</h4>

        </div>
    <form action="check.php" method="post">
   
    <?php

    // $name=$_POST['name'];
    // echo $name;
    
    for($i=1;$i<11;$i++){
    $q="select * from questions where qid=$i";
    // $q="select * from questions order by rand(),qid asc";

    $query=mysqli_query($con,$q);

    
    // $exe=mysqli_exe($con,$qid);
    // $id->query("se")


    while($rows=mysqli_fetch_array($query))
    {
    ?>

        <div class="card">
            <h4 class="card-header"><?php echo $rows['question']?></h4>
            <?php
                $q="select * from answers where ans_id=$i";
                // $q="select * from answers order by ans_id limit 4";

                $query=mysqli_query($con,$q);
                while($rows=mysqli_fetch_array($query)){
            ?>
            <div class="card-body">
                <input type="radio" name="quizcheck[<?php echo $rows['ans_id']?>]" value="<?php echo $rows['aid'];  ?>">
                <?php echo $rows['answer'];?>
            </div>


        
    
    <?php
    }
    }
}

  
    ?>
    <input type="submit" name ="submit" value="submit" class="btn btn-success m-auto d-block">
    </form>
</div>
</div>
<br><br>
</body>
</html>