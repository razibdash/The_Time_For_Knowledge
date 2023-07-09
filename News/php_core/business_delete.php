<?php
$connect=mysqli_connect('localhost','root','','newsbd');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `business` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    header('Location:../business_update.php?deletedBusiness=true');
    
}else
{
    header('Location:../business_update.php?deletedBusiness=false');
   
}



?>