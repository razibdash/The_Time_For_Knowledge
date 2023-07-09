<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsBD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
     $connect=mysqli_connect('localhost','root','','newsbd');
     $query="SELECT * FROM `admin`";
    $data_sharing=mysqli_query($connect,$query);
     ?>

    <?php
    while($row=mysqli_fetch_assoc($data_sharing))
    {
        
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $password=$row['password'];
        $propic=$row['pro_pic'];
        
    }
     ?>
    <div class="sidebar">
        <div class="container-fluid">
            <h3 class="dash"><a href="Admin.php">Dashboard</a></h3>
            <div class="row">
                <div class="col-md-3">
                         <?php
                          require_once("side_menu.php");
                          ?>
                </div>
                <div class="col-md-8">
                    <div class="profile">
                       <h2> Profiles Info...</h2>
                        <div class="pro_pic">
                          <img src="image/avronil.jpg" alt="">
                        </div>
                        <div class="pro_info">
                            <p><span>Username:</span><?php echo $username ?> </p> <a href="">Edit</a>
                            <p><span>Email:</span><?php echo $email ?> </p> <a href="">Edit</a>
                            <p><span>Password:</span> <?php echo $password ?></p> <a href="">Edit</a>

                            <button class="pro_btn btn-primary">Save</button>
                            <button class="pro_btn btn-primary">Delete</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>