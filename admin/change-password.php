<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['csmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$adminid=$_SESSION['csmsaid'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query=mysqli_query($con,"select ID from tbladmin where ID='$adminid' and   Password='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update tbladmin set Password='$newpassword' where ID='$adminid'");
$msg= "Ваш пароль успешно изменён"; 
} else {

$msg="Ваш текущий пароль неверен";
}

}

  ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Изменить пароль | Система управления автосалоном</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('Новый пароль и подтверждение пароля не совпадают');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
  <!--header start-->
  <?php include_once('includes/header.php');?>
  <!--header end-->

  <!--sidebar start-->
   <?php include_once('includes/sidebar.php');?>
  <!--sidebar end-->

  <!--main content start-->
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Изменить пароль</h3>
    <ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="dashboard.php">Главная</a></li>
    <li><i class="icon_document_alt"></i>Изменить пароль</li>
    <li><i class="fa fa-files-o"></i>Изменить пароль</li>
    </ol>
    </div>
  </div>
  <!-- Form validations -->
  <div class="row">
    <div class="col-lg-12">
    <section class="panel">
    <header class="panel-heading">
    Изменить пароль
    </header>
    
    </section>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
    <section class="panel">
     
    <div class="panel-body">
    <div class="form">
      <p style="font-size:16px; color:red" align="center"> <?php if($msg){
  echo $msg;
  }  ?> </p>                  

  <?php
  
$adminid=$_SESSION['csmsaid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
      <form class="form-validate form-horizontal" method="post" action="" name="changepassword" onsubmit="return checkpass();">
      <div class="form-group ">
      <label for="fullname" class="control-label col-lg-2">Текущий пароль <span class="required">*</span></label>
      <div class="col-lg-10">
      <input type="password" name="currentpassword" class=" form-control" required= "true" value="">
      </div>
      </div>
      <div class="form-group ">
      <label for="address" class="control-label col-lg-2">Новый пароль <span class="required">*</span></label>
      <div class="col-lg-10">
      <input type="password" name="newpassword" class="form-control" value="">
      </div>
      </div>
      <div class="form-group ">
      <label for="username" class="control-label col-lg-2">Подтвердите пароль <span class="required">*</span></label>
      <div class="col-lg-10">
      <input type="password" name="confirmpassword" class="form-control" value="">
      </div>
      </div>
       <?php } ?>
      <div class="form-group">
      <div class="col-lg-offset-2 col-lg-10">
      <button class="btn btn-primary" type="submit" name="submit">Изменить</button>
       
      </div>
      </div>
      </form>
    </div>
    </div>
    </section>
    </div>
  </div>
  <!-- page end-->
  </section>
  </section>
    <!--main content end-->
     <?php include_once('includes/footer.php');?>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
<?php }  ?>