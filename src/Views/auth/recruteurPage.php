<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Rectruteur</title>
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
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Rectruteur</title>
      <!-- tailwind -->
    <!-- carousel -->
    <link
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
            },
          },
        },
      };
    </script>
    <style type="text/tailwindcss">
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
    </style>
</head>
<body>
    
<div class="min-h-screen bg-gray-900 flex justify-center items-center">

  <form action="../../Controllers/auth/signupCandidat.php" method="post" class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
    <div>
      <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Sign up</h1>
      <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create an account to access all services ad-free, completely free of charge!</p>
    </div>
    <div class="space-y-4">
      <input type="text" name="name" required placeholder="Full name" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
      <input type="text" name="nomEntreprise" required placeholder="Full name" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
      <input type="email" name="email" required placeholder="votre e-mail" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
      <input type="email" name="emailProfessionnel" required placeholder="votre e-mail" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
      <input type="password" name="password"  required  class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
      <input type="password" name="passwordRepate" required class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
    </div>
    <div class="text-center mt-6">
      <button type="submit" name="SignUP"  class="w-full py-2 text-xl text-white bg-purple-400 rounded-lg hover:bg-purple-500 transition-all">Sign up</button>
      <p>You have an account? <a href=""> Log in →</a></p>
    </div>
  </form>
  
</div>
</body>
</html>