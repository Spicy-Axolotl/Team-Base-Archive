<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				$_POST['username'] = strtolower($_POST['username']);
           
               if ($_POST['username'] == 'ztechpro709' && 
               base64_encode($_POST['password'])=='bWljcm9iYW5kNzA5') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Zakariah';
                  $_SESSION['screenname'] = 'ZTechPro709';
                  $_SESSION['loggedin'] = true;
		       #base64_encode($_POST['password'])==''
                  echo "Hello - ".$_SESSION['username']."!";
                  
                  header('Refresh: 1; URL = homepage.php');
               
               }elseif ($_POST['username'] == 'karim' && 
               base64_encode($_POST['password'])=='S2FyaW0wMQ=='){
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Karim';
                  $_SESSION['screenname'] = 'KarimzAHacker';
                  $_SESSION['loggedin'] = true;
                  echo "Hello - ".$_SESSION['username']."!";
                  header('Refresh: 1; URL = homepage.php');
               }elseif ($_POST['username'] == 'stechpro' && 
               base64_encode($_POST['password'])=='c2lw'){
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Sulayman';
                  $_SESSION['screenname'] = 'STechPro709';
                  $_SESSION['loggedin'] = true;
                  echo "Hello - ".$_SESSION['username']."!";
                  header('Refresh: 1; URL = homepage.php');
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>