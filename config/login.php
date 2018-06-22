<?php
    session_start();
   header("Access-Control-Allow-Origin: http://localhost:3000");
   header("Access-Control-Allow-Headers: *");
   header('Access-Control-Allow-Credentials: true');
   // header('Content-Type: application/json');

   if (isset( $_SESSION['myname'])) {
     echo "is set!";
     return;
   }

    if(isset($_POST['mypass']) && isset($_POST['myname'])) {


       if ($_POST['mypass'] == "pass" && $_POST['myname'] == "buller") {

            $_SESSION['myname'] = $_POST['myname'];
            echo "session set!";
            return;
           //header('Location: ..\index.php');
          // header('Location: http://localhost:3000');
       }
    }
    echo "Login failed!";

?>