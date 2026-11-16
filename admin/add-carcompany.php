<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['csmsaid']==0)) {
  header('location:logout.php');
  }
  else{

if(isset($_POST['submit']))
  {
    $aid=$_SESSION['csmsaid'];
    $companyname=$_POST['cname'];
  
   $logo=$_FILES["images"]["name"];
     $extension = substr($logo,strlen($logo)-4,strlen($logo));
// Разрешённые расширения
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Проверка расширения. Функция in_array() ищет значение в массиве.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Недопустимый формат. Разрешены только jpg / jpeg/ png /gif');</script>";
}
else
{
// Генерация уникального имени файла
$comlogo=md5($logo).$extension;
     move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$comlogo);
    $query=mysqli_query($con, "insert into tblcompany(CompanyName,CompanyImage) value('$companyname','$comlogo')");
    if ($query) {
echo "<script>alert('Данные о компании успешно добавлены.');</script>";
echo "<script>window.location.href ='manage-carcompany.php'</script>";
  }
  else
    {
      $msg="Произошла ошибка. Пожалуйста, попробуйте еще раз.";
    }

  }

}
  ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Автокомпания | Система управления автосалоном</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

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
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Добавить информацию о компании</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Главная</a></li>
              <li><i class="icon_document_alt"></i>Компания</li>
              <li><i class="fa fa-file-text-o"></i>Добавить информацию о компании</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
             Добавить информацию о компании
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                  <p style="font-size:16px; color:red" align="left"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Название компании</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cname" name="cname"  type="text" required="true">
                    </div>
                  </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Логотип компании</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="images" id="images" value="" required="true">
                    </div>
                  </div>
                 <p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Отправить</button></p>
                </form>
              </div>
            </section>
            
          </div>
        </div>
        <!-- Basic Forms & Horizontal Forms-->

        
         
      
        <!-- page end-->
      </section>
    </section>
 <?php include_once('includes/footer.php');?>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
<?php  } ?>