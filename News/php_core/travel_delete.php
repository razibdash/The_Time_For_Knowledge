<?php
$connect=mysqli_connect('localhost','root','','newsbd');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `travel` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    header('Location:../travel_update.php?deletedTravel=true');
    
}else
{
    header('Location:../travel_update.php?deletedTravel=false');
   
}

?>