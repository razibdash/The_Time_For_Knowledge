<?php 
        $connect=mysqli_connect('localhost','root','','newsbd');
        $query="SELECT * FROM `business`";
        $data_sharing=mysqli_query($connect,$query);
    ?>

<div class="sport_news">
<h1 class="catagory_title">Business...</h1>
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
                           <div class="col-md-12">
                           <h1 class="spt_title mb-3"><?php echo $news_title?></h1>
                           <div class="politics_img">
                           
                                <img class='img mt-3' width="500px" height="200px" src="image/<?php echo $picture?>" alt="image not found">
                                </div>
                            </div>
                            <div class="col-md-12">
                               
                                <p class="spt_details"><?php echo $details ?></p>
                                <p  class="mt-3"><?php echo $date?></p>
                            </div>
                           </div>
                         
 <?php    
    }  
    ?>    
                        </tbody>
                    </table>
                </div>