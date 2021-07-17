<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				$_POST['username'] = strtolower($_POST['username']);
           
               if ($_POST['username'] == 'ztechpro709' && 
               base64_encode($_POST['password'])=='bWljcm9iYW5kNzA5') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['name'] = 'Zakariah';
                  $_SESSION['screenname'] = 'ZTechPro709';
                  $_SESSION['loggedin'] = true;
		       #base64_encode($_POST['password'])==''
                  $msg = 'Hello - '.$_SESSION['name'].'!';
                  
                  header('Refresh: 1; URL = homepage.php');
               
               }elseif ($_POST['username'] == 'karim' && 
               base64_encode($_POST['password'])=='S2FyaW0wMQ=='){
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['name'] = 'Karim';
                  $_SESSION['screenname'] = 'KarimzAHacker';
                  $_SESSION['loggedin'] = true;
                  $msg = 'Hello - '.$_SESSION['name'].'!';
                  header('Refresh: 1; URL = homepage.php');
               }elseif ($_POST['username'] == 'stechpro' && 
               base64_encode($_POST['password'])=='c2lw'){
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['name'] = 'Sulayman';
                  $_SESSION['screenname'] = 'STechPro709';
                  $_SESSION['loggedin'] = true;
                  $msg = 'Hello - '.$_SESSION['name'].'!';
                  header('Refresh: 1; URL = homepage.php');
               }elseif ($_POST['username'] == 'hackeriii' && 
               base64_encode($_POST['password'])=='VEVP'){
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['name'] = 'Ismail';
                  $_SESSION['screenname'] = 'HackerPro';
                  $_SESSION['loggedin'] = true;
                  $msg = 'Hello - '.$_SESSION['name'].'!';
                  header('Refresh: 1; URL = homepage.php');
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>