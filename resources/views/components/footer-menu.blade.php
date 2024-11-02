<div class="py-16 bg-[#5B3018]">
    <div class="flex flex-col lg:flex-row lg:justify-between items-center mx-4 md:mx-20 lg:mx-40">
        <div class="mb-10 lg:mb-0">
            <img class="size-28" src="{{ asset('storage/assets/img/logokejari.png') }}" alt="Animated SVG">
        </div>
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-28">
            <div class="flex flex-col gap-5">
                <div>
                    <h2 class="font-montserrat font-semibold text-white">Beranda</h2>
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <div>
                    <h2 class="font-montserrat font-semibold text-white">Form Permohonan</h2>
                </div>
                <div>
                    {{-- <p class="font-montserrat text-white">Desa Cantik</p> --}}
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <div>
                    <h2 class="font-montserrat font-semibold text-white">Data Perkara</h2>
                </div>
                <div>
                    {{-- <p class="font-montserrat text-white">Desa Cantik</p> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div wire:ignore.self class="flex items-center justify-center">
        <h2 class="font-montserrat text-white">Total pengunjung : &nbsp</h2>
        <p class="font-montserrat text-white capitalize font-medium py-0 px-2 bg-[#F56833] shadow-md border-2 rounded-md" id="receivedData"> </p>
</div> --}}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Listener untuk menangkap event 'dataSent' dari Komponen Pertama
        Livewire.on('dataSent', (data) => {
            console.log(data[0].data); // Tambahkan log untuk debugging
            document.getElementById('receivedData').textContent = " " + data[0].data + " "; // Ambil data yang dikirim
        });
    });
</script>