<?php
 
session_start();
$line = date('Y-m-d H:i:s');
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }


file_put_contents('visitors.log', $ip_address . PHP_EOL, FILE_APPEND);









 
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Base</title>
    </head>
    <body onload="startTime()">
    <button class="button">Login</button>
    <br><br>
    <h1 class="test1">Hacking Team Base</h1>
    <h1>Welcome To The Hacking Team Base.</h1>
<h3><b>This is only for dedicated hackers. Made By K and Z</b></h3>
<h4>Message hexus#2444 on discord to join.<h4>
    <div id='clock'></div>
    <br>














</body>
</html>
<?php
}
?>
