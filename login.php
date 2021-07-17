<?php
   ob_start();
   session_start();
   if(isset($_SESSION['loggedin'])){
        header("Location: /homepage.php");

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
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
<a href="index.php"><button class="button">Home</button></a>
    <br>
    <br>
    <br>
    <h2>Enter Username and Password</h2>
    <div class="container form-signin">

    <?php include 'logindata.php';?>          
    </div> <!-- /container -->

    <div class="container">

    <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "Username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
         <p>Pin</p> <input class='center'type="number" onkeyup="testIt(this.value);" />


    </div>

</body>

</html>