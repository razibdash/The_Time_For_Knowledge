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


                <div class="new-book">
                <form action="php_core\technology_up.php?newsTechnology=true" method="post" enctype="multipart/form-data" >
                    <div class="student">
                        <h2 class='add-title '>Add Technology News<i class="bi bi-plus-circle-dotted"></i></h2>
                    </div>
                        <div class="mb-3 mt-3">
                            <label for="book_name" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="email" placeholder="title name" name="title_name" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="file" class="form-label">Picture:</label>
                            <input type="file" class="form-control" id="file" placeholder="Choose Photo" name="picture" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="autor" class="form-label">Details:</label>
                            <textarea class="form-control" placeholder="News.."  name="details" id="" cols="30" rows="10"></textarea>
                        </div>
                       
                       <input type="submit" value="Submit" class=" fr_btn mt-3 btn btn-primary" name="submit" id="">
                       
                        </form>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                         <h1>Total Updated News</h1>

                 <table class="table table-hover">
                <thead>
                <tr>
                <th>Serial No</th>
                <th>News Title</th>
                <th>News Date</th>
                <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
        $connect=mysqli_connect('localhost','root','','newsbd');
        $query="SELECT * FROM `technology`";
        $data_sharing=mysqli_query($connect,$query);
?>
<?php
   $count=0;
    while($row=mysqli_fetch_assoc($data_sharing))
    {
        
        $id=$row['id'];
        $news_title=$row['news_title'];
        $date=$row['date'];
        $count++;
        ?>
       
         <tr>
            <td class='serial'><?php echo $count?></td>
             <td><?php echo $news_title?></td>
             <td><?php echo $date?></td>
             <td><a href="php_core/tech_delete.php?id=<?php echo $id ?>">Delete</a></td>
         <?php 
                           
                            
         ?>
         </tr>
                
 <?php    
    }  
    ?>    
    </tbody>    
                  </table>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>