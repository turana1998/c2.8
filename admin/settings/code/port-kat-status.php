<?php
//    ob_start();
//
//    require_once "../settings/db.php";
//    $db=new DBConnection;
//
//    require_once "../settings/class/crud.php";
//    $CRUD=new CRUD;
//
//    if(isset($_POST["ks"]))
//    {
//        $id=$_POST["id"];
//        $where="where id=:id";
//        $arr=
//            [
//                "id"=>$id
//            ];
//        $status=$CRUD->Select("portfolio_kat",null,$where,$arr,"status")["status"];
//
//        $column="status=:status";
//        $array=[
//            "status"=>$status==1 ? 0 : 1,
//            "id"=>$id
//        ];
//        echo $CRUD->Update("portfolio_kat",$array,$where,$column);
//    }
//
//?>
