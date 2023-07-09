<?php 
    require_once("../config/configer.php");
    
    if(isset($_REQUEST['submit']) && isset($_REQUEST['newsPolitics']) )
    {
        $title_name=$_REQUEST['title_name'];
        $news_photo=$_FILES['picture'];
        $imageName=$news_photo['name'];
        $image_tmp_name=$news_photo['tmp_name'];
        $news_details=$_REQUEST['details'];
        if(!empty($imageName))
        {
            $loc="../image/";
            move_uploaded_file($image_tmp_name,$loc.$imageName);
        }

              $data_insert="INSERT INTO `politics`(`news_title`, `picture`, `details`)
               VALUES ('$title_name','$imageName','$news_details')";
              $data = mysqli_query($connect,$data_insert);
              if($data)
              {
                echo '<script>window.location.href="../politics_update.php"</script>';
              }else
              {
                echo '<script>window.location.href="../politics_update.php?addedError=true"</script>';
              }


    }
    
    ?>