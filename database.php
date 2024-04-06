<?php
   $db = new mysqli("localhost","root","","login_register_db");
   if($db->connect_error){
       die("Database Not found");
   }
?>