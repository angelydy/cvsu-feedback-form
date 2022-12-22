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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://mysite/style.css?id=1234">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Update Feedback Entries </title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@800&display=swap");

        body {
          background-image: url(/fb_library/admin/images/update_bg.png);
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: fixed;
        }

        * {
            font-family: 'Poppins', 'Segoe UI', 'Helvetica', sans-serif;
            font-size: 1vw;
            box-sizing: border-box;
        }

        ul li {
        list-style-type: none;
        }

        .additional_info_area {
            display: inline-block;
            padding: 0;
            margin-top: 3vh; 
            width: 100%; 
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
            width: 14vw;
            resize: none;
        }

        .other_inputs_area {
            display: block; 
            width: 100%; 
            justify-content: space-around; 
            padding-top: 1vh;
        }

        .update-btn2 {
        width:10em;
        min-width: 10em;
        outline: none; 
        border: none;
        cursor: pointer;
        color: #1B651B;
        font-size:0.85em;
        font-weight: 800;
        padding: 1em 0 0.9em 0;
        border-radius: 5px;
        background: #FEB04D;
        }

        .update-btn2:hover{
        color: #fff;
        background: #1B651B;
        transition: all 0.4s;
        }

        .update-body {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        } 

        .navbar {
        position: absolute;
        top: 2%;
        left: 50%;
        transform: translate(-50%, -2%);
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

    </style>
    </head>
    <body>
      <div class="navbar">
        <img src="/assets/cvsu-logo02.png" alt="" class="cvsu-logo">
        <div class="socialIcons">
          <a href="https://www.facebook.com/CaviteStateU" target="_blank"><img src="/assets/Facebook.svg" alt="" srcset=""></a>
            <a href="https://www.youtube.com/channel/UC6p5srphejusQzaulrxmtow" target="_blank"><img src="/assets/Youtube.svg" alt="" srcset=""></a>
            <a href="https://plus.google.com/+CaviteStateUniversityMainCampus" target="_blank"><img src="/assets/Google.svg" alt="" srcset=""></a>
        </div>
      </div>
    <form method="post" class="update-body">
            <ul class="additional_info_area" style="list-style-type: none;">
              <li class="other_inputs_area">
                <center>
                  <div style="display: inline-block; align-items: left;">
                      <p style="text-align: left;"> Full Name <br>
                        <input type="text" name="name" autocomplete="off" value="<?php echo $name ?>" />
                      </p>
                  </div>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> CvSU Email <br>
                          <input type="email" name="email" autocomplete="off" value="<?php echo $email ?>" />
                      </p>
                  </div>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> Student Number <br>
                          <input type="text" maxlength="9" minlength="9" name="stu_num" autocomplete="off" value="<?php echo $stu_num ?>" />
                      </p> 
                  </div>
                </center>
              </li>
              <!-- &nbsp;&nbsp;&nbsp; -->
              <li class="other_inputs_area">
                <center>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> Purpose of Visit <br>
                          <input type="text" name="purpose_of_visit" autocomplete="off" value="<?php echo $purpose_of_visit ?>"/>
                      </p>
                  </div>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> Attending Staff <br>
                          <input type="text" name="attending_staff" autocomplete="off" value="<?php echo $attending_staff ?>" />
                      </p>
                  </div>
                </center>
              </li>
              <li style="padding-top: 1.8vh;">
                <center>
                  <input type="submit" value="Update" name="submit" class="update-btn2"/>
                </center>
              </li>
            </ul>
    </form>
    </body>
</html>