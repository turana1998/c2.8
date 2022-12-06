<?php
// Insert ---create
// Select----read
// Update--- update
// Delete-- delete

// Function-Method
// Classlarin methodu

  Class CRUD{
    public function Insert($table,$arr=null,$column=null)
    {
      global $db;
      $ins=$db->prepare("INSERT into {$table} set {$column}");
      $upd=$ins->execute($arr);
      return  $upd ? 1 : 0;
    }
    public function Select($table,$multi=0,$where=null,$arr=null,$column="*")
    {
      global $db;
      $slc=$db->prepare("SELECT {$column} from {$table} {$where}");
      $slc->execute($arr);
      return $multi ? $slc->fetchAll(PDO::FETCH_ASSOC) : $slc->fetch(PDO::FETCH_ASSOC) ;
    }
    public function Update($table,$arr=null,$where=null,$column=null)
    {
      global $db;
      $upt=$db->prepare("UPDATE {$table} set {$column} {$where}");
      $upd=$upt->execute($arr);
      return  $upd ? 1 : 0;
    }
    public function Delete($table,$condition)
    {
      global $db;
      $dlt=$db->prepare("DELETE from {$table} where id={$condition}");
      $upd=$dlt->execute();
      return  $upd ? 1 : 0;
    }
  }
?>