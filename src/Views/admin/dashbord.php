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
            <a href="#" class="btn login-btn"> <?php echo $_SESSION["useruid"];?></a>
            <a href="./auth/logout.php" class="btn signup-btn">logout</a>
            <?php }
            else{ ?>
            <a href="./auth/login.php" class="btn login-btn">Log In</a>
            <a href="./pages/signupPage.php" class="btn signup-btn">Sign Up</a>
            <?php } ?>
</body>
</html>