<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newsBD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <span><a href="index.php">NewsBD</a></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li> <form action="" method="post">
                            <input type="text" name="search" value="Search" id="">
                        </form></li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="menu_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php
                   require("menu_link.php");
                   ?>
                </div>
            </div>
        </div>
    </section>
    <section class="breaking_news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brk_news">
                        <p class="news_1">Breaking News</p>
                        <marquee  behavior="smooth" direction="">Lorem ipsum dolor sit amet 
                            consectetur adipisicing elit. Culpa, soluta.</marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>
     
    <section class="breaking_news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brk_news1">
                        <p class="news_2">International</p>
                        <marquee  behavior="smooth" direction="">Lorem ipsum dolor sit amet 
                            consectetur adipisicing elit. Culpa, soluta.</marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        $connect=mysqli_connect('localhost','root','','newsbd');
        $query="SELECT * FROM `health`";
        $data_sharing=mysqli_query($connect,$query);
    ?>
    <section class="update_news">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="sport_news">
                        <?php
   $count=0;
    while($row=mysqli_fetch_assoc($data_sharing))
    {
        
        $id=$row['id'];
        $news_title=$row['news_title'];
        $picture=$row['picture'];
        $details =$row['details'];
        $date =$row['date'];
        $count++;
        ?>
       
                      
                       
                           <div class="row spt_news">
                            <div class="col-md-4">
                                <div class="spt_img">
                                <img class='img' src="image/<?php echo $picture?>" alt="image not found">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="spt_title"><?php echo $news_title?></h3>
                                <p class="spt_details"><?php echo $details ?></p>
                                <p><?php echo $date?></p>
                            </div>
                           </div>
                         
 <?php    
    }  
    ?>    
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="recent_post">
                        <ul>
                            <h3>Recent News..</h3>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <img src="" alt="img Not Found!">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                        <p class="red">FINANCE</p>
                                        <p class="bold">Lorem ipsum dolor sit amet.</p>
                                        <p>date: 27-06-23</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <img src="" alt=" img Not Found!">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                        <p class="red">FINANCE</p>
                                        <p class="bold">Lorem ipsum dolor sit amet.</p>
                                        <p>date: 27-06-23</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img">
                                            <img src="" alt="img Not Found!">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="caption">
                                        <p class="red">FINANCE</p>
                                        <p class="bold">Lorem ipsum dolor sit amet.</p>
                                        <p>date: 27-06-23</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
       require("footer.php");
      ?>
</body>
</html>