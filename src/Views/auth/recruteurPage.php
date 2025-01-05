
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up CAndidat</title>
</head>
<body>
<h1> recruteur</h1>
    <form action="../../Controllers/auth/signupRecruteur.php" method="post">
    <label for="fullName">Full name</label>
    <input type="text" name="name" required  id="fullName"><br>

    <label for="email">Email</label>
    <input type="email" name="email" required  id="email"><br>
    <label for="emailProfessionnel">E-mail Professionnel</label>
    <input type="email" name="emailProfessionnel" required  id="emailProfessionnel"><br>
    <label for="nomEntreprise">nom de l’entreprise</label>
    <input type="text" name="nomEntreprise" required  id="nomEntreprise"><br>

    <label for="password">Password</label>
    <input type="password" name="password" required id="password"><br>

    <label for="password2">Repeat Password</label>
    <input type="password" name="passwordRepate" required id="password2"><br>

    <input type="submit" name="SignUP" value="Sign Up">
</form>
</body>
</html>