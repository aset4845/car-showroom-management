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
     $cid=$_GET['editid'];
    $eid=$_GET['editid'];
    $carname=$_POST['cname'];
    $ctype=$_POST['ctype'];
    $cmodel=$_POST['cmodel'];
    $btype=$_POST['cbodytype'];
    $ccompany=$_POST['ccompany'];
    $cprice=$_POST['cprice'];
    $cnumber=$_POST['cnumber'];
    $clength=$_POST['clength'];
    $cwidth=$_POST['cwidth'];
    $cheight=$_POST['cheight'];
    $images=$_POST['images'];

    $cscapacity=$_POST['cscapacity'];

    $fueltype=$_POST['fueltype'];
    $cdisplacement=$_POST['cdisplacement'];
    $cmpower=$_POST['cmpower'];
    $cmtorque=$_POST['cmtorque'];
    $cmilage=$_POST['cmilage'];
    $ctransmission=$_POST['ctransmission'];
    $cnogear=$_POST['cnogear'];
    $carac=$_POST['carac'];
     $cpwindow=$_POST['cpwindow'];
      $cclocking=$_POST['cclocking'];
     $carabs=$_POST['carabs'];
$cairbags=$_POST['cairbags'];
$carftype=$_POST['carftype'];
$carrtype=$_POST['carrtype'];
$cdescription=$_POST['cdescription'];
$cfuelcap=$_POST['cfuelcap'];
$cbootspa=$_POST['cbootspa'];
$cfoglamps=$_POST['cfoglamps'];
$cengdis=$_POST['cengdis'];
$ccenlock=$_POST['ccenlock'];
     
    
    $query=mysqli_query($con, "update tblcars set CarName='$carname', CarType='$ctype', CarCompany='$ccompany', CarPrice='$cprice', CarNumber='$cnumber',CarLength='$clength',CarWidth='$cwidth',CarHeight='$cheight',Seatingcapacity='$cscapacity',FuelType='$fueltype',Displacement='$cdisplacement',MaxPower='$cmpower',MaxTorque='$cmtorque',Milage='$cmilage',TransmissionType='$ctransmission',NoofGear='$cnogear',AirCondition='$carac',CarPowerwindow='$cpwindow',CarCenterlocking='$cclocking',CarABS='$carabs',AirBags='$cairbags',FrontType='$carftype',RearType='$carrtype',CarDescription='$cdescription',FuelCapacity='$cfuelcap',BootSpace='$cbootspa',FogLamps='$cfoglamps',EngineDisplay='$cengdis',CentralLocking='$ccenlock',CarModel='$cmodel',CarBodytype='$btype' where ID='$cid'");
    if ($query) {
    $msg="Данные об автомобиле обновлены.";
    }
    else
    {
      $msg="Произошла ошибка. Пожалуйста, попробуйте еще раз.";
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

  <title>Обновить автомобиль | Система управления автосалоном</title>

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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Обновить данные автомобиля</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="dashboard.php">Главная</a></li>
          <li><i class="icon_document_alt"></i>Данные автомобиля</li>
          <li><i class="fa fa-file-text-o"></i>Обновить данные автомобиля</li>
        </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
          Обновить данные автомобиля
          </header>
          <div class="panel-body">
          <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
            <p style="font-size:16px; color:red" align="left"> <?php if($msg){
    echo $msg;
    }  ?> </p>

    <?php
   $cid=$_GET['editid'];
  $ret=mysqli_query($con,"select * from tblcars where ID='$cid'");
  $cnt=1;
  while ($row=mysqli_fetch_array($ret)) {

  ?>
            <div class="form-group">
            <label class="col-sm-2 control-label">Название автомобиля</label>
            <div class="col-sm-10">
              <input class="form-control" id="cname" name="cname"  type="text" required="true" value="<?php echo $row['CarName'];?>">
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Основное изображение автомобиля</label>
            <div class="col-sm-10">
              <img src="images/<?php echo $row['CarImage'];?>" width="200" height="150" value="<?php  echo $row['CarImage'];?>"><a href="changeimage.php?editid=<?php echo $row['ID'];?>"> &nbsp; Изменить изображение</a>
            </div>
            </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">Изображение автомобиля 1</label>
    <div class="col-sm-10">
      <img src="images/<?php echo $row['CarImage1'];?>" width="200" height="150"><a href="changeimage1.php?editid=<?php echo $row['ID'];?>"> &nbsp; Изменить изображение</a>
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">Изображение автомобиля 2</label>
    <div class="col-sm-10">
      <img src="images/<?php echo $row['CarImage2'];?>" width="200" height="150">
      <a href="changeimage2.php?editid=<?php echo $row['ID'];?>"> &nbsp;Изменить изображение</a>
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">Изображение автомобиля 3</label>
    <div class="col-sm-10">
      <img src="images/<?php echo $row['CarImage3'];?>" width="200" height="150" ><a href="changeimage3.php?editid=<?php echo $row['ID'];?>"> &nbsp; Изменить изображение</a>
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">Изображение автомобиля 4</label>
    <div class="col-sm-10">
      <img src="images/<?php echo $row['CarImage4'];?>" width="200" height="150"><a href="changeimage4.php?editid=<?php echo $row['ID'];?>"> &nbsp; Изменить изображение</a>
    </div>
    </div>                  

    <div class="form-group">
    <label class="col-sm-2 control-label">Тип автомобиля</label>
    <div class="col-sm-10">
      <input class="form-control" id="ctype" name="ctype"  type="text" required="true" value="<?php echo $row['CarType'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Цвет кузова</label>
    <div class="col-sm-10">
      <input class="form-control" id="cbcolor" name="cbcolor"  type="text" required="true" value="<?php echo $row['CarBodycolor'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Модель автомобиля</label>
    <div class="col-sm-10">
      <input class="form-control" id="cmodel" name="cmodel"  type="text" required="true" value="<?php echo $row['CarModel'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Тип кузова</label>
    <div class="col-sm-10">
      <input class="form-control" id="cbodytype" name="cbodytype"  type="text" required="true" value="<?php echo $row['CarBodytype'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Компания</label>
    <div class="col-sm-10">
      <select class="form-control m-bot15" name="ccompany" id="ccompany">
      <option value="<?php echo $row['CarCompany'];?>"><?php echo $row['CarCompany'];?></option>
      <?php $query1=mysqli_query($con,"select * from tblcompany");
      while($row1=mysqli_fetch_array($query1))
      {
      ?>    
      <option value="<?php echo $row1['CompanyName'];?>"><?php echo $row1['CompanyName'];?></option>
      <?php } ?> 
      </select>
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Цена автомобиля</label>
    <div class="col-sm-10">
      <input class="form-control" id="cprice" name="cprice"  type="text" required="true" value="<?php echo $row['CarPrice'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Гос. номер</label>
    <div class="col-sm-10">
      <input class="form-control" id="cnumber" name="cnumber"  type="text" required="true" value="<?php echo $row['CarNumber'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Длина автомобиля</label>
    <div class="col-sm-10">
      <input class="form-control" id="clength" name="clength"  type="text" required="true" value="<?php echo $row['CarLength'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Ширина автомобиля</label>
    <div class="col-sm-10">
      <input class="form-control" id="cwidth" name="cwidth"  type="text" required="true" value="<?php echo $row['CarWidth'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Высота автомобиля</label>
    <div class="col-sm-10">
      <input class="form-control" id="cheight" name="cheight"  type="text" required="true" value="<?php echo $row['CarHeight'];?>">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Количество мест</label>
    <div class="col-sm-10">
      <input class="form-control" id="cscapacity" name="cscapacity"  type="text" required="true" value="<?php echo $row['Seatingcapacity'];?>">
    </div>
    </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Тип топлива</label>
    <div class="col-sm-10">
    <select name="fueltype" class="form-control" required='true'>
      <option value="<?php echo $row['FuelType'];?>"><?php echo $row['FuelType'];?></option>
    </select>
    </div>
  </div>
<div class="form-group">
  <label class="col-sm-2 control-label">Объем двигателя</label>
  <div class="col-sm-10">
    <input class="form-control " id="cdisplacement" type="text" name="cdisplacement" required="true" value="<?php echo $row['Displacement'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Максимальная мощность</label>
  <div class="col-sm-10">
    <input class="form-control " id="cmpower" type="text" name="cmpower" required="true" value="<?php echo $row['MaxPower'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Максимальный крутящий момент</label>
  <div class="col-sm-10">
    <input class="form-control " id="cmtorque" type="text" name="cmtorque" required="true" value="<?php echo $row['MaxTorque'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Расход топлива</label>
  <div class="col-sm-10">
    <input class="form-control " id="cmilage" type="text" name="cmilage" required="true" value="<?php echo $row['Milage'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Тип трансмиссии</label>
  <div class="col-sm-10">
    <select name="ctransmission" class="form-control" required='true'>
      <option value="<?php echo $row['TransmissionType'];?>"><?php echo $row['TransmissionType'];?></option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Количество передач</label>
  <div class="col-sm-10">
    <input class="form-control " id="cnogear" type="text" name="cnogear" required="true" value="<?php echo $row['NoofGear'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Кондиционер</label>
  <div class="col-sm-10">
    <label class="checkbox-inline">
      <?php  if($row['AirCondition']=="Yes"){ ?>
      <input type="radio" id="carac" name="carac" value="Yes" checked="true"> Да
      <input type="radio" id="carac" name="carac" value="No" > Нет
      <?php } else { ?>
      <input type="radio" id="carac" name="carac" value="Yes"> Да
      <input type="radio" id="carac" name="carac" value="No" checked="true"> Нет
      <?php } ?>
    </label>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Электростеклоподъемники</label>
  <div class="col-sm-10">
    <input class="form-control " id="cpwindow" type="text" name="cpwindow" required="true" value="<?php echo $row['CarPowerwindow'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Центральный замок</label>
  <div class="col-sm-10">
    <input class="form-control " id="cclocking" type="text" name="cclocking" required="true" value="<?php echo $row['CarCenterlocking'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Система ABS</label>
  <div class="col-sm-10">
    <label class="checkbox-inline">
      <?php  if($row['CarABS']=="Yes"){ ?>
      <input type="radio" id="carabs" name="carabs" value="Yes" checked="true"> Да
      <input type="radio" id="carabs" name="carabs" value="No" > Нет
      <?php } else { ?>
      <input type="radio" id="carabs" name="carabs" value="Yes"> Да
      <input type="radio" id="carabs" name="carabs" value="No" checked="true"> Нет
      <?php } ?>
    </label>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Подушки безопасности</label>
  <div class="col-sm-10">
    <input class="form-control " id="cairbags" type="text" name="cairbags" required="true" value="<?php echo $row['AirBags'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Тип передней подвески</label>
  <div class="col-sm-10">
    <input class="form-control " id="carftype" type="text" name="carftype" required="true" value="<?php echo $row['FrontType'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Тип задней подвески</label>
  <div class="col-sm-10">
    <input class="form-control " id="carrtype" type="text" name="carrtype" required="true" value="<?php echo $row['RearType'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Описание автомобиля</label>
  <div class="col-sm-10">
    <textarea class="form-control " id="cdescription" type="text" name="cdescription" rows="12" cols="4" required="true"><?php echo $row['CarDescription'];?></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Объем топливного бака</label>
  <div class="col-sm-10">
    <input class="form-control " id="cfuelcap" type="text" name="cfuelcap" required="true" value="<?php echo $row['FuelCapacity'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Объем багажника</label>
  <div class="col-sm-10">
    <input class="form-control " id="cbootspa" type="text" name="cbootspa" required="true" value="<?php echo $row['BootSpace'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Противотуманные фары</label>
  <div class="col-sm-10">
    <input class="form-control " id="cfoglamps" type="text" name="cfoglamps" required="true" value="<?php echo $row['FogLamps'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Дисплей двигателя</label>
  <div class="col-sm-10">
    <input class="form-control " id="cengdis" type="text" name="cengdis" required="true" value="<?php echo $row['EngineDisplay'];?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Центральный замок</label>
  <div class="col-sm-10">
    <label class="checkbox-inline">
      <?php  if($row['CentralLocking']=="Yes"){ ?>
      <input type="radio" id="ccenlock" name="ccenlock" value="Yes" checked="true"> Да
      <input type="radio" id="ccenlock" name="ccenlock" value="No" > Нет
      <?php } else { ?>
      <input type="radio" id="ccenlock" name="ccenlock" value="Yes"> Да
      <input type="radio" id="ccenlock" name="ccenlock" value="No" checked="true"> Нет
      <?php } ?>
    </label>
  </div>
</div>
<?php } ?>
<p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Обновить</button></p>
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