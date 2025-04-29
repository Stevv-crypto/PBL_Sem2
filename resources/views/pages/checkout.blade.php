<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>E-TechnoCart</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-wite">
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
    <a href="detail_product" class="hover:underline text-blue-600">Detail Produk</a> / 
    <span class="text-gray-800 font-medium">Checkout</span>
  </nav>


  <section class="bg-gray-50 py-10">
    <div class="container mx-auto px-4">
      <!-- Breadcrumb -->
      <!--<div class="text-sm text-gray-500 mb-6">
        <a href="#" class="hover:underline">Account</a> /
        <a href="#" class="hover:underline">Rice Cooker</a> /
        <span class="text-black font-medium">Elite Platinum</span>
    </div>-->
      
  
      <!-- Main content -->
      <div class="flex flex-col lg:flex-row gap-10">
      <!--<div class="flex flex-row flex-wrap gap-10">-->
        <!-- Billing Details -->
        <div class="w-full lg:w-2/3 bg-gray-50 p-8 rounded-lg shadow-md">
          <h2 class="text-2xl font-bold mb-6">Billing Details</h2>
          <form class="space-y-4">
            <div>
              <label class="block mb-1 mt-8">Name</label>
              <input type="text" class="w-full border rounded-md p-2 bg-gray-200" required>
            </div>
            <div>
              <!--<label class="block mb-1">Company Name</label>
              <input type="text" class="w-full border rounded-md p-2 bg-gray-200">
            </div>-->
            <div>
              <label class="block mb-1 mt-8">Address</label>
              <input type="text" class="w-full border rounded-md p-2 bg-gray-200" required>
            </div>
            <!--<div>
              <label class="block mb-1">Apartment, floor, etc. (optional)</label>
              <input type="text" class="w-full border rounded-md p-2 bg-gray-200">
            </div>
            <div>
              <label class="block mb-1">Town/City*</label>
              <input type="text" class="w-full border rounded-md p-2 bg-gray-200" required>
            </div>-->
            <div>
              <label class="block mb-1 mt-8">Phone Number</label>
              <input type="text" class="w-full border rounded-md p-2 bg-gray-200" required>
            </div>
            <div>
              <label class="block mb-1 mt-8">Email Address</label>
              <input type="email" class="w-full border rounded-md p-2 bg-gray-200" required>
            </div>
            <div class="flex items-center mt-4">
              <input type="checkbox" class="mr-2" checked>
              <label>Save this information for faster check-out next time</label>
            </div>
          </form>
        </div>
      </div>
  
        <!-- Order Summary -->
        <div class="w-full lg:w-1/3 bg-white p-8 rounded-lg shadow-md">
            <!-- List Products -->
            <div class="space-y-4 mb-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                <img src="/image/5.png" alt="TV" class="w-10 h-10 rounded-md">
                <span class="font-medium">TV-LG</span>
                </div>
                <span>$650</span>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                <img src="/image/15.png" alt="Fridge" class="w-10 h-10 rounded-md">
                <span class="font-medium">Refrigerator Mini-Sharp</span>
                </div>
                <span>$1120</span>
            </div>
            </div>
        
            <!-- Subtotal, Shipping, Total -->
            <div class="border-t pt-4 space-y-2">
            <!--<div class="flex justify-between">
                <span>Subtotal:</span>
                <span>$1300</span>
            </div>
            <hr class="my-2">
            <div class="flex justify-between">
                <span>Shipping:</span>
                <span class="text-green-600">Free</span>
            </div>
            <hr class="my-2">-->
            <div class="flex justify-between font-semibold text-lg pt-2">
                <span>Total:</span>
                <span>$1300</span>
            </div>
            </div>
        
            <!-- Payment Methods -->
            <div class="mt-6 space-y-4">
            <div class="flex items-center justify-between">
                <!-- Kiri: radio dan label -->
                <div class="flex items-center">
                <input type="radio" id="bank" name="payment" class="mr-2">
                <label for="bank">Bank</label>
                </div>
                <!-- Kanan: logo BNI dan Mastercard -->
                <div class="flex items-center gap-2">
                <img src="/public/image/logo bnk.png" alt="BNI" class="w-10 h-6 object-contain">
                </div>
            </div>
            <div class="flex items-center justify-between">
                <!-- Kiri: radio dan label -->
                <div class="flex items-center">
                <input type="radio" id="ewallet" name="payment" checked class="mr-2">
                <label for="ewallet">E-Wallet</label>
              </div>
                <!-- Kanan: logo Ovo dan Mastercard -->
                <div class="flex items-center gap-2">
                <img src="/public/image/ovo.png" alt="Ovo" class="w-10 h-6 object-contain">
                <img src="/public/image/gopay.png" alt="gopay" class="w-10 h-6 object-contain">  
              </div>
            </div>
        
            <!--<div class="flex items-center">
                <input type="radio" id="ewallet" name="payment" checked class="mr-2">
                <label for="ewallet">E-Wallet</label>
            </div>-->
            </div>
        
            <!-- Place Order button -->
            <button class="mt-6 w-full bg-blue-400 hover:bg-blue-500 text-white font-semibold py-3 rounded-md" >
            Place Order
            </button>
        </div>
  
      </div>
    </div>
  </section>
  

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

</script>

</body>
</html>

