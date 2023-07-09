<?php 
        $connect=mysqli_connect('localhost','root','','newsbd');
        $query="SELECT * FROM `technology`";
        $data_sharing=mysqli_query($connect,$query);
    ?>


<div class="sport_news">
                
<h1 class="catagory_title">Technology...</h1>
                       
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
                           <div class="politics_img">
                           
                                <img class='img' width="500px" height="200px" src="image/<?php echo $picture?>" alt="image not found">
                                </div>
                            </div>
                            <div class="col-md-8">
                            <h2 class="spt_title"><?php echo $news_title?></h2>
                                <p class="spt_details"><?php echo $details ?></p>
                                <p class="mt-3"><?php echo $date?></p>
                            </div>
                           </div>
                         
 <?php    
    }  
    ?>    
                        </tbody>
                    </table>
                </div>