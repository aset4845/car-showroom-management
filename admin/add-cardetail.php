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
    $carname=$_POST['cname'];
    $ctype=$_POST['ctype'];
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
    $cbcolor=$_POST['cbcolor'];
    $cmodel=$_POST['cmodel'];
    $cbodytype=$_POST['cbodytype'];
    // Главное изображение
    $pic=$_FILES["images"]["name"];
    $extension = substr($pic,strlen($pic)-4,strlen($pic));
    // Изображение 1
    $pic1=$_FILES["image1"]["name"];
    $extension1 = substr($pic1,strlen($pic1)-4,strlen($pic1));
    // Изображение 2
    $pic2=$_FILES["image2"]["name"];
    $extension2 = substr($pic2,strlen($pic2)-4,strlen($pic2));
    // Изображение 3
    $pic3=$_FILES["image3"]["name"];
    $extension3 = substr($pic3,strlen($pic3)-4,strlen($pic3));
    // Изображение 4
    $pic4=$_FILES["image4"]["name"];
    $extension4 = substr($pic4,strlen($pic4)-4,strlen($pic4));

    // Разрешённые расширения
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    // Проверка расширений
    if(!in_array($extension,$allowed_extensions))
    {
      echo "<script>alert('Главное изображение автомобиля имеет недопустимый формат. Разрешены только jpg / jpeg / png / gif');</script>";
    }
    if(!in_array($extension1,$allowed_extensions))
    {
      echo "<script>alert('1-е изображение автомобиля имеет недопустимый формат. Разрешены только jpg / jpeg / png / gif');</script>";
    }
    if(!in_array($extension2,$allowed_extensions))
    {
      echo "<script>alert('2-е изображение автомобиля имеет недопустимый формат. Разрешены только jpg / jpeg / png / gif');</script>";
    }
    if(!in_array($extension3,$allowed_extensions))
    {
      echo "<script>alert('3-е изображение автомобиля имеет недопустимый формат. Разрешены только jpg / jpeg / png / gif');</script>";
    }
    if(!in_array($extension4,$allowed_extensions))
    {
      echo "<script>alert('4-е изображение автомобиля имеет недопустимый формат. Разрешены только jpg / jpeg / png / gif');</script>";
    }
    else
    {
      // Переименование изображений
      $carpic=md5($pic).time().$extension;
      $carpic1=md5($pic1).time().$extension1;
      $carpic2=md5($pic2).time().$extension2;
      $carpic3=md5($pic3).time().$extension3;
      $carpic4=md5($pic4).time().$extension4;
      move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$carpic);
      move_uploaded_file($_FILES["image1"]["tmp_name"],"images/".$carpic1);
      move_uploaded_file($_FILES["image2"]["tmp_name"],"images/".$carpic2);
      move_uploaded_file($_FILES["image3"]["tmp_name"],"images/".$carpic3);
      move_uploaded_file($_FILES["image4"]["tmp_name"],"images/".$carpic4);
      $query=mysqli_query($con, "insert into tblcars(CarName,CarImage, CarType, CarCompany, CarPrice, CarNumber,CarLength,CarWidth,CarHeight,Seatingcapacity,FuelType,Displacement,MaxPower,MaxTorque,Milage,TransmissionType,NoofGear,AirCondition,CarPowerwindow,CarCenterlocking,CarABS,AirBags,FrontType,RearType,CarDescription,FuelCapacity,BootSpace,FogLamps,EngineDisplay,CentralLocking,CarBodycolor,CarBodytype,CarModel,CarImage1,CarImage2,CarImage3,CarImage4) value('$carname','$carpic','$ctype','$ccompany','$cprice','$cnumber','$clength','$cwidth','$cheight','$cscapacity','$fueltype','$cdisplacement','$cmpower','$cmtorque','$cmilage','$ctransmission','$cnogear','$carac','$cpwindow','$cclocking','$carabs','$cairbags','$carftype','$carrtype','$cdescription','$cfuelcap','$cbootspa','$cfoglamps','$cengdis','$ccenlock','$cbcolor','$cbodytype','$cmodel','$carpic1','$carpic2','$carpic3','$carpic4')");
      if ($query) {
        echo "<script>alert('Информация об автомобиле успешно добавлена.');</script>";
        echo "<script>window.location.href ='manage-cardetail.php'</script>";
      }
      else
      {
        $msg='Произошла ошибка. Пожалуйста, попробуйте еще раз.';
      }
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

  <title>Информация об автомобиле | Система управления автосалоном</title>

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
    <section id="main-content" style="color:#000">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Добавить информацию об автомобиле</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Главная</a></li>
              <li><i class="icon_document_alt"></i>Автомобиль</li>
              <li><i class="fa fa-file-text-o"></i>Информация об автомобиле</li>
            </ol>
          </div>
        </div>
        <div class="row">      <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Добавить информацию об автомобиле
              </header>
              <div class="panel-body">
          
                  <p style="font-size:16px; color:red" align="left"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Название автомобиля</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cname" name="cname"  type="text" required="true" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Главное изображение автомобиля</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="images" id="images" value="" required="true">
                    </div>
                  </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">1-е изображение автомобиля</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" name="image1" id="image1" value="" required="true">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">2-е изображение автомобиля</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" name="image2" id="image2" value="" required="true">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">3-е изображение автомобиля</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" name="image3" id="image3" value="" required="true">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">4-е изображение автомобиля</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" name="image4" id="image4" value="" required="true">
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Тип автомобиля</label>
      <div class="col-sm-10">
        <input class="form-control" id="ctype" name="ctype" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Цвет кузова</label>
      <div class="col-sm-10">
        <input class="form-control" id="cbcolor" name="cbcolor" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Модель автомобиля</label>
      <div class="col-sm-10">
        <input class="form-control" id="cmodel" name="cmodel" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Тип кузова</label>
      <div class="col-sm-10">
        <input class="form-control" id="cbodytype" name="cbodytype" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Компания автомобиля</label>
      <div class="col-sm-10">
        <select class="form-control m-bot15" name="ccompany" id="ccompany">
          <option value="">Выберите компанию</option>
          <?php $query=mysqli_query($con,"select * from tblcompany");
          while($row=mysqli_fetch_array($query))
          {
          ?>    
          <option value="<?php echo $row['CompanyName'];?>"><?php echo $row['CompanyName'];?></option>
          <?php } ?> 
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Цена автомобиля</label>
      <div class="col-sm-10">
        <input class="form-control" id="cprice" name="cprice" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Номер автомобиля</label>
      <div class="col-sm-10">
        <input class="form-control" id="cnumber" name="cnumber" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Длина автомобиля</label>
      <div class="col-sm-10">
        <input class="form-control" id="clength" name="clength" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Ширина автомобиля</label>
      <div class="col-sm-10">
        <input class="form-control" id="cwidth" name="cwidth" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Высота автомобиля</label>
      <div class="col-sm-10">
        <input class="form-control" id="cheight" name="cheight" type="text" required="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Количество мест</label>
      <div class="col-sm-10">
        <input class="form-control" id="cscapacity" name="cscapacity"  type="text" required="true">
      </div>
    </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Тип топлива</label>
            <div class="col-sm-10">
              <select name="fueltype" class="form-control" required='true'>
              <option value="Fuel Type">Выберите тип топлива</option>
              <option value="Gasoline">Бензин</option>
              <option value="Diesel">Дизель</option>
              <option value="Liquid Petroleum">Сжиженный нефтяной газ</option>
              <option value="Compressed Natural Gas">Сжатый природный газ (CNG)</option>
              <option value="Ethanol">Этанол</option>
              <option value="Biodiesel">Биодизель</option>
              </select>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Объем двигателя</label>
            <div class="col-sm-10">
              <input class="form-control " id="cdisplacement" type="text" name="cdisplacement" required="true">
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Максимальная мощность</label>
            <div class="col-sm-10">
              <input class="form-control " id="cmpower" type="text" name="cmpower" required="true">
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Максимальный крутящий момент</label>
            <div class="col-sm-10">
              <input class="form-control " id="cmtorque" type="text" name="cmtorque" required="true">
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Расход топлива</label>
            <div class="col-sm-10">
              <input class="form-control " id="cmilage" type="text" name="cmilage" required="true">
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Тип трансмиссии</label>
            <div class="col-sm-10">
              <select name="ctransmission" class="form-control" required='true'>
              <option value="Transmission Type">Выберите тип трансмиссии</option>
              <option value="Manual transmission">Механическая трансмиссия</option>
              <option value="Automatic transmission">Автоматическая трансмиссия</option>
              <option value="Continuously variable transmission">Вариатор (CVT)</option>
              <option value="Semi-automatic and dual-clutch transmissions">Полуавтоматическая и с двойным сцеплением</option>
              </select>
            </div>
            </div>
          </div>
          </section>
        </div>

        <div class="col-lg-6">
          <section class="panel">
          <div class="panel-body">

            <div class="form-group">
            <label class="col-sm-2 control-label">Количество передач</label>
            <div class="col-sm-10">
              <input class="form-control " id="cnogear" type="text" name="cnogear" required="true">
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 control-label">Кондиционер</label>
            <div class="col-sm-10">
              <label class="checkbox-inline">
              <input class="form-control " id="carac" type="radio" name="carac" value="Yes" required="true"/>Да</label>
              <label class="checkbox-inline">
              <input class="form-control " id="carac" type="radio" name="carac" value="No" required="true"/>Нет</label>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Электростеклоподъемники</label>
            <div class="col-sm-10">
              <input class="form-control " id="cpwindow" type="text" name="cpwindow" required="true">
            </div>
            </div>
                    <label class="col-sm-2 control-label">Центральный замок</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cclocking" type="text" name="cclocking" required="true">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Система ABS</label>
                    <div class="col-sm-10">
                      <label class="checkbox-inline">
                      <input class="form-control " id="carabs" type="radio" name="carabs" value="Да" required="true"/>Да</label>
                      <label class="checkbox-inline">
                      <input class="form-control " id="carabs" type="radio" name="carabs" value="Нет" required="true"/>Нет</label>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Подушки безопасности</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cairbags" type="text" name="cairbags" required="true">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Тип передней подвески</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="carftype" type="text" name="carftype" required="true">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Тип задней подвески</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="carrtype" type="text" name="carrtype" required="true">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Описание автомобиля</label>
                    <div class="col-sm-10">
                      <textarea class="form-control " id="cdescription" type="text" name="cdescription" rows="12" cols="4" required="true"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Объем топливного бака</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cfuelcap" type="text" name="cfuelcap" required="true">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Объем багажника</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cbootspa" type="text" name="cbootspa" required="true">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Противотуманные фары</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cfoglamps" type="text" name="cfoglamps" required="true">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Дисплей двигателя</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cengdis" type="text" name="cengdis" required="true">
                    </div>
                    </div>
                     <div class="form-group">
                    <label class="col-sm-2 control-label">Центральный замок (Central Locking)</label>
                    <div class="col-sm-10">
                       <label class="checkbox-inline">
                      <input class="form-control " id="ccenlock" type="radio" name="ccenlock" value="Да" required="true">Да</label>
                      <label class="checkbox-inline">
                      <input class="form-control " id="ccenlock" type="radio" name="ccenlock" value="Нет" required="true">Нет</label>
                    </div>
                    </div>

                  
                  
                    </div>
                  </section>
                  
                  </div>
                     <p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Отправить</button></p>
                    </form>
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