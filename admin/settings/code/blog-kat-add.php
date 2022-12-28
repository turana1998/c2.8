<?php
  $kat_list=$CRUD->Select("blog_kat",1);
  if(isset($_POST["blog_kat_add"]))
  {
      $column= "
         title=:title
      ";
      $arr=[
         "title"=>$_POST["title"]
      ];

      $CRUD->Insert("blog_kat",$arr,$column)?
      header("Location:blog-kat-add.php?status=ok"):
      header("Location:blog-kat-add.php?status=no");
  }

?>
