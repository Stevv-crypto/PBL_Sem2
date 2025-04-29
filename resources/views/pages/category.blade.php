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
        <header class="header">
            <div class="top-header"></div>
            <div class="navbar flex justify-between items-center bg-[#b0cee3] px-8 py-3">
                <div class="logo font-bold text-lg ml-6">E-TechnoCart</div>

                <nav class="menu flex gap-8 mr-16">
                <a href="#" class="text-black text-base hover:text-gray-700 hover:underline font-medium">Home</a>
                    <a href="#" class="text-black text-base hover:text-gray-700 hover:underline font-medium">Contact</a>
                    <a href="#" class="text-black text-base hover:text-gray-700 hover:underline font-medium">About</a>
                </nav>

                <div class="actions flex items-center gap-16 ml-24">
                    <div class="search-box relative flex items-center bg-[#e8dedd] rounded px-3 py-1">
                        <input type="text" id="search" placeholder="What are you looking for?"
                            class="bg-transparent border-none text-sm placeholder-gray-500 w-48 px-2 py-1 focus:outline-none" />
                        <i class='bx bx-search icon absolute right-2 text-base text-black'></i>
                    </div>

                    <div class="nav-icon flex items-center gap-6 text-xl text-black">
                        <a href="keranjang.php"><i class='bx bx-cart-alt'></i></a>
                        <a href="javascript:void(0);" onclick="toggleDropdown()"><i class='bx bx-user'></i></a>
                    </div>
                </div>
            </div>
        </header>

         <!-- Akun Dropdown -->
         <div class="account-dropdown absolute right-6 top-20 bg-gray-300/50 border border-gray-300 rounded-lg w-52 shadow-lg z-50 hidden"
            id="accountDropdown">
            <div class="option px-4 py-3 hover:bg-gray-100">
                <a href="profile.php" class="flex items-center gap-3 text-gray-800 text-sm ">
                    <i class='bx bx-user'></i> <span>Manage My Account</span>
                </a>
            </div>
            <div class="option px-4 py-3 hover:bg-gray-100">
                <a href="my-orders.php" class="flex items-center gap-3 text-gray-800 text-sm">
                    <i class='bx bxl-shopify'></i> <span>My Order</span>
                </a>
            </div>
            <div class="option px-4 py-3 hover:bg-gray-100">
                <a href="logout.php" class="flex items-center gap-3 text-red-800 text-sm">
                    <i class='bx bx-log-out'></i> <span>Logout</span>
                </a>
            </div>
        </div>
        <nav class="text-sm text-gray-600 px-14 py-2">
          <a href="home_page" class="hover:underline text-blue-600">Home</a> / 
          <a href="#" class="hover:underline text-blue-600">Product</a> / 
          <span class="text-gray-800 font-medium">Washing Machine</span>
        </nav>

        <!-- Product Section -->
        <section class="mt-2 px-6 sm:px-6 md:px-20">
          <div class="flex justify-between items-center mb-2">
            <h3 class="text-xl font-bold text-gray-900">Washing Machine</h3>
          </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 px-6">
        <!-- Product Card -->
        <div class="bg-[#E2D8D8] rounded-lg shadow p-4 text-start relative">
        <a href="#" class="absolute top-2 right-2 text-gray-700 hover:text-blue-600 text-lg">
          <i class='bx bx-show'></i>
        </a>
          <div class="relative pb-2">
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
    </section>
  </div>
      
         <!-- Footer -->
  <footer class="bg-gray-800 text-white mt-10">
  <div class="container mx-auto px-4 py-8">
    <!-- Grid untuk Konten Utama Footer -->
    <div class="grid md:grid-cols-3 gap-8 text-center md:text-left">
      <!-- Kolom 1 -->
      <div>
        <h3 class="text-xl font-bold mb-2">E-TechnoCart</h3>
        <div class="flex items-center justify-center md:justify-start space-x-2">
          <input type="email" placeholder="Enter your email" class="px-3 py-2 rounded w-full max-w-xs text-black">
          <i class='bx bxs-send text-2xl'></i>
        </div>
      </div>

      <!-- Kolom 2 -->
      <div>
        <h5 class="font-semibold mb-2">Address</h5>
        <p>Jl. Ahmad Yani, Batam Kota</p>
        <p>etechnocart02@gmail.com</p>
        <p>+6283111590529</p>
      </div>

      <!-- Kolom 3 -->
      <div>
        <h5 class="font-semibold mb-2">Account</h5>
        <ul class="space-y-1">
          <li>My Account</li>
          <li>Login / Register</li>
          <li>Cart</li>
          <li>Wishlist</li>
          <li>Shop</li>
        </ul>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center py-4 mt-8 border-t border-gray-700">
      <p class="text-sm">© E-TechnoCart 2025. All rights reserved.</p>
    </div>
  </div>
</footer>
  </div>
  <script>
                // Toggle dropdown
                function toggleDropdown() {
                    const dropdown = document.getElementById("accountDropdown");
                    dropdown.classList.toggle("hidden");
                }

                // Close dropdown when clicking outside
                window.addEventListener("click", function (e) {
                    const dropdown = document.getElementById("accountDropdown");
                    const profileIcon = document.querySelector(".bx-user");

                    if (!dropdown.contains(e.target) && !profileIcon.contains(e.target)) {
                        dropdown.classList.add("hidden");
                    }
                });
            </script>
</body>

</html>