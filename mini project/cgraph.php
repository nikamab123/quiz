<?php
 
include("cdb.php");
 
$query = "select Basics,Function_Pointers,File_Handling from cgraph";
$result = mysqli_query($conn,$query);
 
if(mysqli_num_rows($result) >= 0) {
    while ($row = mysqli_fetch_assoc($result)) {
 
        $basic = $row['Basics'];
        $mid = $row['Function_Pointers'];
        $high = $row['File_Handling'];
    }
}
    else
    {
    echo "Something went wrong";
 
    }
?>
 
 
<html>
 
<head>
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">
 
</head>
<body>
 
 
 
<canvas id="myChart" style="height:auto; width: 500px;"></canvas>
 
<?php
 
echo "<input type='hidden' id= 'basic' value = '$basic' >";
echo "<input type='hidden' id= 'mid' value = '$mid' >";
echo "<input type='hidden' id= 'high' value = '$high' >";

 
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
 
 
<script>
    var basic = document.getElementById("basic").value;
    var mid = document.getElementById("mid").value;
    var high = document.getElementById("high").value;
    
 
    window.onload = function()
    {
        var randomScalingFactor = function() {
            return Math.round(Math.random()*20);
        };
        var config = {
            type: 'bar',
            data: {
                borderColor : "#fffff",
                datasets: [{
                    data: [
                       
                        basic,
                        mid,
                        high
                    ],
                    borderColor : "#fff",
                    borderWidth : "3",
                    hoverBorderColor : "#000",
 
                    label: 'Result report',
 
                    backgroundColor: [
                        
                        "#f312cb",
                        "#ff0060",
                        "#ffe400"
 
                    ],
                    hoverBackgroundColor: [
                        
                        "#ff8397",
                        "#6970d5",
                        "#ffe400"
                    ]
                }],
 
                labels: [
                   
                    'Basics',
                    'Function & Pointers',
                    'File Handling'
                ]
            },
 
            options: {
                responsive: true
 
            }
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);
 
 
    };
</script>
 
</body>
 
</html>