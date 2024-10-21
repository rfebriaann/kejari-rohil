<div>
    <section class="relative w-full h-[600px] md:h-[440px] lg:h-[440px] overflow-hidden bg-[#2CC2E2] md:bg-transparent lg:bg-transparent  z-0">
        {{-- <video id="videoprofil" class="absolute inset-0 object-cover w-full h-full brightness-50" autoplay muted>
            <source src="{{ asset('storage/assets/videos/profile.mp4') }}" type="video/mp4">
        </video> --}}
        <img class="h-full md:h-full mx-auto absolute inset-0 object-cover w-full " src="{{ asset('storage/assets/img/frame6.png') }}" alt="Animated SVG">
        <div class="relative z-10 flex flex-col md:flex-row gap-6 md:gap-14 items-center justify-center w-full h-full px-4 py-8 sm:px-8 md:px-16 lg:px-28">
            <div class="w-full md:w-auto">
                <img class="h-64 md:h-80 mx-auto" src="{{ asset('storage/assets/img/marketplace.png') }}" alt="Animated SVG">
            </div>
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h1 class="font-montserrat text-black text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold px-4">
                    Temukan Harga Komoditas dengan mudah.
                </h1>
            </div>
        </div>
        <div class="absolute bg-gradient-to-t from-[#3190a5] via-transparent"></div>
    </section>

    <div class="relative w-full flex justify-center z-10 -mt-20 mb-24">
        <div class="shadow-lg px-6 sm:px-12 lg:px-16 py-12 sm:py-16 bg-white w-11/12 lg:w-10/12 rounded-tl-[30px] rounded-tr-[30px] md:rounded-tl-[40px] md:rounded-tr-[40px] rounded-bl-[30px] rounded-br-[30px] md:rounded-bl-[40px] md:rounded-br-[40px]">
            <div class="flex justify-between items-center">
                <div class="">
                    <h1 class="font-montserrat text-left text-2xl text-black md:text-5xl lg:text-4xl font-bold">
                        Data Komoditas
                    </h1>
                </div>
                <div class="w-1/3">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-5 pointer-events-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-500 dark:text-gray-400"
                                fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" stroke-width="0">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input
                            type="text"
                            wire:model.live = 'search'
                            class="bg-gray-100 py-3 text-sm font-montserrat rounded-3xl focus:ring-[#111820] focus:border-[#111820] block w-full pl-14 p-2 "
                            placeholder="Cari data disini" required="">
                    </div>
                    {{-- <a href="" class="block px-7 py-3 w-full rounded-3xl bg-[#00A713] text-white font-montserrat font-semibold shadow-md">Selengkapnya</a> --}}
                </div>
            </div>
            <div class="mt-8 flex flex-wrap justify-between items-center border-b py-4 mx-10">
                <div class="basis-full md:basis-1/2 mb-4">
                    <h2 class="font-montserrat text-xl sm:text-xl font-semibold mt-2">Nama Komoditas</h2>
                </div>
                <div class="basis-full text-end md:basis-1/4 mb-4 hidden md:block">
                    <h2 class="font-montserrat text-md sm:text-md font-normal mt-2">Satuan</h2>
                </div>
                <div class="basis-full text-end md:basis-1/4 mb-4 hidden md:block">
                    <h2 class="font-montserrat text-md sm:text-md font-normal mt-2">Harga</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 mt-6">
                {{-- @foreach ($items as $i => $item) --}}
                <div class="flex flex-wrap bg-gray-100 hover:bg-gray-200 py-4 px-6 rounded-lg justify-between items-center">
                    <div class="flex gap-5 basis-full md:basis-1/2">
                        <div>
                            <p>#1</p>
                        </div>
                        <div>
                            <h2 class="font-montserrat text-md sm:text-md font-semibold">Nama</h2>
                        </div>
                    </div>
                    <div class="basis-full text-end md:basis-1/4 mb-4 hidden md:block">
                        <h2 class="font-montserrat text-md sm:text-md font-normal mt-2">Satuan</h2>
                    </div>
                    <div class="basis-full text-end md:basis-1/4 mb-4 hidden md:block">
                        <h2 class="font-montserrat text-md sm:text-md font-normal mt-2">Rp 20,000</h2>
                    </div>
                </div>
                {{-- @endforeach --}}
                <div class="mt-8 flex justify-center items-center">
                    <button wire:click="loadMore" class="font-semibold font-montserrat text-center text-[#00A713] text-xl">Muat lebih banyak</button>
                </div>
            </div>
        </div>
    </div>
</div>
