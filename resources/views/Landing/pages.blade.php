<!doctype html>
<html class="h-full bg-gray-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
  </head>
  <body class="bg-[#050A24] text-white font-sans">

    <!-- Navbar -->
    <nav class="relative flex items-center px-8 py-4 z-50">
      <div class="flex-none">
        <img src="images/2.png" alt="Logo" class="h-20 w-auto">
      </div>
      <div class="hidden md:absolute md:left-1/2 md:transform md:-translate-x-1/2 md:block">
        <ul class="flex space-x-8 text-white text-lg font-medium">
          <li><a href="#" class="hover:text-purple-300 transition">Home</a></li>
          <li><a href="#" class="hover:text-purple-300 transition">About us</a></li>
        </ul>
      </div>
      <div class="ml-auto md:hidden">
        <button id="menu-toggle" class="text-white text-2xl focus:outline-none">☰</button>
      </div>
      <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-gray-900 text-white px-8 py-4 md:hidden">
        <ul class="space-y-4 text-lg font-medium">
          <li><a href="#" class="block hover:text-purple-300 transition">Home</a></li>
          <li><a href="#" class="block hover:text-purple-300 transition">About us</a></li>
        </ul>
      </div>
    </nav>
  
    <script>
      document.getElementById("menu-toggle").addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
      });
    </script>
  
      <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-8 md:px-20 py-16 max-w-7xl mx-auto w-full">
      <div class="max-w-xl w-full space-y-6">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight text-white">
          Buka Jalan Untuk<br />
          <span class="text-purple-300 italic">Masa Depan!!</span>
        </h1>
        <p class="text-gray-300 text-lg">
          Mulai dari tabungan kecil hingga rencana besar, semua bisa diwujudkan di <span class="font-semibold text-white">TABLAH.</span>
        </p>
        <div class="flex space-x-4">
          <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow-md transition">Login</button>
          <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow-md transition">Register</button>
        </div>
      </div>
      <div class="mt-12 md:mt-0 md:ml-12">
        <img src="images/1.png" alt="Ilustrasi" class="w-72 md:w-96 object-contain" />
      </div>
    </section>


      <!-- About Section -->
    <section class="px-8 md:px-20 py-16 max-w-7xl mx-auto w-full mt-20">
      <div class="flex flex-col md:flex-row items-center gap-12">
        <img src="images/4.png" alt="Icon TabLah" class="w-60 h-60 object-contain" />
        <div class="text-white max-w-2xl">
          <h2 class="text-3xl font-bold mb-4">
            Apa itu <span class="italic text-purple-300">TabLah?</span>
          </h2>
          <p class="text-gray-200 leading-relaxed">
            TabLah adalah platform tabungan online yang dirancang khusus untuk memudahkan siswa, orang tua, dan sekolah dalam mengelola tabungan pendidikan secara aman, transparan, dan praktis. Dengan TabLah, pencatatan transaksi menjadi lebih rapi, akses saldo bisa dilakukan kapan saja, dan pengelolaan keuangan sekolah menjadi lebih efisien.
          </p>
        </div>
      </div>
    </section>

      <!-- Kenapa Harus TabLah -->
      <section class="px-8 md:px-20 py-16 max-w-7xl mx-auto w-full mt-20">
        <h2 class="text-3xl md:text-4xl font-semibold text-center mb-12">
          <span class="italic text-purple-300">Kenapa</span>
          <span class="font-bold"> Harus </span>
          <span class="italic text-purple-300">TabLah?</span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-blue-600 bg-opacity-40 p-6 rounded-xl text-center shadow-md">
            <img src="images/3.png" alt="icon" class="mx-auto w-12 mb-4">
            <h3 class="text-lg font-semibold mb-2">Mudah dan Praktis</h3>
            <p>Menabung bisa dilakukan kapan saja tanpa harus antre di sekolah.</p>
          </div>
          <div class="bg-blue-600 bg-opacity-40 p-6 rounded-xl text-center shadow-md">
            <img src="images/3.png" alt="icon" class="mx-auto w-12 mb-4">
            <h3 class="text-lg font-semibold mb-2">Aman dan Transparan</h3>
            <p>Transaksi tercatat, dan orang tua bisa memantau saldo anak secara langsung.</p>
          </div>
          <div class="bg-blue-600 bg-opacity-40 p-6 rounded-xl text-center shadow-md">
            <img src="images/3.png" alt="icon" class="mx-auto w-12 mb-4">
            <h3 class="text-lg font-semibold mb-2">Terintegrasi Sekolah</h3>
            <p>Mempermudah pengelolaan tabungan oleh pihak sekolah secara digital.</p>
          </div>
        </div>
      </section>


          <!-- About Us Section -->
    <section class="px-8 md:px-20 py-16 max-w-7xl mx-auto w-full mt-20">
      <h2 class="text-3xl md:text-4xl font-semibold text-center mb-12 text-white">About Us?</h2>

      <!-- Ulasan Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-blue-600 text-white rounded-xl p-4 shadow-md">
          <h3 class="font-semibold mb-2">Ulasan siswa A***</h3>
          <p class="text-sm">A good website can make me buy a car and iphone 16 promax !!! I very love this website cuz its helped me much</p>
        </div>
        <div class="bg-blue-600 text-white rounded-xl p-4 shadow-md">
          <h3 class="font-semibold mb-2">Ulasan siswa A***</h3>
          <p class="text-sm">A good website can make me buy a car and iphone 16 promax !!! I very love this website cuz its helped me much</p>
        </div>
        <div class="bg-blue-600 text-white rounded-xl p-4 shadow-md">
          <h3 class="font-semibold mb-2">Ulasan siswa A***</h3>
          <p class="text-sm">A good website can make me buy a car and iphone 16 promax !!! I very love this website cuz its helped me much</p>
        </div>
        <div class="bg-blue-600 text-white rounded-xl p-4 shadow-md">
          <h3 class="font-semibold mb-2">Ulasan siswa A***</h3>
          <p class="text-sm">A good website can make me buy a car and iphone 16 promax !!! I very love this website cuz its helped me much</p>
        </div>
        <div class="bg-blue-600 text-white rounded-xl p-4 shadow-md">
          <h3 class="font-semibold mb-2">Ulasan siswa A***</h3>
          <p class="text-sm">A good website can make me buy a car and iphone 16 promax !!! I very love this website cuz its helped me much</p>
        </div>
        <div class="bg-blue-600 text-white rounded-xl p-4 shadow-md">
          <h3 class="font-semibold mb-2">Ulasan siswa A***</h3>
          <p class="text-sm">A good website can make me buy a car and iphone 16 promax !!! I very love this website cuz its helped me much</p>
        </div>
      </div>

      <!-- Form Masukan/Ulasan -->
      <div class="text-center text-white mb-6 mt-20">
        <h3 class="text-2xl font-semibold">Ingin menambah masukan / Ulasan?</h3>
        <p class="text-sm text-gray-300 mt-2">kami siap menerima semua komentar anda untuk aplikasi tersayang kami</p>
      </div>
      <form class="bg-white rounded-xl p-6 max-w-3xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 text-black shadow-md">
        <div>
          <label for="name" class="block text-sm font-semibold mb-1">Nama</label>
          <input type="text" id="name" placeholder="Abcd..." class="w-full px-4 py-2 border border-gray-300 rounded" />
        </div>
        <div>
          <label for="email" class="block text-sm font-semibold mb-1">Email</label>
          <input type="email" id="email" placeholder="name@trowlize.com" class="w-full px-4 py-2 border border-gray-300 rounded" />
        </div>
        <div class="md:col-span-2">
          <label for="ulasan" class="block text-sm font-semibold mb-1">Ulasan</label>
          <textarea id="ulasan" rows="3" placeholder="Saya merasa..." class="w-full px-4 py-2 border border-gray-300 rounded"></textarea>
        </div>
        <div class="md:col-span-2 text-center">
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition">
            Kirim
          </button>
        </div>
      </form>
    </section>



    

  

