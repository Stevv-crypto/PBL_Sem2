<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-TechnoCart</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-white">
    <div class="home-page relative">

  <div class="container mx-auto px-4 py-8">
    <div class="grid md:grid-cols-4 gap-6">
      <!-- Sidebar -->
      <aside class="space-y-2 hidden md:block">
        <ul class="bg-[#b0cee3] shadow p-4 space-y-2">
          <li><a href="#" class="block hover:text-blue-700">Air Conditioner</a></li>
          <li><a href="#" class="block hover:text-blue-700">Dispensers</a></li>
          <li><a href="#" class="block hover:text-blue-700">Television</a></li>
          <li><a href="#" class="block hover:text-blue-700">Refrigerator</a></li>
          <li><a href="#" class="block hover:text-blue-700">Washing Machine</a></li>
          <li><a href="#" class="block hover:text-blue-700">Fan</a></li>
          <li><a href="#" class="block hover:text-blue-700">Rice Cooker</a></li>
        </ul>
      </aside>

      <!-- Main Content -->
      <main class="md:col-span-3 space-y-10">
        <!-- Hero Section -->
        <section class="relative bg-[#373D49] h-64 flex items-center justify-between px-10 py-6 overflow-hidden">
          <div>
            <h2 class="text-2xl font-semibold text-white">Smart LED TV</h2>
            <p class="text-lg text-blue-300 font-bold">New Products!!!</p>
            <button class="mt-10 bg-red-600 text-white px-3 py-1 text-sm rounded">Shop Now</button>
          </div>
          <img src="image/20.png" alt="Banner" class="w-40 md:w-56 lg:w-64 max-h-48 object-contain shadow-lg" />

          <!-- Dots indicator -->
          <div class="absolute bottom-4 justify-center-6 flex space-x-1">
            <span class="w-2 h-2 bg-white rounded-full"></span>
            <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
            <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
          </div>
        </section>
      </main>
    </div>

    <!-- Product Section -->
    <section class="mt-12">
      <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-bold text-black-900">Explore Products</h3>
        <div class="space-x-2">
          <button class="p-2 bg-gray-200 rounded-full"><i class='bx bx-left-arrow-alt'></i></button>
          <button class="p-2 bg-gray-200 rounded-full"><i class='bx bx-right-arrow-alt'></i></button>
        </div>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 px-0">
        <!-- Product Card -->
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-4">
            <img src="image/20.png" alt="Product" class="mx-auto mb-4 w-32 h-32 object-contain">
          </div>
          <button class="w-full bg-[#373D49] text-white py-1.5 text-sm rounded-none mt-3">Add to Cart</button>
          <div class="border-t border-gray-300 pt-1">
            <h4 class="font-semibold text-xs mt-1">Washing machine-LG</h4>
            <p class="text-sm"><span class="text-blue-600 font-bold">$900</span></p>
            <div class="flex justify-start text-yellow-500 my-1">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
          </div>
        </div>
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-4">
            <img src="image/20.png" alt="Product" class="mx-auto mb-4 w-32 h-32 object-contain">
          </div>
          <button class="w-full bg-[#373D49] text-white py-1.5 text-sm rounded-none mt-3">Add to Cart</button>
          <div class="border-t border-gray-300 pt-1">
            <h4 class="font-semibold text-xs mt-1">Washing machine-LG</h4>
            <p class="text-sm"><span class="text-blue-600 font-bold">$900</span></p>
            <div class="flex justify-start text-yellow-500 my-1">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
          </div>
        </div>
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-4">
            <img src="image/20.png" alt="Product" class="mx-auto mb-4 w-32 h-32 object-contain">
          </div>
          <button class="w-full bg-[#373D49] text-white py-1.5 text-sm rounded-none mt-3">Add to Cart</button>
          <div class="border-t border-gray-300 pt-1">
            <h4 class="font-semibold text-xs mt-1">Washing machine-LG</h4>
            <p class="text-sm"><span class="text-blue-600 font-bold">$900</span></p>
            <div class="flex justify-start text-yellow-500 my-1">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
          </div>
        </div>
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-4">
            <img src="image/20.png" alt="Product" class="mx-auto mb-4 w-32 h-32 object-contain">
          </div>
          <button class="w-full bg-[#373D49] text-white py-1.5 text-sm rounded-none mt-3">Add to Cart</button>
          <div class="border-t border-gray-300 pt-1">
            <h4 class="font-semibold text-xs mt-1">Washing machine-LG</h4>
            <p class="text-sm"><span class="text-blue-600 font-bold">$900</span></p>
            <div class="flex justify-start text-yellow-500 my-1">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
          </div>
        </div>
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-4">
            <img src="image/20.png" alt="Product" class="mx-auto mb-4 w-32 h-32 object-contain">
          </div>
          <button class="w-full bg-[#373D49] text-white py-1.5 text-sm rounded-none mt-3">Add to Cart</button>
          <div class="border-t border-gray-300 pt-1">
            <h4 class="font-semibold text-xs mt-1">Washing machine-LG</h4>
            <p class="text-sm"><span class="text-blue-600 font-bold">$900</span></p>
            <div class="flex justify-start text-yellow-500 my-1">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
          </div>
        </div>
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-4">
            <img src="image/20.png" alt="Product" class="mx-auto mb-4 w-32 h-32 object-contain">
          </div>
          <button class="w-full bg-[#373D49] text-white py-1.5 text-sm rounded-none mt-3">Add to Cart</button>
          <div class="border-t border-gray-300 pt-1">
            <h4 class="font-semibold text-xs mt-1">Washing machine-LG</h4>
            <p class="text-sm"><span class="text-blue-600 font-bold">$900</span></p>
            <div class="flex justify-start text-yellow-500 my-1">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
          </div>
        </div>
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-4">
            <img src="image/20.png" alt="Product" class="mx-auto mb-4 w-32 h-32 object-contain">
          </div>
          <button class="w-full bg-[#373D49] text-white py-1.5 text-sm rounded-none mt-3">Add to Cart</button>
          <div class="border-t border-gray-300 pt-1">
            <h4 class="font-semibold text-xs mt-1">Washing machine-LG</h4>
            <p class="text-sm"><span class="text-blue-600 font-bold">$900</span></p>
            <div class="flex justify-start text-yellow-500 my-1">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
          </div>
        </div>
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-4">
            <img src="image/20.png" alt="Product" class="mx-auto mb-4 w-32 h-32 object-contain">
          </div>
          <button class="w-full bg-[#373D49] text-white py-1.5 text-sm rounded-none mt-3">Add to Cart</button>
          <div class="border-t border-gray-300 pt-1">
            <h4 class="font-semibold text-xs mt-1">Washing machine-LG</h4>
            <p class="text-sm"><span class="text-blue-600 font-bold">$900</span></p>
            <div class="flex justify-start text-yellow-500 my-1">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
          </div>
        </div>
        
      </div>

      <div class="mt-6 text-center">
        <button class="bg-blue-100 text-blue-700 px-6 py-2 rounded-lg hover:bg-blue-200">View All Products</button>
      </div>
    </section>
  </div>




</body>

</html>
