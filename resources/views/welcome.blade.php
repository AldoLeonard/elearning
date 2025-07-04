<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>

    

  </head>
  <body class="bg-[#F5F5F5]">
    <nav class="flex relative justify-between lg:mx-25 mt-5 mx-5">
      <a href="#" class="text-black lg:text-3xl text-2xl text-poppins content-center font-semibold">Logo Web</a>

      {{-- hamburger button for mobile --}}
      <div class="flex items-center gap-2 lg:hidden">
      <button class="bg-white p-3 rounded-full" id="menu-toggle">
        <i data-feather="menu" class="w-6 h-6"></i>
      </button>
      <a href="#" class="bg-[#1E88E5] p-3 rounded-full text-white">
        <i data-feather="log-in"></i>
      </a>
      </div>

      <ul id="nav-menu" class="hidden lg:flex flex-col lg:flex-row absolute lg:static right-0 top-16 z-10 bg-white lg:rounded-full rounded-3xl">
        <li><a href="#" class="block px-4 py-2 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Beranda</a></li>
        <li><a href="#" class="block px-4 py-2 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Pelajaran</a></li>
        <li><a href="#" class="block px-4 py-2 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Leaderboard</a></li>
        <li><a href="#" class="block px-4 py-2 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Tentang</a></li>
      </ul>
      <a href="#" class="hidden lg:flex bg-[#1E88E5] px-5 rounded-full items-center justify-center gap-2 text-white font-semibold text-lg text-poppins hover:bg-white hover:text-black">Masuk<i data-feather="log-in"></i></a>
    </nav>
  </body>
  <script>
  feather.replace();

  // hamburger
  document.getElementById("menu-toggle").addEventListener("click", function() {
    const menu = document.getElementById("nav-menu");
    menu.classList.toggle("hidden");
  });
  </script>
</html>