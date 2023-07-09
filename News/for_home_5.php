<?php 
        $connect=mysqli_connect('localhost','root','','newsbd');
        $query="SELECT * FROM `health`";
        $data_sharing=mysqli_query($connect,$query);
    ?>

<div class="sport_news">
<h1 class="catagory_title">Health...</h1>
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