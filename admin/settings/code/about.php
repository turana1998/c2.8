<?php
$data=$CRUD->Select("about");
if(isset($_POST["about"]))
{
    $olcu=$_FILES["image"]["size"];
    $tip=$_FILES["image"]["type"];
    $tmp=$_FILES["image"]["tmp_name"];
    $ad=$_FILES["image"]["name"];
    $ksekil=$_POST["ksekil"];
    $tipler=["image/png","image/jpg","image/jpeg","image/webp","image/svg"];
    $yol="../../sekil/".$ad;

    if($olcu>0 && !in_array($tip,$tipler)){
        header("Location:about.php?status=no");
        exit();
    }

    $column="
            title=:title,
            description=:description,
            image=:image
          ";
    $arr=[
        "title"=>$_POST["title"],
        "description"=>$_POST["description"],
        "image"=>$olcu>0 ? substr($yol,6) : $ksekil
    ];

    if( $CRUD->Update("about",$arr,null,$column)){
        $olcu>0 ? unlink("../../".$ksekil) :"";
        move_uploaded_file($tmp,$yol);
        header("Location:about.php?status=ok");
        exit();
    }
    else{
        header("Location:about.php?status=no");
        exit();
    }


}
?>