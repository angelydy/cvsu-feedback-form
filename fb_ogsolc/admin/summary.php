<!DOCTYPE html>  
<html>  
<head>  
     <title>CvSU OSFS - OGS/OLC</title>
     <meta charset="UTF-8">
     <meta http-equiv="Cache-control" content="no-cache">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <link rel="stylesheet" href="css/adminstyle.css">
     <link rel="stylesheet" type="text/css" href="http://mysite/style.css?id=1234">
     <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script defer src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js'></script>
     <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

     <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

</head>  
<body style="margin: 0; padding:0; background-image: url(images/main-bg.png);">  

     <!-- navbar -->

     <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: black; font-family: 'Poppins'; height:8.5%;" >
          <a class="navbar-brand" href="summary.php"><img src="images/logo.png" width="40" height="35" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-weight: 700;">
               <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                    <a class="nav-link" href="summary.php">Summary&nbsp </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="collection.php">Collection&nbsp </a>
               </li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account&nbsp
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="manage-account.php">Manage Accounts</a>
                    <a class="dropdown-item" href="add-account.php">Add Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
               </li>
               <li class="nav-item">
                    <a class="nav-link disabled" href="#">&nbsp&nbsp&nbspOGS/OLC Admin Panel&nbsp&nbsp</a>
               </li>
               </ul>
          </div>
     </nav>

     <!-- end of navbar -->

     <center><h1 style='margin-top:10%; font-size: 1.5em; font-weight:800;'>Feedback Summary</h1></center>
     <div style="width:100%; padding-bottom:5%; padding-top:2%;">  
          <table style="padding: 0;
                        width: 60%; 
                        border-collapse: collapse; 
                        border-spacing:0; 
                        border: none;
                        align-items:center;
                        margin: auto;
                        margin-top:0%;
                        background-color: transparent;" cellspacing="0">
               <tr align="center" valign="center">
                    <td style="padding: 2em;"><div id="f1" style="width: 40em; padding:0 0 1.5em 0; background-color:white; border-radius:10px; box-shadow: 10px 10px 8px rgb(0,0,0,.5);"></div></td>
                    <td style="padding: 2em;"><div id="f2" style="width: 40em; padding:0 0 1.5em 0; background-color:white; border-radius:10px; box-shadow: 10px 10px 8px rgb(0,0,0,.5);"></div></td>
               </tr>
               <tr align="center" valign="center">
                    <td colspan="2" style="padding: 2em;"><div id="f3" style="width: 40em; padding:0 0 1.5em 0; background-color:white; border-radius:10px; box-shadow: 10px 10px 8px rgb(0,0,0,.5);"></div></td>
               </tr>
               <tr align="center" valign="center">
                    <td style="padding: 2em;"><div id="f4" style="width: 40em; padding:0 0 1.5em 0; background-color:white; border-radius:10px; box-shadow: 10px 10px 8px rgb(0,0,0,.5);"></div></td>
                    <td style="padding: 2em;"><div id="f5" style="width: 40em; padding:0 0 1.5em 0; background-color:white; border-radius:10px; box-shadow: 10px 10px 8px rgb(0,0,0,.5);"></div></td>
               </tr>
          </table>
     </div>
</body>

<!-- backend -->

<?php  
     include 'config.php';
     $query = "SELECT f1, count(*) as number FROM poll GROUP BY f1";  
     $result = mysqli_query($con, $query);

     $query2 = "SELECT f2, count(*) as number FROM poll GROUP BY f2";  
     $result2 = mysqli_query($con, $query2);  

     $query3 = "SELECT f3, count(*) as number FROM poll GROUP BY f3";  
     $result3 = mysqli_query($con, $query3);

     $query4 = "SELECT f4, count(*) as number FROM poll GROUP BY f4";  
     $result4 = mysqli_query($con, $query4);

     $query5 = "SELECT f5, count(*) as number FROM poll GROUP BY f5";  
     $result5 = mysqli_query($con, $query5);  
?>  

