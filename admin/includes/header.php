  <?php
  session_start();
  error_reporting(0);
  include('includes/dbconnection.php');
  ?>
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Переключить навигацию" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
  <?php
  $adid=$_SESSION['csmsaid'];
  $ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
  $row=mysqli_fetch_array($ret);
  $name=$row['AdminName'];

  ?>
      <!--logo start-->
      <a href="index.php" class="logo"><span class="lite"><strong> <?php echo $name; ?></strong></span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

         <!-- alert notification start-->
         <li id="alert_notificatoin_bar" class="dropdown">
          <?php                                        
  $ret1=mysqli_query($con,"select *from  tblenquiry where Status=''");
  $num1=mysqli_num_rows($ret1);?>
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
  <img src="images/notification-bell.png">
                     <span class="badge bg-important"><?php echo $num1;?></span>
                  </a>
          <ul class="dropdown-menu extended notification">
            <div class="notify-arrow notify-arrow-blue"></div>
            <li>
             <p class="blue">У вас <?php echo $num1;?> новых сообщений</p>
            </li>
        
             <?php   
  if($num1>0)    {                                 
  while ($row1=mysqli_fetch_array($ret1)) { ?>
       <li>
             <a href="view-enquiry-detail.php?viewid=<?php echo $row1['ID'];?>">
                          <span class="label label-primary"><i class="icon_profile"></i></span>
                          Новый запрос <?php echo $row1['FullName'];?>
                          <span class="small italic pull-right"></span>
                        </a>
            </li>
                              
  <?php }} else{ ?>
  <p align="center">Запросы не найдены</p>

  <?php } ?>
          
          </ul>
         </li>
         <!-- alert notification end-->
         <!-- user login dropdown start-->
         <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <span class="profile-ava">
                        <img alt="" src="images/av1.jpg" width="40" height="40">
                     </span>
                     
                     <span class="username"><?php echo $name; ?></span>
                     <b class="caret"></b>
                  </a>
          <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            <li class="eborder-top">
             <a href="admin-profile.php"><i class="icon_profile"></i> Мой профиль</a>
            </li>
            <li>
             <a href="change-password.php"><i class="icon_mail_alt"></i> Сменить пароль</a>
            </li>
            
            <li>
             <a href="logout.php"><i class="icon_key_alt"></i> Выйти</a>
            </li>
           
          </ul>
         </li>
         <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
     </header>
