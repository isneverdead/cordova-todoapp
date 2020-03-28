<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $title=$_POST['title'];
 $description=$_POST['description'];
 $time=$_POST['time'];
 $q=mysqli_query($con,"UPDATE `jadwal` SET `title`='$title',`description`='$description',`time`='$time' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>