<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <?php
     require ('db.php');
     session_start();
     if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '" . md5($password) . "'";
        $result = mysqli_query($con,$query) or die("Connection failed: " . mysqli_connect_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1){
            $_SESSION['username'] = $username;
            header("Location: admin.php");
        } else {
        echo "<div class='form'>
              <h3>Incorrect Username/password.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
              </div>";
        }
    }else{   
    ?>
     <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="register.php">Don't have an account ? Sign up here</a></p>
  </form>
  <?php
    } 
  ?>
</body>
</html>