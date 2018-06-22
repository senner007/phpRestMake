<?php
   header('Access-Control-Allow-Origin: *');
   header('Access-Control-Allow-Headers: *');
   // header('Content-Type: application/json');

   // session_start();
    if(isset($_POST['mypass']) && isset($_POST['myname'])) {


       if ($_POST['mypass'] == "pass" && $_POST['myname'] == "buller") {

         //   $_SESSION['myname'] = $_POST['myname'];
            echo "session set!";
            return;
           //header('Location: ..\index.php');
          // header('Location: http://localhost:3000');
       }
    }
    echo "Login failed!";

?>