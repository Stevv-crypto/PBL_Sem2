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
    <span class="text-gray-800 font-medium">Cart</span>
  </nav>
<!-- Cart Section -->  
<main class="container mx-auto px-4 py-12">
    <!--<div class="text-sm text-gray-500 mb-4">
        <a href="home_page" class="hover:underline">Home</a> /
        <span class="text-black font-medium">Cart</span>
    </div>-->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-700 text-left">
          <tr>
            <th class="py-3 px-4">Product</th>
            <th class="py-3 px-4">Price</th>
            <th class="py-3 px-4">Quantity</th>
            <th class="py-3 px-4">Subtotal</th>
          </tr>
        </thead>
        <tbody id="cart-body">
          <tr class="border-t">
            <td class="py-8 px-4 flex items-center"><img src="/image/5.png" alt="" class="w-[30px] mr-3">TV-LG</td>
            <td class="py-8 px-4">$<span class="price" data-price="650">650</span></td>
            <td class="py-8 px-4">
                    <input type="number" value="1" min="1" name="" id="" 
                        class="w-[60px] px-[10px] py-[4px] pr-[8px] text-base border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </td>
            </td>
            <td class="py-3 px-4 subtotal">$<span>650</span></td>
          </tr>
          <tr class="border-t">
            <td class="py-8 px-4 flex items-center "><img src="/image/15.png" alt="" class="w-[30px] mr-3">Refrigerator Mini-Sharp</td>
            <td class="py-8 px-4">$<span class="price" data-price="560">560</span></td>
            <td class="py-8 px-4">
                <input type="number" value="1" min="1" name="" id="" 
                    class="w-[60px] px-[10px] py-[4px] pr-[8px] text-base border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"/>                 
            </td>
            <td class="py-8 px-4 subtotal">$<span>1120</span></td>
            </tr>
        </tbody>
      </table>
    </div>

    <button id="update_cart" class="mt-4 px-5 py-2 bg-gray-200 rounded border  hover:bg-gray-300">Update Cart</button>

    <div class="cart-total mt-8 bg-white p-6 shadow rounded-md max-w-sm w-full border border-gray-700 ml-auto">
      <h3 class="text-2xl font-semibold mb-4">Cart Total</h3>

      <!--<div class="flex justify-between mb-2">
        <span class="text-gray-700">Subtotal:</span>
        <span class="text-gray-900">$1300</span>
      </div>
      <hr class="my-2">
      <div class="flex justify-between mb-2">
        <span class="text-gray-700">Delivery:</span>
        <span class="text-gray-900">Free</span>
      </div>-->
      <hr class="my-2">
      <div class="flex justify-between font-semibold text-lg mb-4">
        <span>Total:</span>
        <span>$1300</span>
      </div>

      <button class="w-full bg-sky-400 hover:bg-sky-500 text-white font-medium py-2 rounded-md">
        Proceed to checkout
      </button>
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
    
</script>

</body>
</html>