<?php 
 session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
if(isset($_SESSION["userid"]))
            {
            ?>
            <h1>Welcom <?php echo    $_SESSION["userName"];?> </h1>
            <a href="addCategorie.php" class="btn login-btn"> <h4>Add categories</h4> </a>
          
            <?php } include_once("Sidebar.php");;?>

          
            



           
</body>
</html>