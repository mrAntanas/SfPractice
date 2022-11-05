<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'meta.inc.php';?>
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
      
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/vova.jpg" width="250px" height="361px" alt="Вовка">'; ?>                    
                </div>

                <div class="fullname">
                    <p> My name is 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'City', ' ', $city; ?>                                      
                    </p> 
           
                    <p> I'm
                    <?php  echo $age;   ?>          
                    yaers old </p>
                    <p> We study variables </p>
                    <p> Learned simple operations with them </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
