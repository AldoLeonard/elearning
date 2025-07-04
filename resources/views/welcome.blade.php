<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>

    

  </head>
  <body class="bg-[#F5F5F5]">
    <nav class="flex justify-between items-center z-50 lg:px-20 py-5 px-5">
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

      <ul id="nav-menu" class="hidden lg:flex flex-col lg:flex-row fixed lg:static right-0 top-16 lg:top-auto z-50 bg-white lg:rounded-full rounded-3xl">
        <li><a href="#" class="block px-3 py-1.5 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Beranda</a></li>
        <li><a href="#" class="block px-3 py-1.5 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Pelajaran</a></li>
        <li><a href="#" class="block px-3 py-1.5 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Leaderboard</a></li>
        <li><a href="#" class="block px-3 py-1.5 m-2 text-lg text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white rounded-full">Tentang</a></li>
      </ul>
      <a href="#" class="hidden lg:flex bg-[#1E88E5] px-5 py-2.5 rounded-full items-center justify-center gap-2 text-white font-semibold text-lg text-poppins hover:bg-white hover:text-black">Masuk<i data-feather="log-in"></i></a>
    </nav>

    {{-- hero section --}}
    <div id="hero-section" class="lg:flex grid lg:gap-10 lg:mt-[-50px] w-full h-screen content-center lg:px-30 px-10">
        <div class="lg:w-[55%] w-full content-center items-center lg:mt-0 mt-30">
            <h1 class="lg:text-7xl text-4xl text-poppins font-bold ">Belajar Jadi <span class="bg-linear-to-r from-[#1E88E5] to-[#54D8F7] inline-block text-transparent bg-clip-text pb-3">Menyenangkan!</span></h1>
            <p class="lg:text-2xl text-lg text-poppins font-medium text-[#6C6C6C] my-5">Platform belajar online dengan sistem poin, tantangan, dan leaderboard. Dirancang untuk pelajar agar semangat belajar setiap hari.</p>
              <div class="lg:flex grid lg:gap-5 gap-3 mt-5">
                  <a href="#" class="flex gap-2 bg-[#1E88E5] text-white text-lg px-5 py-2.5 rounded-full text-poppins font-semibold hover:bg-white hover:text-black">
                    Mulai Belajar
                    <i data-feather="arrow-right"></i></a>
                  <a href="#" class="flex gap-2 text-black bg-white text-lg px-5 py-2.5 rounded-full text-poppins font-semibold hover:bg-[#1E88E5] hover:text-white">
                    Lihat Pelajaran
                    <i data-feather="book"></i></a>
              </div>
        </div>
        <div class="lg:w-[45%] mt-5 content-center items-center">
            <img src="/images/hero.png" alt="" class="w-full h-auto">
        </div>
    </div>

    {{-- info section --}}
    <div id="info-section" class="w-full h-auto lg:mt-[-50px] mt-10 mb-10 lg:flex grid gap-5 content-center items-center lg:px-30 px-10 py-15">
      <div class="lg:w-[400px] w-[100%] h-auto lg:rounded-[3vw] rounded-[8vw] bg-[#1E88E5] py-5 px-6">
          <div class="w-43 flex gap-2 bg-white text-black px-3 py-1.5 rounded-full content-center items-center">
              <i data-feather="book"></i>
              <h3 class="text-poppins font-semibold text-lg">Soal Latihan</h3>
          </div>
          <div class="mt-5 mb-2.5">
            <h1 class="text-poppins font-semibold text-white text-6xl">10K+</h1>
          </div>
      </div>
      <div class="lg:w-[400px] w-[100%] h-auto lg:rounded-[3vw] rounded-[8vw] bg-[#1E88E5] py-5 px-6">
          <div class="w-43 flex gap-2 bg-white text-black px-3 py-1.5 rounded-full content-center items-center">
              <i data-feather="users"></i>
              <h3 class="text-poppins font-semibold text-lg">Siswa Aktif</h3>
          </div>
          <div class="mt-5 mb-2.5">
            <h1 class="text-poppins font-semibold text-white text-6xl">5K+</h1>
          </div>
      </div>
      <div class="lg:w-[400px] w-[100%] h-auto lg:rounded-[3vw] rounded-[8vw] bg-[#1E88E5] py-5 px-6">
          <div class="w-57 flex gap-2 bg-white text-black px-3 py-1.5 rounded-full content-center items-center">
              <i data-feather="user-check"></i>
              <h3 class="text-poppins font-semibold text-lg">Guru Sukarelawan</h3>
          </div>
          <div class="mt-5 mb-2.5">
            <h1 class="text-poppins font-semibold text-white text-6xl">100+</h1>
          </div>
      </div>
    </div>
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