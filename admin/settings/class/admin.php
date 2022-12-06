<?php
  ob_start();

  require_once "../settings/db.php";
  $db=new DBConnection;
  
  require_once "../settings/class/crud.php";
  $CRUD=new CRUD;

?>