<!-- Footer -->
<footer class="bg-[#121212] text-gray-300 py-12 mt-0">

  <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">

    <!-- Kolom Deskripsi -->
    <div class="flex flex-col items-center md:items-start">
      <img src="/images/2.png" alt="Tablah Logo" class="mb-4 w-40">
      <p class="text-sm mb-4 text-center md:text-left">
        Tablah adalah platform digital yang membantu siswa menabung dengan cara yang mudah, menyenangkan, dan teratur. Bersama Tablah, kebiasaan baik dimulai dari sekarang.
      </p>
      <div class="flex justify-center space-x-6 md:justify-start">
        <a href="#"><img src="icon-fb.png" alt="Facebook" class="w-6 h-6"></a>
        <a href="#"><img src="icon-twitter.png" alt="Twitter" class="w-6 h-6"></a>
        <a href="#"><img src="icon-instagram.png" alt="Instagram" class="w-6 h-6"></a>
        <a href="#"><img src="icon-linkedin.png" alt="LinkedIn" class="w-6 h-6"></a>
      </div>
    </div>

    <!-- Kolom Bantuan -->
    <div class="text-center md:text-left">
      <h3 class="text-lg font-semibold mb-3">NEED HELP?</h3>
      <p class="mb-2">📞 Call Us:<br><span class="text-sm text-gray-400">+62 899-8888-7777</span></p>
      <p class="mb-2">📧 Email:<br><span class="text-sm text-gray-400">example@example.com</span></p>
      <p>📍 Lokasi:<br><span class="text-sm text-gray-400">Jl. Veteran No. 1A, Kota Tangerang, Banten 15148</span></p>
    </div>

    <!-- Kolom Logo Ikon -->
    <div class="flex flex-col items-center justify-center">
      <img src="/images/7.png" alt="Tablah Icon" class="w-40 mx-auto mb-4">
      <p class="text-xs text-gray-400 text-center">Bersama Menabung untuk Masa Depan</p>
    </div>

  </div>

  <!-- Copyright -->
  <div class="mt-10 pt-4 text-center text-xs text-gray-500">
    © 1845 - 2025 <br> PT. Power Rangers
  </div>
</footer>


  
  </body>
  
</html>