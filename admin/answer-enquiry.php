<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['csmsaid']==0)) {
  header('location:logout.php');
  } else{

if($_GET['del']){
$enqid=$_GET['id'];
mysqli_query($con,"delete from tblenquiry where ID ='$enqid'");
echo "<script>alert('Данные удалены');</script>";
echo "<script>window.location.href='answer-enquiry.php'</script>";
          }

  ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Ответ на запрос | Система управления автосалоном</title>

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

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
  <!--header start-->
  <?php include_once('includes/header.php');?>
  <!--header end-->

  <!--sidebar start-->
  <?php include_once('includes/sidebar.php');?>

  <!--main content start-->
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> Ответ на запрос</h3>
    <ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="dashboard.php">Главная</a></li>
    <li><i class="fa fa-table"></i>Запрос</li>
    <li><i class="fa fa-th-list"></i>Ответ на запрос</li>
    </ol>
    </div>
  </div>
    <!-- page start-->
    <div class="row">
      <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
      Ответ на запрос
        </header>
      <table class="table table-bordered">
      <thead>
        <tr>
          <tr>
      <th>№</th>
      <th>Номер запроса</th>
      <th>ФИО</th>
      <th>Номер телефона</th>
      <th>Действие</th>
      </tr>
        </tr>
        </thead>
         <?php
    $ret=mysqli_query($con,"select *from  tblenquiry where Status='Answer'");
    $count=mysqli_num_rows($ret);
    $cnt=1;
    if($count>0){
    while ($row=mysqli_fetch_array($ret)) {
    ?>
        
      <tr>
      <td><?php echo $cnt;?></td>
      <td><?php  echo $row['EnquiryNumber'];?></td>
      <td><?php  echo $row['FullName'];?></td>
      <td><?php  echo $row['MobileNumber'];?></td>
      <td>
        <a href="view-enquiry-detail.php?viewid=<?php echo $row['ID'];?>" class="btn btn-primary">Подробнее</a>
        <a href="answer-enquiry.php?id=<?php echo $row['ID']?>&del=delete" onClick="return confirm('Вы уверены, что хотите удалить?')" class="btn btn-danger">Удалить</a>
      </td>
      </tr>
      <?php 
    $cnt=$cnt+1;
    } } else {?>
    <tr>
    <th colspan="5" style="color:red; font-size:16px;"> Записей не найдено</th>
    </tr>
    <?php } ?>  
        </table>
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
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
<?php }  ?>