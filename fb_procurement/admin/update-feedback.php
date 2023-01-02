<?php  
include 'config.php';
$id = $_GET['updateid'];
$sql="Select * from `poll` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$stu_num = $row['stu_num'];
$purpose_of_visit = $row['purpose_of_visit'];
$attending_staff = $row['attending_staff'];

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stu_num = $_POST['stu_num'];
    $purpose_of_visit = $_POST['purpose_of_visit'];
    $attending_staff = $_POST['attending_staff'];

    $sql="update `poll` set id=$id, name='$name', email='$email', stu_num=$stu_num, 
    purpose_of_visit='$purpose_of_visit', attending_staff='$attending_staff' where id=$id";
    $result=mysqli_query($con, $sql);
    
    if($result){
        echo '<script>alert("Updated successfuly."); history.go(-2);</script>';
        /*header("location:mainpage.php");*/
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://mysite/style.css?id=1234">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Update Feedback</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@800&display=swap");

        @media screen and (max-width: 800px) {
          body {
            width: 100%;
          }
          body .main-div .update-body {
            padding-top: 20%;/* The width is 100%, when the viewport is 800px or smaller */
          }
          input[type=text], input[type="email"]{
            padding: 1em;
            color: #000;
            font-size:0.85em;
            outline: none;
            border: 1px solid lightgray;
            border-radius: 5px;
            letter-spacing: 1.5px;
        }
        tr td input[type=text] {
          width: 90vw;
          position: flex;
          justify-content: center;
        }
        tr td input[type="email"] {
          width: 90vw;
          position: flex;
          justify-content: center;
        }
      }
        body {
          background-image: url(images/main-bg.png);
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: fixed;
        }

        * {
            font-family: 'Poppins', 'Segoe UI', 'Helvetica', sans-serif;
            font-size: 15px;
        }

        .main-div {
          height: 100vh;
          position: fixed;
          overflow-y: scroll;
          overflow-x: clip;
          width: 100%;
          min-width: 100%;
          left: 0%;
          padding: 0;
        }

        .update-body {
        width: 100vw;
        min-width: 100vw;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        } 

        ul li {
        list-style-type: none;
        }

        .additional_info_area {
            display: inline-block;
            padding: 0;
            margin-top: 3vh; 
            width: 100%;
            min-width: 100vw;
            overflow-x: hidden;
        }

        ::-webkit-datetime-edit-text { color: gray; }
        ::-webkit-datetime-edit-month-field { color: gray; }
        ::-webkit-datetime-edit-day-field { color: gray; }
        ::-webkit-datetime-edit-year-field { color: gray; }

        input[type=text], input[type="email"]{
            padding: 1em;
            color: #000;
            font-size:0.85em;
            outline: none;
            border: 1px solid lightgray;
            border-radius: 5px;
            letter-spacing: 1.5px;
            width: 200px;
        }

        .other_inputs_area {
            display: block; 
            width: 100vw;
            justify-content: space-around; 
            padding-top: 1vh;
        }

        .update-btn2 {
        width: 9.5em;
        outline: none; 
        border: none;
        cursor: pointer;
        color: #1B651B;
        font-size:0.85em;
        font-weight: 800;
        padding: 1em 0 0.9em 0;
        border-radius: 5px;
        background: #FEB04D;
        margin-top: .5%;
        }

        .update-btn2:hover {
        color: #FEB04D;
        background: #1B651B;
        transition: all 0.4s;
        }

        .cancel-btn2 {
        width: 9.5em;
        outline: none; 
        border: none;
        cursor: pointer;
        color: #FEB04D;
        font-size:0.85em;
        font-weight: 800;
        padding: 1em 0 0.9em 0;
        border-radius: 5px;
        background: maroon;
        margin-top: .5%;
        }

        .cancel-btn2:hover{
        color: #Fff;
        background: black;
        transition: all 0.4s;
        }

        .navbar {
        position: absolute;
        top: 2%;
        left: 50%;
        transform: translate(-50%, -2%);
        z-index: 10;
        }

        .socialIcons {
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .socialIcons a {
        text-align: center;
        margin: 0 1em;
        }

        .socialIcons a:hover {
          opacity: 40%;
          cursor: pointer;
        }

    </style>
    </head>
    <body>
    <div class="navbar">
      <img src="images/cvsu-logo02.png" alt="" class="cvsu-logo">
      <div class="socialIcons">
        <a href="https://www.facebook.com/CaviteStateU" target="_blank"><img src="images/Facebook.svg" alt="" srcset=""></a>
          <a href="https://www.youtube.com/channel/UC6p5srphejusQzaulrxmtow" target="_blank"><img src="images/Youtube.svg" alt="" srcset=""></a>
          <a href="https://plus.google.com/+CaviteStateUniversityMainCampus" target="_blank"><img src="images/Google.svg" alt="" srcset=""></a>
      </div>
    </div>
    <div class="main-div" style="overflow-y: hidden;">
    <form method="post" class="update-body">
            <table class="additional_info_area">
              <tr class="other_inputs_area"  align="center" valign="center">
                <center>
                  <td style="display: inline-block; padding: 0 .5em 0 .5em;">
                      <p style="text-align: left;"> &nbspFull Name <br>
                        <input type="text" name="name" autocomplete="off" value="<?php echo $name ?>" />
                      </p>
                  </td>
                  <td style="display: inline-block; padding: 0 .5em 0 .5em;">
                      <p style="text-align: left;"> &nbspEmail Address <br>
                          <input type="email" name="email" autocomplete="off" value="<?php echo $email ?>" />
                      </p>
                  </td>
                  <td style="display: inline-block; padding: 0 .5em 0 .5em;">
                      <p style="text-align: left;"> &nbspStudent Number <br>
                          <input type="text" maxlength="9" minlength="9" name="stu_num" autocomplete="off" value="<?php echo $stu_num ?>" />
                      </p> 
                  </td>
                </center>
              </tr>
              <!-- &nbsp;&nbsp;&nbsp; -->
              <tr class="other_inputs_area"  align="center" valign="center">
                <center>
                  <td style="display: inline-block; padding: 0 .5em 0 .5em;">
                      <p style="text-align: left;"> &nbspPurpose of Visit <br>
                          <input type="text" name="purpose_of_visit" autocomplete="off" value="<?php echo $purpose_of_visit ?>"/>
                      </p>
                  </td>
                  <td style="display: inline-block; padding: 0 .5em 0 .5em;">
                      <p style="text-align: left;"> &nbspAttending Staff <br>
                          <input type="text" name="attending_staff" autocomplete="off" value="<?php echo $attending_staff ?>" />
                      </p>
                  </td>
                </center>
              </tr>
              <tr align="center" valign="center">
                <center>
                  <td style="padding-top: 20px;" >
                  <input type="submit" value="Update" name="submit" onclick="return confirm('Update this feedback?')" class="update-btn2" style="margin: 0 .75em 0 .75em;"/>
                  <input type="button" value="Cancel" onclick="window.location.href='collection.php'" class="cancel-btn2" style="margin: 0 .75em 0 .75em;"/>
                  </td>
                </center>
              </tr>
            </table>
    </form>
    </div>
    </body>
</html>