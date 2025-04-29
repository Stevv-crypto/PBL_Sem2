<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-TechnoCart</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body class="font-sans bg-white">
  <div class="home-page relative">
    <header class="header">
      <div class="top-header"></div>
      <div class="navbar flex justify-between items-center bg-[#b0cee3] px-8 py-3">
        <div class="logo font-bold text-lg ml-6">E-TechnoCart</div>

        <nav class="menu flex gap-8 mr-16">
          <a href="#" class="text-black text-base hover:text-gray-700 hover:underline font-medium">Home</a>
          <a href="inbox.html" class="text-black text-base hover:text-gray-700 hover:underline font-medium">Contact</a>
          <a href="aboutfix.html" class="text-black text-base hover:text-gray-700 underline font-medium">About</a>
        </nav>
        <!-- Search Box -->
        <div class="actions flex items-center gap-16 ml-24">
          <div class="search-box relative flex items-center bg-[#e8dedd] rounded px-3 py-1">
            <input type="text" id="search" placeholder="What are you looking for?"
              class="bg-transparent border-none text-sm placeholder-gray-500 w-48 px-2 py-1 focus:outline-none" />
            <i class='bx bx-search icon absolute right-2 text-base text-black'></i>
          </div>
          <!-- keranjang -->
          <div class="nav-icon flex items-center gap-6 text-xl text-black">
            <a href="keranjang.php"><i class='bx bx-cart-alt'></i></a>
            <a href="javascript:void(0);" onclick="toggleDropdown()"><i class='bx bx-user'></i></a>
          </div>
        </div>
      </div>
    </header>

    <!-- Akun Dropdown -->
    <div
      class="account-dropdown absolute right-6 top-20 bg-gray-300/50 border border-gray-300 rounded-lg w-52 shadow-lg z-50 hidden"
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
  </div>

  <!-- Sidebar -->
  <div class="flex flex-row items-center gap-3 mt-10 ml-[135px]">
    <a href="home.html" class="text-black hover:underline opacity-50">Home</a>
    <div class="h-4 border-l border-gray-500 opacity-70 transform rotate-45"></div>
    <a href="about.html" class="text-black hover:underline">About</a>
  </div>

  <!-- Main Content -->
  <div class="flex items-center justify-between px-10 py-6 max-w-4xl mx-auto">
    <!-- Teks di sebelah kiri -->
    <div class="text-left max-w-md">
      <h2 class="text-2xl font-semibold mb-2">Welcome to E-TechnoCart</h2>
      <p class="text-gray-600">
        Tim ini ada sejak febuari 2025, dimana tim ini berjuan untuk menyelesaikan PBL,
        tim ini terdiri dari 4 orang anomali yang tidak pernah satu pikiran,
        hanya ada perdebatan dan ketidaksamaan pendapat, tapi dari kekurangan itu kami
        menciptakan berbagai ide yang akan kami aplikasikan pada projek yang akan kami buat.<br>
      </p>
    </div>
    <!-- Gambar di sebelah kanan -->
    <div class="ml-6 max-w-sm w-full">
      <img src="https://www.polibatam.ac.id/wp-content/uploads/2022/04/MG_8893-scaled.jpg" alt="Tech Image"
        class="rounded-lg shadow-md w-full object-cover" />
    </div>

  </div>
  </div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto px-8 py-4">

    <!-- 1 -->
    <div class="text-center">
      <img src="fahmi.jpg" alt="Fahmi" class="w-full h-48 object-cover rounded shadow-md mb-2" />
      <h1 class="text-lg font-semibold mb-1">Steven Marcell Samosir</h1>
      <p class="text-gray-600">ketua Tim</p>
      <div class="flex justify-center gap-4 text-xl text-gray-600">
        <a href="https://www.instagram.com/stevensamosir07?igsh=MWhtenZ6bm81ZTB3Ng=="><i
            class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-gmail'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
      </div>
    </div>

    <!-- 2 -->
    <div class="text-center">
      <img src="ais2.png" alt="Ais" class="w-full h-48 object-cover rounded shadow-md mb-2" />
      <h1 class="text-lg font-semibold mb-1">Aisyah Nurwa Hida</h1>
      <p class="text-gray-600">Anggota</p>
      <div class="flex justify-center gap-4 text-xl text-gray-600">
        <a href="https://www.instagram.com/aysh.nrwhd?igsh=MWYwaWZiNmhydXp4"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-gmail'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
      </div>
    </div>

    <!-- 3 -->
    <div class="text-center">
      <img src="naylah3.png" alt="Naylah" class="w-full h-48 object-cover rounded shadow-md mb-2" />
      <h1 class="text-lg font-semibold mb-1">Naylah Amirah Az-Zikra</h1>
      <p class="text-gray-600">Anggota</p>
      <div class="flex justify-center gap-4 text-xl text-gray-600">
        <a href="https://www.instagram.com/ndskyx._?igsh=aW43amZod3N4YnRk"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-gmail'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
      </div>
    </div>

    <!-- 4 -->
    <div class="text-center">
      <img src="fahmi.jpg" alt="Fahmi Again" class="w-full h-48 object-cover rounded shadow-md mb-2" />
      <h1 class="text-lg font-semibold mb-1">Fahmi Ahmad Fardani</h1>
      <p class="text-gray-600">Anggota</p>
      <div class="flex justify-center gap-4 text-xl text-gray-600">
        <a href="https://www.instagram.com/fhmifrdnii?igsh=MXBpNDN0dGIxcm11Mg=="><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-gmail'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
      </div>
    </div>
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