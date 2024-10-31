<nav id="navbar" class="flex justify-center h-[50px] md:h-[80px] bg-transparent fixed px-0 left-0 z-20 w-full top-0 transition-all duration-300 ease-in-out text-black">
    <div class="w-full max-w-[1240px] flex items-center justify-between mx-auto">
        <div class="flex items-center mx-10">
            <img class="size-14" src="{{ asset('storage/assets/img/logokejari.png') }}" class="h-12 mr-3" alt="Logo" />
            {{-- <span class="self-center text-2xl text-white font-semibold font-montserrat">Istana Data</span> --}}
        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden mx-10">
            <button id="menu-btn" class="focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- Navigation items (desktop view) -->
        <div id="menu" class="hidden md:flex md:items-center md:w-auto w-full justify-end space-x-8">
            <a href="{{route('homepage')}}" class="font-semibold text-lg cursor-pointer font-montserrat">Beranda</a>
            <a href="{{route('guest.pemohon.index')}}" class="font-semibold text-lg cursor-pointer font-montserrat">Form Permohonan</a>
            {{-- <div class="relative group">
                <p class="font-semibold text-lg cursor-pointer font-montserrat">Desa Cantik</p>
                <!-- Dropdown Menu for Desa Cantik -->
                <div class="absolute w-40 hidden group-hover:block bg-[#1d2730] p-4 mt-0 space-y-2 rounded-xl shadow-lg">
                    <div>
                        <a href="" class="font-montserrat cursor-pointer">Statistik</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="relative group">
                <p class="font-semibold text-lg cursor-pointer font-montserrat">Data</p>
                <!-- Dropdown Menu for Data -->
                <div class="absolute w-40 hidden group-hover:block bg-[#1d2730] p-4 mt-0 space-y-2 rounded-xl shadow-lg">
                    <div>
                        <a href="" class="font-montserrat cursor-pointer">Indikator</a>
                    </div>
                    <div class="border-b border-[#fff] h-1"></div>
                    <div>
                        <a href="" class="text-black font-montserrat cursor-pointer">Komoditas</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="relative group">
                <p class="font-semibold text-lg cursor-pointer font-montserrat">Dokumen</p>
                <!-- Dropdown Menu for Data -->
                <div class="absolute w-40 hidden group-hover:block bg-[#1d2730] p-4 mt-0 space-y-2 rounded-xl shadow-lg">
                    <div>
                        <a href="" class="text-black font-montserrat cursor-pointer">Publikasi</a>
                    </div>
                    <div class="border-b border-[#fff] h-1"></div>
                    <div>
                        <a href="" class="text-black font-montserrat cursor-pointer">Infografis</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Fullscreen Mobile Menu -->
    <div id="mobile-menu" class="fixed top-0 left-0 w-full h-full bg-[#101820] text-white hidden z-50">
        <div class="flex justify-between items-center px-4 mx-6">
            <div class="flex items-center">
                <img src="" class="h-12 mr-3" alt="Logo" />
                {{-- <span class="self-center text-2xl text-white font-semibold font-montserrat">Istana Data</span> --}}
            </div>
            <button id="close-menu" class="text-white text-3xl focus:outline-none">×</button>
        </div>
        <div class="flex flex-col items-center justify-center h-full space-y-6">
            <p class="text-xl font-semibold">Beranda</p>
            <div class="relative">
                <p class="text-xl font-semibold cursor-pointer" id="desa-menu-mobile">Desa Cantik</p>
                <!-- Dropdown Mobile for Desa Cantik -->
                <div id="desa-dropdown-mobile" class="hidden flex flex-col space-y-2 mt-2">
                    <p class="text-white cursor-pointer">Profil Desa</p>
                    <p class="text-white cursor-pointer">Program Desa</p>
                </div>
            </div>
            <div class="relative">
                <p class="text-xl font-semibold cursor-pointer" id="data-menu-mobile">Data</p>
                <!-- Dropdown Mobile for Data -->
                <div id="data-dropdown-mobile" class="hidden flex flex-col space-y-2 mt-2">
                    <p class="text-white cursor-pointer">Statistik Data</p>
                    <p class="text-white cursor-pointer">Pemetaan Data</p>
                </div>
            </div>
            <p class="text-xl font-semibold">Dokumen</p>
        </div>
    </div>
</nav>

<script>
    // Handle Mobile Menu
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });

    // Handle Dropdown in Mobile View
    const desaMenuMobile = document.getElementById('desa-menu-mobile');
    const desaDropdownMobile = document.getElementById('desa-dropdown-mobile');
    const dataMenuMobile = document.getElementById('data-menu-mobile');
    const dataDropdownMobile = document.getElementById('data-dropdown-mobile');

    desaMenuMobile.addEventListener('click', () => {
        desaDropdownMobile.classList.toggle('hidden');
    });

    dataMenuMobile.addEventListener('click', () => {
        dataDropdownMobile.classList.toggle('hidden');
    });

    // Handle Navbar Transparency on Scroll
    const navbar = document.getElementById('navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-[#6d3914]');
            navbar.classList.remove('text-black');
            navbar.classList.add('text-white');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-[#6d3914]');
            navbar.classList.remove('text-white');
        }
    });
</script>
