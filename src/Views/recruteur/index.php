<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 

use App\classes\Offre;
 session_start();
 $offre= new Offre();
   $_SESSION["offre"]=$offre->readOffre();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruteur</title>
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
<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex-1 flex justify-between items-center">
    <?php
if(isset($_SESSION["userid"]))
            {
            ?>
            <h1 class="font-medium text-blue-800"> Welcom <?php echo    $_SESSION["userName"];?> </h1>
          
            <?php }?>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
      <svg class="fill-current text-gray-900"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
            <div class="button-add-club p-2" >
            <a href="./gestionOffre/addOffre.php">
      <button class="bg-blue-800  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
</svg>
</button>
</a>
    </div>


    </div>
            </ul>
        </nav>
    </div>
</header>

<section
            class="grid grid-cols-1 ml-1.5 mt-1.5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4 gap-6"
          >
          <?php
          foreach ($_SESSION["offre"] as $offre) {
                if ($offre->date_delete == null) {
                    ?>
           
          <!-- bg-white rounded-2xl p-5 cursor-pointer relative hover:shadow -->
<div class="max-w-sm bg-white border border-gray-200 rounded-lg  relative hover:shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
      
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $offre->poste ?> </h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $offre->name_entreprise ?> </h5>
            <h6 class="mb-2 font-medium font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $offre->categorie ?> </h6>
            <h6 class="mb-2 font-medium font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $offre->tags ?></h6>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-1"><?php echo $offre->qualifications_requises ?></p>
            <h6 class="mb-2 font-medium font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $offre->lieu_travail ?> | <?php echo $offre->salaire ?> </h6>
            <div class ="flex justify-between">
                <div class =" "> <?php echo $offre->date_create ?></div>
            <div class ="" ><a href="" class="text-blue-600">Modifier </a> | <a href="../../Controllers/recruteur/deletOffre.php?id=<?php echo $offre->id ?>" class="text-rose-700"> Supremer</a></div>

            </div>
       
            
    </div>
</div>
<?php
                }
             } 
            ?>
            
          </section>
    
</body>
</html>




<!-- 
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div> -->
