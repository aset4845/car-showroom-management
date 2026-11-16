<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];

        $query=mysqli_query($con,"select ID from tbladmin where  Email='$email' and MobileNumber='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
     header('location:reset-password.php');
    }
    else{
      $msg="Неверные данные. Попробуйте снова.";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="ru">

<head>
 
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Забыли пароль? | Система управления автосалоном</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="" method="post">
      <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="email" placeholder="Электронная почта" autofocus required="true">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="text" class="form-control" name="contactno" placeholder="Мобильный номер" required="true">
        </div>
        
                
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Восстановить</button>
        <span class="pull-right"> <a href="login.php"> Войти</a></span>
      </div>
    </form>
   
  </div>


</body>

</html>
