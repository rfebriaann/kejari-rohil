<div class="">
    <div class="w-full h-[1000px] flex justify-center mt-20 mb-12">
        <div class=" mx-20 h-full w-full rounded-3xl">
            <div class="flex flex-col p-2 h-full gap-4">
                <div class="bg-[#5B3018] w-full bg-cover rounded-3xl basis-2/3 overflow-hidden" style="background-image: url('storage/assets/img/bg-1.jpeg')">
                    <div class="bg-cover bg-gradient-to-b from-[#5B3018] w-full h-full">
                        <div class="flex flex-col gap-4 justify-center text-center text-white p-40">
                            <h1 class="font-montserrat font-semibold text-5xl">Selamat datang di SIAPBB</h1>
                            <p class="font-montserrat font-medium text-2xl leading-6">(Sistem Aplikasi Pengembalian Barang Bukti)</p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4 h-full w-full basis-1/3">
                    <div class="bg-[#ab7743] border-2 border-[#5b3018] h-full w-full rounded-3xl" style="box-shadow: 0px 10px 0 rgba(87, 46, 23, 1);">
                        <div class="flex h-full justify-center items-center gap-5 mx-10">
                            <div class="basis-1/3">
                                <img class="size-40" src="{{ asset('storage/assets/svg/form.svg') }}" class="h-12 mr-3" alt="Logo" />
                            </div>
                            <div class="basis-2/3">
                                <div class="flex flex-col gap-3">
                                    <h2 class="font-montserrat font-bold text-2xl">Form pengambilan barang bukti</h2>
                                    <p class="font-montserrat font-medium text-lg leading-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere eum delectus, animi possimus maiores mollitia.</p>
                                    <a href="{{route('guest.pemohon.index')}}" class="font-montserrat font-semibold px-4 py-1.5 rounded-3xl bg-white w-1/2 text-center" style="box-shadow: 0px 5px 0 rgb(211, 211, 211);">Mulai input form</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[#d7bda6] border-2 border-[#5b3018] w-full h-full rounded-3xl" style="box-shadow: 0px 10px 0 rgba(87, 46, 23, 1);">
                        <div class="flex h-full justify-center items-center gap-5 mx-10">
                            <div class="basis-1/3">
                                <img class="size-40" src="{{ asset('storage/assets/svg/arsip.svg') }}" class="h-12 mr-3" alt="Logo" />
                            </div>
                            <div class="basis-2/3">
                                <div class="flex flex-col gap-3">
                                    <h2 class="font-montserrat font-bold text-2xl">Data Perkara</h2>
                                    <p class="font-montserrat font-medium text-lg leading-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere eum delectus, animi possimus maiores mollitia.</p>
                                    <a href="{{route('guest.perkara.index')}}" class="font-montserrat font-semibold px-4 py-1.5 rounded-3xl bg-white w-1/2 text-center" style="box-shadow: 0px 5px 0 rgb(211, 211, 211);">Lihat data perkara</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 grow sm:mt-8 lg:mt-0 mx-20 mb-24 flex items-center">
        <div class="basis-1/3 px-40">
            <h1 class="text-5xl font-montserrat font-bold text-[#5B3018]">SOP Pengambilan Barang Bukti</h1>
        </div>
        <div class="basis-2/3">
            <div class="space-y-6 font-montserrat rounded-3xl p-6 flex justify-center items-center">
                <ol class="relative ms-3 border-s-4 border-[#D7BDA6]">
                    <li class="mb-10 ms-6">
                    <span class="absolute -start-[18px] flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 ring-8 ring-white dark:bg-[#AB7743] dark:ring-[#5B3018]">
                        <h1 class="text-white font-montserrat font-bold">1</h1>
                    </span>
                    <div class="ml-4">
                        <h4 class="text-base font-semibold text-gray-900">Memeriksa Status Barang Bukti</h4>
                        <p class="text-sm font-normal text-[#AA7743]">Pemohon memeriksa status barang bukti
                            (dapat diambil/belum dapat diambil)
                            pada menu daftar perkara</p>
                        </div>
                    </li>
                    
                    <li class="mb-10 ms-6">
                        <span class="absolute -start-[18px] flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 ring-8 ring-white dark:bg-[#AB7743] dark:ring-[#5B3018]">
                            <h1 class="text-white font-montserrat font-bold">2</h1>
                        </span>
                        <div class=" ml-4">
                            <h4 class="text-base font-semibold text-gray-900">Mengisi Form Pengambilan</h4>
                            <p class="text-sm font-normal text-[#AA7743]">Apabila status dapat diambil, pemohon
                                mengisi form pengambilan barang bukti
                                dan melengkapi dokumen pendukung
                                lainnya</p>
                                
                            </div>
                        </li>
                        
                        <li class="mb-10 ms-6">
                            <span class="absolute -start-[18px] flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 ring-8 ring-white dark:bg-[#AB7743] dark:ring-[#5B3018]">
                                <h1 class="text-white font-montserrat font-bold">3</h1>
                            </span>
                            <div class=" ml-4">
                                <h4 class="text-base font-semibold text-gray-900">Mengambil Barang Bukti</h4>
                                <p class="text-sm font-normal text-[#AA7743]">Pemohon mendatangi Kejaksaan Negeri
                                    Rokan Hilir untuk mengambil barang bukti</p>
                                    {{-- <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Products delivered</p> --}}
                                </div>
                            </li>
                            
                            <li class="mb-10 ms-6">
                                <span class="absolute -start-[18px] flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 ring-8 ring-white dark:bg-[#AB7743] dark:ring-[#5B3018]">
                                    <h1 class="text-white font-montserrat font-bold">4</h1>
                                </span>
                                <div class=" ml-4">
                                    <h4 class="text-base font-semibold text-gray-900">Verifikasi oleh Petugas
                                        Barang Bukti</h4>
                                    <p class="text-sm font-normal text-[#AA7743]">Petugas memverifikasi persyaratan dan
                                        menyiapkan barang bukti</p>
                                        {{-- <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Products delivered</p> --}}
                                </div>
                            </li>
                            
                            <li class="mb-10 ms-6">
                                <span class="absolute -start-[18px] flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 ring-8 ring-white dark:bg-[#AB7743] dark:ring-[#5B3018]">
                                    <h1 class="text-white font-montserrat font-bold">5</h1>
                                </span>
                                <div class=" ml-4">
                                    <h4 class="text-base font-semibold text-gray-900">Menerima Barang Bukti</h4>
                                    <p class="text-sm font-normal text-[#AA7743]">Petugas Barang Bukti dan Jaksa/Eksekutor
                                        menyerahkan Barang Bukti kepada
                                        Pemohon disertai dokumentasi</p>
                                </div>
                            </li>
                            <li class="ms-6">
                                <span class="absolute -start-[18px] flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 ring-8 ring-white dark:bg-[#AB7743] dark:ring-[#5B3018]">
                                    <h1 class="text-white font-montserrat font-bold">6</h1>
                                </span>
                                <div class="ml-4">
                                    <h4 class="text-base font-semibold text-gray-900">Selesai</h4>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
        </div>
    </div>
</div>
