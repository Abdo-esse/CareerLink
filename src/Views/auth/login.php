


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="../../Controllers/auth/login.php" method="post">
        <label for="email">E-mail or Name</label> <br>
        <input type="text"  name="emailOrName" id="email" required placeholder="exemple@gmail.com"><br>
        <label for="password">password</label><br>
        <input type="password"  name="password"id="password" required ><br>
       
        <input type="submit" name="login">
    </form>
</body>
</html>