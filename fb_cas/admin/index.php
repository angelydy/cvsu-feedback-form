<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Cache-control" content="no-cache">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>CvSU OSFS - CAS Admin Login</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="http://mysite/style.css?id=1234">
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body style="font-family: 'Poppins', 'Segoe UI', sans-serif;">

  <div class="bgdiv" style="background-image: url(images/main-bg.png);">
  </div>
  <div class="log-form">

    <h2><a href="/fb_system"><img src="images/logo.png" alt="" class="index-logo"></a>&nbsp Login to your account</h2>
    <form action="checklogin.php" method="POST">
      <input type="email" title="Input admin email." placeholder="Email Address" name="email" autocomplete="off" />
      <input type="password" title="Input admin password." placeholder="Password" name="password" autocomplete="off" />
      <center><input type="submit" name="login" value="Login" class="login-btn"></center>
    </form>
  </div>
  <!--end log form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>
