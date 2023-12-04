<?php
   session_start();
   $a=1;
   if( isset( $_SESSION['counter'] ) )
   {
      $_SESSION['counter'] += 1;
   }
   else
   {
      $_SESSION['counter'] = $a;
   }
$msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
   echo $msg;
?>
