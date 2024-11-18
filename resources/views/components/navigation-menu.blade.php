<nav id="navbar" class="flex justify-center h-[50px] md:h-[80px] bg-transparent fixed px-0 left-0 z-20 w-full top-0 transition-all duration-300 ease-in-out text-black">
    <div class="w-full max-w-[1240px] flex items-center justify-between mx-auto">
        <div class="flex items-center mx-10">
            <img class="sm:size-10 md:size-14" src="{{ asset('storage/assets/img/logokejari.png') }}" class="h-12 mr-3" alt="Logo" />
            <img class="sm:size-12 md:size-16" src="{{ asset('storage/assets/img/logoppa.png') }}" class="h-12 mr-3" alt="Logo" />
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
            <a href="{{route('guest.perkara.index')}}" class="font-semibold text-lg cursor-pointer font-montserrat">Data Perkara</a>
            </div>
        </div>
    </div>

    <!-- Fullscreen Mobile Menu -->
    <div id="mobile-menu" class="fixed top-0 left-0 w-full h-full bg-[#6d3914] text-white hidden z-50">
        <div class="flex justify-between items-center px-4 mx-6">
            <div class="flex items-center">
                <img class="sm:size-10 md:size-14 sm:mt-2" src="{{ asset('storage/assets/img/logokejari.png') }}" class="h-12 mr-3" alt="Logo" />
                <img class="sm:size-12 md:size-16" src="{{ asset('storage/assets/img/logoppa.png') }}" class="h-12 mr-3" alt="Logo" />
                {{-- <span class="self-center text-2xl text-white font-semibold font-montserrat">Istana Data</span> --}}
            </div>
            <button id="close-menu" class="text-white text-3xl focus:outline-none">×</button>
        </div>
        <div class="flex flex-col items-center justify-center h-full space-y-6">
            <div class="relative">
                <a href="{{route('homepage')}}" class="text-xl font-semibold cursor-pointer" id="desa-menu-mobile">Beranda</a>
            </div>
            <div class="relative">
                <a href="{{route('guest.pemohon.index')}}" class="text-xl font-semibold cursor-pointer" id="data-menu-mobile">Form Permohonan</a>
            </div>
            <a href="{{route('guest.perkara.index')}}" class="text-xl font-semibold">Data Perkara</a>
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
