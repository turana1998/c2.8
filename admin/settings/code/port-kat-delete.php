<?php
ob_start();

require_once "../settings/db.php";
$db=new DBConnection;

require_once "../settings/class/crud.php";
$CRUD=new CRUD;
if(@$_GET["sil"]=="ok"){
    $CRUD->Delete("portfolio_kat",@$_GET["id"]) ?
        header("Location:port-kat-list.php?status=ok") :
        header("Location:port-kat-list.php?status=no");
}