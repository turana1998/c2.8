<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
  $data=$CRUD->Select("settings");

  if(isset($_POST["settings"]))
      {
          $olcu=$_FILES["logo"]["size"];
          $tip=$_FILES["logo"]["type"];
          $tmp=$_FILES["logo"]["tmp_name"];
          $ad=$_FILES["logo"]["name"];
          $ksekil=$_POST["ksekil"];
          $tipler=["image/png","image/jpg","image/jpeg","image/webp","image/svg"];
          $yol="../../sekil/".$ad;

          if($olcu>0 && !in_array($tip,$tipler)){
              header("Location:settings.php?status=no");
              exit();
          }

          $column="
            title=:title,
            description=:description,
            keywords=:keywords,
            instagram=:instagram,
            facebook=:facebook,
            github=:github,
            email=:email,
            phone=:phone,
            location=:location,
            logo=:logo
          ";
          $arr=[
              "title"=>$_POST["title"],
              "description"=>$_POST["description"],
              "keywords"=>$_POST["keywords"],
              "instagram"=>$_POST["instagram"],
              "facebook"=>$_POST["facebook"],
              "github"=>$_POST["github"],
              "email"=>$_POST["email"],
              "phone"=>$_POST["phone"],
              "location"=>$_POST["location"],
              "logo"=>$olcu>0 ? substr($yol,6) : $ksekil
          ];

          if( $CRUD->Update("settings",$arr,null,$column)){
              $olcu>0 ? unlink("../../".$ksekil) :"";
              move_uploaded_file($tmp,$yol);
              header("Location:settings.php?status=ok");
              exit();
          }
          else{
              header("Location:settings.php?status=no");
              exit();
          }


      }

?>