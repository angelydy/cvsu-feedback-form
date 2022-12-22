<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CvSU Online Feedback - Library Summary</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="http://mysite/style.css?id=1234">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body style="background-color: whitesmoke;">
  <form action = "#" method="POST" hidden> 
    <div class="w3-show-inline-block">
      <div class="w3-bar">
        <center>
          <input type="submit" value="Download as PDF" name="logout" class="w3-btn w3-black">
        </center>
      </div>
    </div>  
  </form>
  <form action = "logout.php" method="POST"> 
    <div style="display: block; width: 100%;">
      <div class="logoutbtn-area">
          <input type="submit" value="Logout" name="logout" class="logout-btn" />
      </div>
    </div>  
  </form>

  <!-- fetching from db -->

  <?php 
    session_start();
    require 'config.php';
      if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];
        $result = mysqli_query($con,"SELECT * FROM poll");

          echo "<table border='1' id='respondents'>
          <tr>
          <th>#</th>
          <th>Date</th>
          <th>Name</th>
          <th>Email Address</th>
          <th>Student Number</th>
          <th>Purpose of Visit</th>
          <th>Attending Staff</th>
          <th>Accomodation</th>
          <th>Assistance Provided</th>
          <th>Courtesy of Staff</th>
          <th>Responsiveness</th>
          <th>Preparedness</th>
          <th>Comments/ Suggestions</th>
          <th>Operations</th>
          </tr>";

          while($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['date_of_visit'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['stu_num'] . "</td>";
            echo "<td>" . $row['purpose_of_visit'] . "</td>";
            echo "<td>" . $row['attending_staff'] . "</td>";
            echo "<td>" . $row['f1'] . "</td>";
            echo "<td>" . $row['f2'] . "</td>";
            echo "<td>" . $row['f3'] . "</td>";
            echo "<td>" . $row['f4'] . "</td>";
            echo "<td>" . $row['f5'] . "</td>";
            echo "<td>" . $row['suggestions'] . "</td>";
            echo "<td> 
                    <a href='update-feedback.php?updateid=".$id."'>
                      <button class='update-btn' />
                        Update
                      </button>
                    </a><br><br>
                    <a href='delete-feedback.php?deleteid=".$id."'>
                      <button class='delete-btn' />
                        Delete
                      </button>
                    </a>
                  </td>";
            echo "</tr>";
            }
          echo "</table>";                                                                    
      }
      else {
      //header("Location: index.html");
      }
  ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
</body>

</html>
