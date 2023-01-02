<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CvSU OSFS - Cashier's Office</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="#">
  <link rel="stylesheet" type="text/css" href="http://mysite/style.css?id=1234">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body style="background-image: url(images/main-bg.png); overflow-x:hidden;">
  <form action = "#" method="POST" hidden> 
    <div class="w3-show-inline-block">
      <div class="w3-bar">
        <center>
          <input type="submit" value="Download as PDF" name="logout" class="w3-btn w3-black">
        </center>
      </div>
    </div>  
  </form>
  <form action = "logout.php" method="POST" hidden> 
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

  <!-- navbar -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: black; font-family: 'Poppins'; height:8.5%;" >
    <a class="navbar-brand" href="summary.php"><img src="images/logo.png" width="40" height="35" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-weight: 700;">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="summary.php">Summary&nbsp </a>
        </li>
        <li class="nav-item active">
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
          <a class="nav-link disabled" href="#">&nbsp&nbsp&nbspCashier's Office Admin Panel&nbsp&nbsp</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- end of navbar -->

  <!-- fetching from db -->

  <?php 
    session_start();
    require 'config.php';
      if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];
        $result = mysqli_query($con,"SELECT * FROM poll");
          echo "<center><h1 style='margin-top:10%; margin-bottom:2.5%; font-size: 1.5em; font-weight:800;'>Feedback Collection</h1></center>";
          echo "<table border='1' id='respondents'>
          <tr>
          <th style='width:4em;'>#</th>
          <th style='width:8em;'>Date</th>
          <th style='width:8em;'>Name</th>
          <th style='width:8em;'>Email Address</th>
          <th>Student Number</th>
          <th>Purpose of Visit</th>
          <th>Attending Staff</th>
          <th>Courtesy</th>
          <th>Service quality</th>
          <th>Service timeliness</th>
          <th>Service efficiency</th>
          <th>Cleanliness and comfort</th>
          <th style='width:10em;'>Comments / Suggestions</th>
          <th>Action</th>
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
            echo "<td align='center' valign='center'> 
                    <a href='update-feedback.php?updateid=".$id."'>
                      <button class='update-btn' />
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='white' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                          <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                          <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                        </svg>
                      </button>
                    </a><br><br>
                    <a href='delete-feedback.php?deleteid=".$id."' class='confirmation' >
                      <button class='delete-btn' />
                        <svg xmlns='http://www.w3.org/2000/svg' width='18' height='19' fill='white' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                          <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                      </button>
                    </a>
                  </td>";
            echo "</tr>";
            }
            echo "<tr><td colspan='14' style='border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; pointer-events: none;'></td></tr>";
          echo "</table>";                                                                    
      }
      else {
      //header("Location: index.html");
      }
  ?>
  
  <script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Delete this feedback?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
  </script>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>

</html>
