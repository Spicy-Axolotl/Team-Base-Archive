<?php
   ob_start();
   session_start();
   if(isset($_SESSION['loggedin'])){
      $greet = '<p id="greet">Hello '.$_SESSION['name'].'!</p>';

   }else{
      header("Location: /login.php");
exit();
   }
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang="en">

<head>
   
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php
    
if($_SESSION['name'] == 'Zakariah'){
   $css_path = 'css/4042.css';
}elseif($_SESSION['name'] == 'Ismail'){
   $css_path = 'css/ismail.css';
}else{
   $css_path = 'css/styles.css';
}
    ?>
    <link rel="stylesheet" type="text/css" 
href="<?php echo $css_path;?>">

</head>

<body>
<?php include 'logoutbtn.php';?>
<br><br><br>
<?php
echo $greet;


?>

<div class="moon"></div>
<div class="moon__crater moon__crater1"></div>
<div class="moon__crater moon__crater2"></div>
<div class="moon__crater moon__crater3"></div>

<div class="star star1"></div>
<div class="star star2"></div>
<div class="star star3"></div>
<div class="star star4"></div>
<div class="star star5"></div>


<div class="astronaut">
  <div class="astronaut__backpack"></div>
  <div class="astronaut__body"></div>
  <div class="astronaut__body__chest"></div>
  <div class="astronaut__arm-left1"></div>
  <div class="astronaut__arm-left2"></div>
  <div class="astronaut__arm-right1"></div>
  <div class="astronaut__arm-right2"></div>
  <div class="astronaut__arm-thumb-left"></div>
  <div class="astronaut__arm-thumb-right"></div>
  <div class="astronaut__leg-left"></div>
  <div class="astronaut__leg-right"></div>
  <div class="astronaut__foot-left"></div>
  <div class="astronaut__foot-right"></div>
  <div class="astronaut__wrist-left"></div>
  <div class="astronaut__wrist-right"></div>
  
  <div class="astronaut__cord">
    <canvas id="cord" height="500px" width="500px"></canvas>
  </div>
  
  <div class="astronaut__head">
    <canvas id="visor" width="60px" height="60px"></canvas>
    <div class="astronaut__head-visor-flare1"></div>
    <div class="astronaut__head-visor-flare2"></div>
  </div>
</div>
<?php
    
if($_SESSION['name'] == 'Zakariah'){
   $js_path = 'js/4042.js';
}else{
   $js_path = 'js/script.js';
}
    ?>
<script src="<?php echo $js_path;?>"></script>
<script src="js/script.js"></script>
</body>

</html>