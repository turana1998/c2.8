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

?>