<script type="text/javascript">  

     //for f1
     google.charts.load('current', {'packages':['corechart']});  
     google.charts.setOnLoadCallback(drawChart);  
     function drawChart()  
     {  
          var data = google.visualization.arrayToDataTable([  
               ['Feedback', 'Number'],  
               <?php  
               while($row = mysqli_fetch_array($result))  
               {  
                    echo "['".$row["f1"]."', ".$row["number"]."],";  
               }  
               ?>  
          ]);  
          var options = {  
               title: 'Quality of Accomodation',  
               pieHole: 0.4,
               height: 400,
               fontSize: 14,
               fontName: 'Poppins',
               backgroundColor: 'transparent',
               pieSliceBorderColor: '#000',
               //pieSliceTextStyle: {color: 'black'},
               slices: {
                    0: { color: '#cad2c5' },
                    1: { color: '#84a98c' },
                    2: { color: '#52796f' },
                    3: { color: '#354f52' },
                    4: { color: '#2f3e46' },
               },
               chartArea: { width: '450', height: '400', top: '20%', },
          }; 
          var chart = new google.visualization.PieChart(document.getElementById('f1'));  
          chart.draw(data, options);  
     }

     //for f2
     google.charts.load('current', {'packages':['corechart']});  
     google.charts.setOnLoadCallback(drawChart2);  
     function drawChart2()  
     {  
          var data = google.visualization.arrayToDataTable([  
               ['Feedback', 'Number'],  
               <?php  
               while($row = mysqli_fetch_array($result2))  
               {  
                    echo "['".$row["f2"]."', ".$row["number"]."],";  
               }  
               ?>  
          ]);  
          var options = {  
               title: 'Quality of Assistance Provided',  
               pieHole: 0.4,
               height: 400,
               fontSize: 14,
               fontName: 'Poppins',
               backgroundColor: 'transparent',
               pieSliceBorderColor: '#000',
               slices: {
                    0: { color: '#cad2c5' },
                    1: { color: '#84a98c' },
                    2: { color: '#52796f' },
                    3: { color: '#354f52' },
                    4: { color: '#2f3e46' },
               },
               chartArea: { width: '450', height: '400', top: '20%',  },
          };  
          var chart = new google.visualization.PieChart(document.getElementById('f2'));  
          chart.draw(data, options);  
     }

     //for f3
     google.charts.load('current', {'packages':['corechart']});  
     google.charts.setOnLoadCallback(drawChart3);  
     function drawChart3()  
     {  
          var data = google.visualization.arrayToDataTable([  
               ['Feedback', 'Number'],  
               <?php  
               while($row = mysqli_fetch_array($result3))  
               {  
                    echo "['".$row["f3"]."', ".$row["number"]."],";  
               }  
               ?>  
          ]);  
          var options = {  
               title: 'Courtesy of Staff',  
               pieHole: 0.4,
               height: 400,
               fontSize: 14,
               fontName: 'Poppins',
               backgroundColor: 'transparent',
               pieSliceBorderColor: '#000',
               slices: {
                    0: { color: '#cad2c5' },
                    1: { color: '#84a98c' },
                    2: { color: '#52796f' },
                    3: { color: '#354f52' },
                    4: { color: '#2f3e46' },
               },
               chartArea: { width: '450', height: '400', top: '20%', },
          };  
          var chart = new google.visualization.PieChart(document.getElementById('f3'));  
          chart.draw(data, options);  
     }

     //for f4
     google.charts.load('current', {'packages':['corechart']});  
     google.charts.setOnLoadCallback(drawChart4);  
     function drawChart4()  
     {  
          var data = google.visualization.arrayToDataTable([  
               ['Feedback', 'Number'],  
               <?php  
               while($row = mysqli_fetch_array($result4))  
               {  
                    echo "['".$row["f4"]."', ".$row["number"]."],";  
               }  
               ?>  
          ]);  
          var options = {  
               title: 'Responsiveness',  
               pieHole: 0.4,
               height: 400,
               fontSize: 14,
               fontName: 'Poppins',
               backgroundColor: 'transparent',
               pieSliceBorderColor: '#000',
               slices: {
                    0: { color: '#cad2c5' },
                    1: { color: '#84a98c' },
                    2: { color: '#52796f' },
                    3: { color: '#354f52' },
                    4: { color: '#2f3e46' },
               },
               chartArea: { width: '450', height: '400', top: '20%', },
          };  
          var chart = new google.visualization.PieChart(document.getElementById('f4'));  
          chart.draw(data, options);  
     }

     //for f5
     google.charts.load('current', {'packages':['corechart']});  
     google.charts.setOnLoadCallback(drawChart5);  
     function drawChart5()  
     {  
          var data = google.visualization.arrayToDataTable([  
               ['Feedback', 'Number'],  
               <?php  
               while($row = mysqli_fetch_array($result5))  
               {  
                    echo "['".$row["f5"]."', ".$row["number"]."],";  
               }  
               ?>  
          ]);  
          var options = {  
               title: 'Preparedness',  
               pieHole: 0.4,
               height: 400,
               fontSize: 14,
               fontName: 'Poppins',
               backgroundColor: 'transparent',
               pieSliceBorderColor: '#000',
               slices: {
                    0: { color: '#cad2c5' },
                    1: { color: '#84a98c' },
                    2: { color: '#52796f' },
                    3: { color: '#354f52' },
                    4: { color: '#2f3e46' },
               },
               chartArea: { width: '450', height: '400', top: '20%', },
          };  
          var chart = new google.visualization.PieChart(document.getElementById('f5'));  
          chart.draw(data, options);  
     }

     $(window).resize(function(){
          drawChart();
          drawChart2();
          drawChart3();
          drawChart4();
          drawChart5();
     });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>  