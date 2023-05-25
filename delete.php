<?php 
require_once('admin_dbcon.php');
$target_id=$_GET['id'];
$delete_query=mysqli_query($dbcon,"DELETE FROM `student_data` WHERE `id`='$target_id'");
if($delete_query){
	header('Location:student_list.php');
}
?>