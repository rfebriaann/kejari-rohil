<div class="py-16 bg-[#5B3018]">
    <div class="flex flex-col lg:flex-row lg:justify-between items-center mx-4 md:mx-20 lg:mx-40">
        <div class="flex gap-4 mb-10 lg:mb-0">
            <img class="size-28" src="{{ asset('storage/assets/img/logokejari.png') }}" alt="Animated SVG">
            <img class="size-28" src="{{ asset('storage/assets/img/logoppa.png') }}" alt="Animated SVG">
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
    <div class="flex items-center gap-6 justify-end mx-4 md:mx-20 lg:mx-40">
        <span class="flex gap-2 items-center ">
            <svg class="text-white"  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-8a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-4 5a4 4 0 0 0 -3.995 3.8l-.005 .2a4 4 0 1 0 4 -4m4.5 -1.5a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" /></svg>
            <a href="https://www.instagram.com/papbb_kejarirohil?igsh=MTVyeGRqYTN2a2xvYQ%3D%3D" class="font-montserrat text-white" target="_blank">@papbb_kejarirohil</a>
        </span>

        <span class="flex gap-2 items-center ">
            <svg class="text-white"  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 3a1 1 0 0 1 .877 .519l.051 .11l2 5a1 1 0 0 1 -.313 1.16l-.1 .068l-1.674 1.004l.063 .103a10 10 0 0 0 3.132 3.132l.102 .062l1.005 -1.672a1 1 0 0 1 1.113 -.453l.115 .039l5 2a1 1 0 0 1 .622 .807l.007 .121v4c0 1.657 -1.343 3 -3.06 2.998c-8.579 -.521 -15.418 -7.36 -15.94 -15.998a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" /></svg>
            <h2 class="font-montserrat text-white">+62 821-1905-6383</h2>
        </span>
    </div>
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