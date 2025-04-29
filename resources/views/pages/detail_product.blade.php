<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>E-TechnoCart</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-white">
  <div class="home-page relative">
    <header class="header">
      <div class="top-header"></div>
      <div class="navbar flex justify-between items-center bg-[#b0cee3] px-8 py-3">
          <div class="logo font-bold text-lg ml-6">E-TechnoCart</div>

          <nav class="menu flex gap-8 mr-16">
          <a href="home_page" class="text-black text-base hover:text-gray-700 font-semibold underline">Home</a>
              <a href="contact" class="text-black text-base hover:text-gray-700 hover:underline font-medium">Contact</a>
              <a href="about" class="text-black text-base hover:text-gray-700 hover:underline font-medium">About</a>
          </nav>

          <div class="actions flex items-center gap-16 ml-24">
              <div class="search-box relative flex items-center bg-[#e8dedd] rounded px-3 py-1">
                  <input type="text" id="search" placeholder="What are you looking for?"
                      class="bg-transparent border-none text-sm placeholder-gray-500 w-48 px-2 py-1 focus:outline-none" />
                  <i class='bx bx-search icon absolute right-2 text-base text-black'></i>
              </div>

              <div class="nav-icon flex items-center gap-6 text-xl text-black">
                  <a href="cart"><i class='bx bx-cart-alt'></i></a>
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
  <nav class="text-sm text-gray-600 px-14 mt-4 py-2">
    <a href="home_page" class="hover:underline text-blue-600">Home</a> / 
    <a href="category" class="hover:underline text-blue-600">Rice Cooker</a> / 
    <span class="text-gray-800 font-medium">Elite Platinum</span>
  </nav>

  <main class="my-12 px-4 md:px-20">
    <!-- Breadcrumb -->
    <!--<div class="text-sm text-gray-500 mb-4">
      <a href="chckout1.html" class="hover:underline">Home</a> /
      <a href="cart2.html" class="hover:underline">Rice Cooker</a> /
      <span class="text-black font-medium">Elite Platinum</span>
    </div>-->
  
    <!-- Produk Detail -->
    <div class="flex flex-col md:flex-row gap-10">
      <!-- Gambar Produk -->
      <div class="w-full md:w-1/2 scale-85 bg-gray-100 rounded-lg p-4 flex justify-center"> <!--scale-90-->
        <img src="/image/15.png" alt="Elite Platinum" class="object-cover max-h-[400px] " />
      </div>
  
      <!-- Detail Produk -->
      <div class="w-full md:w-1/2 pl-20  max-w-lg ">
        <h2 class="text-2xl font-bold mb-2">Elite Platinum</h2>
        <div class="flex items-center gap-2 text-yellow-500 text-sm mb-2">
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bx-star'></i>
          <span class="text-gray-600 ml-2">(50 Reviews)</span> 
          <span class="ml-4 text-green-600 text-sm">In Stock</span>
        </div>
        <p class="text-xl font-sans  mb-4">$192.00</p>
        <p class="text-gray-700 text-sm leading-relaxed">
          This electric pressure cooker is a modern cooking experience that utilizes high pressure to speed up the cooking process. With a stainless steel design and a digital panel, this device makes it easy to set the time and temperature for various types of dishes.
        </p><hr>
        <p class="mb-2"><span class="font-medium">Material:</span> Stainless</p>
        <p class="mb-4"><span class="font-medium">Feature:</span> LED digital panels</p>
  
        <!-- Kuantitas dan Tombol Beli -->
        <div class="flex items-stretch gap-4 mb-6">
            <div class="wrapper flex border border-gray-400 rounded overflow-hidden w-fit text-black">
                <div class="sub px-4 py-2 text-xl cursor-pointer hover:bg-gray-100">−</div>
                <div class="value w-12 text-center border-l border-r border-gray-400 py-2">2</div>
                <div class="add px-4 py-2 text-xl cursor-pointer bg-blue-500 hover:bg-blue-600">+</div>
              </div>
          <button class="w-40 bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Buy Now</button><!--lanjut ke hlaman checkout-->
        </div>
  
        <!-- Info Lain -->
        <div class="bg-[#b0cee3] p-4 rounded-lg mb-2  max-w-lg ">
          <div class="flex items-center gap-2 mb-2">
            <i class='bx bx-package text-lg mr-2'></i>
            <span>Free Delivery</span>
          </div>
          <hr>
              <div class="w-fit px-10 py-4 mt-2 rounded text-center border border-gray-500">1 year guarantee</div>    
          </div>
        </div>  
      </div>
    </div>
  </main>
  

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

    <script>
        // Toggle dropdown
        function toggleDropdown() {
          const dropdown = document.getElementById("accountDropdown");
          dropdown.classList.toggle("hidden");
        }
    
        // Close dropdown when clicking outside
        window.addEventListener("click", function(e) {
          const dropdown = document.getElementById("accountDropdown");
          const profileIcon = document.querySelector(".bx-user");
    
          if (!dropdown.contains(e.target) && !profileIcon.contains(e.target)) {
            dropdown.classList.add("hidden");
          }
        });



        const sub = document.querySelector(".sub");
        const add = document.querySelector(".add");
        const value = document.querySelector(".value");
        
        let TotalValue= 1;
        value.innerHTML = TotalValue;

        add.onclick = function(){
            TotalValue++;
            value.innerHTML = TotalValue;
        }
        sub.onclick = function(){
            if (TotalValue > 1) {
            TotalValue--;
            value.innerHTML = TotalValue;
            }
        };

      </script>
</body>
</html>

