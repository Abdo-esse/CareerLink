<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up CAndidat</title>
</head>
<body>
    <h1>Candidat</h1>
    <form action="../auth/signupCandidat.php">
        <label for="fullName">Full name</label>
        <input type="text" required placeholder="Full name" id="fullName"><br>
        <label for="email">Email</label>
        <input type="email" required placeholder="votre e-mail" id="email"><br>
        <label for="password">Password</label>
        <input type="password" required id="password"><br>
        <label for="password2">Repeat Password</label>
        <input type="password" required  id="password2"><br>
        <input type="submit" name="SignUP" >
    
    </form>
</body>
</html>