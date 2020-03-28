<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $title=$_POST['title'];
 $description=$_POST['description'];
 $time=$_POST['time'];
 $q=mysqli_query($con,"INSERT INTO `jadwal` (`title`,`description`,`time`) VALUES ('$title','$description','$time')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>