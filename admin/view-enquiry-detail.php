<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['csmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status='Ответ дан';
     
   $query=mysqli_query($con, "update  tblenquiry set AdminRemark='$remark',Status='$status' where ID='$cid'");
    if ($query) {
    $msg="Все примечания обновлены.";
  }
  else
    {
      $msg="Произошла ошибка. Попробуйте снова.";
    }
} 
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Просмотр запроса | Система управления автосалоном</title>

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
      <h3 class="page-header"><i class="fa fa-table"></i>Просмотр запроса</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="dashboard.php">Главная</a></li>
        <li><i class="fa fa-table"></i>Запросы</li>
        <li><i class="fa fa-th-list"></i>Просмотр запроса</li>
      </ol>
      </div>
    </div>
    <!-- page start-->
    <div class="row">
      <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
        Детали запроса
        </header>
        <p style="font-size:16px; color:red" align="center"> <?php if($msg){
  echo $msg;
  }  ?> </p>

  <?php
 $cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblenquiry join tblcars on tblcars.ID=tblenquiry.CardId where tblenquiry.ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
         <table border="1" class="table table-bordered mg-b-0">
   
   <tr>
                <th>ФИО</th>
                   <td><?php  echo $row['FullName'];?></td>
                   </tr>  
                   <tr>
                <th>Название автомобиля</th>
                   <td><?php  echo $row['CarName'];?></td>
                   </tr>                           
<tr>
                <th>Электронная почта</th>
                   <td><?php  echo $row['Email'];?></td>
                   </tr>
                 
                <tr>
                <th>Номер телефона</th>
                   <td><?php  echo $row['MobileNumber'];?></td>
                   </tr>
                   <tr>
                  <th>Сообщение</th>
                    <td><?php  echo $row['Message'];?></td>
                  </tr>
                    <tr>  
                     <th>Дата запроса</th>
                    <td><?php  echo $row['EnquiryDate'];?></td>
                  </tr>


<tr>
  <tr>
  <th>Статус</th>
  <td> <?php  
if($row['Status']=="")
{
  echo "Запрос без ответа";
}
if($row['Status']=="Answer")
{
  echo "Запрос с ответом";
}

   ;?></td>
  </tr>
</table>

<table class="table mb-0">

<?php if($row['Status']==""){ ?>


<form name="submit" method="post"> 

<tr>
  <th>Примечание :</th>
  <td>
  <textarea name="remark" placeholder="" rows="6" cols="14" class="form-control wd-450" required="true"></textarea></td>
  </tr>

  <tr align="center">
  <td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Обновить</button></td>
  </tr>
  </form>
<?php } else { ?>
  <table border="1" class="table table-bordered mg-b-0">
  <tr>
  <th>Примечание администратора</th>
  <td><?php echo $row['AdminRemark']; ?></td>
  </tr>

<tr>
<th>Дата примечания</th>
<td><?php echo $row['AdminRemarkdate']; ?>  </td></tr>
<?php } ?>
</table>

<?php } ?>
      </section>
      </table>
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
