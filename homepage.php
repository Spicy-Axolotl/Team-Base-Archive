<?php
   ob_start();
   session_start();
   if(isset($_SESSION['loggedin'])){
      $greet = '<p id="greet">Hello '.$_SESSION['username'].'!</p>';

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
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php
    $css_path = '/styles.css';

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
</body>

</html>