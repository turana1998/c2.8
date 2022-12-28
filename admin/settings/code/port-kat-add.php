<?php
  $kat_list=$CRUD->Select("portfolio_kat",1);
  if(isset($_POST["port_kat_add"]))
  {
      $column= "
         title=:title
      ";
      $arr=[
         "title"=>$_POST["title"]
      ];

      $CRUD->Insert("portfolio_kat",$arr,$column)?
      header("Location:port-kat-add.php?status=ok"):
      header("Location:port-kat-add.php?status=no");
  }
    if(isset($_POST["port-kat-edit"]))
    {
        $column="
          title=:title
        ";
        $where="where id=:id";

        $array=[
            "title"=>$_POST["title"],
            "id"=>$_POST["id"]
        ];

        $CRUD->Update("portfolio_kat",$array,$where,$column)?
            header("Location:port-kat-list.php?status=ok"):
            header("Location:port-kat-list.php?status=no");
    }
?>
