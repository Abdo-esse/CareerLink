<?php 
require_once __DIR__ . '/../../../vendor/autoload.php'; 
use App\classes\Offre;
session_start();
$offre= new Offre();
$_SESSION["offre"]=$offre->readOffre();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js"></script>
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
<body class="bg-gray-100">
  <!-- Navigation -->
  <nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between h-16">
        <div class="flex items-center">
          <a href="#" class="text-2xl font-bold text-blue-600">JobFinder</a>
        </div>
        <div class="flex items-center space-x-4">
          <a href="#" class="text-gray-600 hover:text-blue-600">Home</a>
          <a href="#" class="text-gray-600 hover:text-blue-600">Jobs</a>
          <a href="#" class="text-gray-600 hover:text-blue-600">Companies</a>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Post a Job</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="max-w-7xl mx-auto px-4 py-8">
    <div class="flex gap-6">
        <!--  -->
      <!-- Left Sidebar -->
      <div class="w-64 hidden md:block">
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h3 class="font-bold text-lg mb-4">Filters</h3>
          <div class="space-y-4">
            <div>
              <h4 class="font-medium mb-2">Location</h4>
              <div class="space-y-2">
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-600"/>
                  <span class="ml-2">Casablanca</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-600"/>
                  <span class="ml-2">Rabat</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-600"/>
                  <span class="ml-2">Tangier</span>
                </label>
              </div>
            </div>
            <div>
              <h4 class="font-medium mb-2">Job Type</h4>
              <div class="space-y-2">
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-600"/>
                  <span class="ml-2">Full Time</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-600"/>
                  <span class="ml-2">Part Time</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox text-blue-600"/>
                  <span class="ml-2">Remote</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="flex-1">
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h2 class="text-2xl font-bold mb-6">Find the Latest Jobs in Morocco</h2>
          
          <!-- Job Card 1 -->
        
<?php
          foreach ($_SESSION["offre"] as $offre) {
                if ($offre->date_delete == null) {
                    ?>
          <!-- Job Card 2 -->
          <div class="border-b pb-4 mb-4">
 <div class="flex items-start gap-4">
 <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                <div class="text-gray-400">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                  </svg>
                </div>
              </div>
   <div class="flex-1">
     <div class="flex justify-between items-start">
       <div>
         <a href="#" class="text-blue-500 font-medium hover:underline"><?php echo $offre->poste ?></a>
         <p class="text-gray-700"><?php echo $offre->name_entreprise ?></p>
         <p class="text-gray-400"><?php echo $offre->lieu_travail ?> · Morocco</p>
         
         <!-- Catégories et tags -->
         <div class="flex flex-wrap gap-2 mt-2">
           <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded"><?php echo $offre->categorie ?></span>
           <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded"><?php echo $offre->tags ?></span>
           <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Full Time</span>
         </div>

         <!-- Salaire -->
         <div class="mt-2 text-gray-700">
           <span class="flex items-center gap-1">
             <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
             </svg>
             <?php echo $offre->salaire ?> MAD/month
           </span>
         </div>

         <!-- Description -->
         <div class="mt-2 text-gray-600 text-sm">
           <p><?php echo $offre->qualifications_requises ?></p>
         </div>

         <p class="text-green-500 text-sm mt-2">la date de création:  <?php echo $offre->date_create?> </p>
       </div>
       <a href="">
       <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-200">
         Postuler
       </button>
       </a>

     </div>
   </div>
 </div>
</div>
<?php
                }
             } 
            ?>
        </div>
      </div>

      <!-- Right Sidebar -->
      <div class="w-64 hidden lg:block">
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h3 class="font-bold text-lg mb-4">Popular Companies</h3>
          <div class="space-y-4">
            <div class="flex items-center gap-3">
              <img src="/api/placeholder/40/40" alt="Company logo" class="w-10 h-10 rounded"/>
              <div>
                <p class="font-medium">Alstom</p>
                <p class="text-sm text-gray-500">12 open positions</p>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <img src="/api/placeholder/40/40" alt="Company logo" class="w-10 h-10 rounded"/>
              <div>
                <p class="font-medium">Yazaki</p>
                <p class="text-sm text-gray-500">8 open positions</p>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <img src="/api/placeholder/40/40" alt="Company logo" class="w-10 h-10 rounded"/>
              <div>
                <p class="font-medium">Groupe RMO</p>
                <p class="text-sm text-gray-500">5 open positions</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white mt-8">
    <div class="max-w-7xl mx-auto px-4 py-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <h4 class="text-lg font-bold mb-4">JobFinder</h4>
          <p class="text-gray-400">Find your dream job in Morocco</p>
        </div>
        <div>
          <h4 class="text-lg font-bold mb-4">For Job Seekers</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white">Browse Jobs</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Browse Companies</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Salary Guide</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-bold mb-4">For Employers</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white">Post a Job</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Hiring Solutions</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Pricing</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-bold mb-4">Contact</h4>
          <ul class="space-y-2">
            <li class="text-gray-400">Email: contact@jobfinder.ma</li>
            <li class="text-gray-400">Phone: +212 5XX-XXXXXX</li>
            <li class="text-gray-400">Address: Casablanca, Morocco</li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
        <p>&copy; 2025 JobFinder. All rights reserved.</p>
      </div>
    </div>
  </footer>
</body>
</html>