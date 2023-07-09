<?php
$connect=mysqli_connect('localhost','root','','newsbd');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `health` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    header('Location:../health_update.php?deletedHealth=true');
    
}else
{
    header('Location:../health_update.php?deletedHealth=false');
   
}



?>