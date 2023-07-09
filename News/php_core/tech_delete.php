<?php
$connect=mysqli_connect('localhost','root','','newsbd');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `technology` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    header('Location:../technology_update.php?deletedtechnology=true');
    
}else
{
    header('Location:../technology_update.php?deletedtechnology=false');
   
}

?>