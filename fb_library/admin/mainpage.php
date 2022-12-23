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
          <button type="submit" name="logout" class="logout-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
              <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
        </button>
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
          echo "<b><h1 style='margin-left:1.5em; margin-top:3%; font-size: 1.3em;'>Library&nbsp |&nbsp Feedback Entries</h1></b>";
          echo "<table border='1' id='respondents'>
          <tr>
          <th style='width:5em;'>#</th>
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
                    <a href='delete-feedback.php?deleteid=".$id."' class='confirmation' >
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
  
  <script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure that you want to delete this feedback?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
  </script>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
</body>

</html>
