<?php
$connect=mysqli_connect('localhost','root','','newsbd');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `politics` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    header('Location:../politics_update.php?deletedPolitics=true');
    
}else
{
    header('Location:../politics_update.php?deletedPolitics=false');
   
}



?>