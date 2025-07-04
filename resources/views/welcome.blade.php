<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>

    

  </head>
  <body class="bg-[#F5F5F5]">
    <nav class="flex relative justify-between mx-25 mt-5">
      <a href="#" class="text-black lg:text-3xl md:text-2xl text-poppins content-center font-semibold">Logo Web</a>

      {{-- hamburger button for mobile --}}
      <button class="block lg:hidden" id="menu-toggle">
        <i data-feather="menu" class="w-6 h-6"></i>
      </button>

      <ul id="nav-menu" class="hidden lg:flex flex-col lg:flex-row absolute lg:static bg-white rounded-full">
        <li><a href="#" class="block px-4 py-2 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Beranda</a></li>
        <li><a href="#" class="block px-4 py-2 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Pelajaran</a></li>
        <li><a href="#" class="block px-4 py-2 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Leaderboard</a></li>
        <li><a href="#" class="block px-4 py-2 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Tentang</a></li>
      </ul>
      <a href="#" class="bg-[#1E88E5] px-5 rounded-full flex items-center justify-center gap-2 text-white font-semibold text-lg text-poppins hover:bg-white hover:text-black">Masuk<i data-feather="log-in"></i></a>
    </nav>
  </body>
  <script>
  feather.replace();
  </script>
</html>