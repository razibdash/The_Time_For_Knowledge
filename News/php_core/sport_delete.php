<?php
$connect=mysqli_connect('localhost','root','','newsbd');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `sport` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    header('Location:../sport_update.php?deletedSport=true');
    
}else
{
    header('Location:../sport_update.php.php?deletedSport=false');
   
}



?>