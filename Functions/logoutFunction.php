<?php
      if (!isset($_SESSION)) {
          session_start();
      }
      // $result;
      // echo ("<script> $result=confirm ('are your sure?') </script>");
   
      session_destroy();
      header("Location: http://localhost/PHP-HAOTIAN-ZHANG/");
  ?>
