<?php
 ini_set('display_errors', '1');
 ini_set('display_startup_errors', '1');
 error_reporting(E_ALL);
if(isset($_POST["port_add"]))
{
    $olcu=$_FILES["image"]["size"];
    $tip=$_FILES["image"]["type"];
    $tmp=$_FILES["image"]["tmp_name"];
    $ad=$_FILES["image"]["name"];
    $tipler=["image/png","image/jpg","image/jpeg","image/webp","image/svg"];
    $yol="../../sekil/".$ad;

    if($olcu>0 && !in_array($tip,$tipler)){
        header("Location:port-add.php?status=no");
        exit();
    }
    $column= "
         title=:title,
         description=:description,
         link=:link,
         image=:image
      ";
    $arr=[
        "title"=>$_POST["title"],
        "description"=>$_POST["description"],
        "link"=>$_POST["link"],
        "image"=>substr($yol,6)
    ];
    if( $CRUD->Insert("portfolio",$arr,$column)){
        move_uploaded_file($tmp,$yol);
        header("Location:port-add.php?status=ok");
        exit();
    }
    else{
        header("Location:port-add.php?status=no");
        exit();
    }
}