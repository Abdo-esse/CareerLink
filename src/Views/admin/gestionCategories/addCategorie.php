


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addCategorie</title>
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
    
<div class="min-h-screen bg-purple-400 flex justify-center items-center">

  <form action="../../../Controllers/admin/tags/addTag.php" method="post" class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
    <div>
      <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Add Categorie</h1>
      <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Ajoutez une nouvelle catégorie ici.</p>
    </div>
    <div class="space-y-4">
      <input type="text" name="name" placeholder="Ajouter tag" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
    </div>
    <div class="text-center mt-6">
      <button type="submit" name="submit" class="w-full py-2 text-xl text-white bg-purple-400 rounded-lg hover:bg-purple-500 transition-all">Add Categorie</button>
    </div>
  </form>

</div>
</body>
</html>