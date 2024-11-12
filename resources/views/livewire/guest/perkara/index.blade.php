<div>
    <div class="w-full h-auto flex mt-24 mb-24">
        <div class="sm:p-2 md:p-0 sm:mx-0 md:mx-20 h-full w-full rounded-3xl overflow-hidden">
            <div class="lex flex-col bg-[#5B3018] w-full h-full rounded-3xl overflow-hidden sm:gap-10" style="box-shadow: 0px 14px 0 rgba(87, 46, 23, 1);">
                <div class="flex basis-2/3">
                    <div class="flex flex-col w-full h-full sm:basis-3/3 md:basis-2/3 p-10 justify-start items-start gap-6 sm:mx-0 md:mx-10">
                        <div>
                            <h1 class="font-montserrat font-semibold text-4xl text-white">
                                Data Perkara
                            </h1>
                        </div>
                        {{-- <div class="">
                            <p class="font-montserrat text-white font-normal text-lg">Apabila anda membutuhkan surat kuasa, anda bisa mendownloadnya disini untuk kebutuhap dokumen pendukung</p>
                        </div>
                        <div>
                            <a href="" class="font-montserrat font-semibold px-4 py-2 rounded-3xl bg-white w-1/2 text-center" style="box-shadow: 0px 5px 0 rgb(211, 211, 211);">Download Surat Kuasa</a>
                        </div> --}}
                        <span class="text-white font-montserrat text-lg sm:w-full md:w-1/2 leading-6">Download semua data perkara dengan mengklik tombol button dibawah</span>
                        {{-- <button class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none" wire:click="export">Export to Excel</button> --}}
                    </div>
                    <div class="basis-1/3 bg-cover bg-gradient-to-t sm:hidden md:block" style="background-image: url('storage/assets/img/bg-1.jpeg')">
                        <div class="bg-cover bg-gradient-to-r from-[#5B3018] w-full h-full">
                        </div>
                    </div>
                </div>
                <div class="basis-2/3">
                    <div>
                        <section class="">
                            <div class="bg-[#ab7743] border-r-2 border-l-2 border-b-2s  border-[#5b3018] ">
                                <div class="flex sm:flex-col md:flex-row items-center justify-between d p-4 mx-2 sm:gap-4 md:gap-0">
                                    <div class="flex sm:w-full md:w-auto">
                                        <div class="relative w-full">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-white"
                                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input  type="text"
                                                wire:model.live = 'search'
                                                class="bg-[#b7957f] border-2 border-[#5B3018] text-white text-sm rounded-2xl block w-full pl-10 p-2 placeholder-white"
                                                placeholder="Cari nama terdakwa" required="">
                                        </div>
                                    </div>
                                    <div class="flex gap-5">
                                        <div>
                                            <label class="text-white font-montserrat text-sm" for="month">Bulan :</label>
                                            <select wire:model.live="month" id="month" class="bg-[#b7957f] border-2 border-[#5B3018] text-white text-sm rounded-2xl block w-full pl-10 p-2 placeholder-white">
                                                <option value="">-- Select Month --</option>
                                                @foreach(range(1, 12) as $m)
                                                    <option value="{{ $m }}">{{ date('F', mktime(0, 0, 0, $m, 1)) }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div>
                                            <label class="text-white font-montserrat text-sm" for="year">Tahun :</label>
                                            <select wire:model.live="year" id="year" class="bg-[#b7957f] border-2 border-[#5B3018] text-white text-sm rounded-2xl block w-full pl-10 p-2 placeholder-white">
                                                <option value="">-- Select Year --</option>
                                                @foreach(range(date('Y'), date('Y') - 10) as $y)
                                                    <option value="{{ $y }}">{{ $y }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative overflow-x-auto ">
                                    <table class="w-full text-sm text-left rtl:text-right text-white">
                                        <thead class="text-xs text-white uppercase bg-[#966534] text-center">
                                            <tr>
                                                <th scope="col" class="px-4 py-3">
                                                    No.
                                                </th>
                                                <th scope="col" class="px-10 py-3">
                                                    Nama Terdakwa
                                                </th>
                                                <th scope="col" class="px-20 py-3">
                                                    Pasal yang didakwakan
                                                </th>
                                                <th scope="col" class="px-10 py-3">
                                                    No. Putusan
                                                </th>
                                                <th scope="col" class="px-8 py-3">
                                                    Tanggal Putusan
                                                </th>
                                                <th scope="col" class="px-8 py-3">
                                                    Barang Bukti
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Jumlah
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Lokasi Barang Bukti
                                                </th>
                                                <th scope="col" class="px-10 py-3">
                                                    Amar Putusan
                                                </th>
                                                <th scope="col" class="px-10 py-3">
                                                    No. Register Barang Bukti
                                                </th>
                                                <th scope="col" class="px-2 py-3">
                                                    P-48
                                                </th>
                                                <th scope="col" class="px-24 py-3">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dakwaans as $i => $dakwaan)
                                                <tr class="odd:bg-[#a36d37] even:bg-[#855a2f] border-b border-white/20">
                                                    <td class="px-4 py-4">
                                                        {{ $i + 1 }}
                                                    </td>
                                                    <th scope="row" class="px-10 py-4 font-medium whitespace-nowrap text-white">
                                                        @foreach ($dakwaan->terdakwaks as $terdakwa)
                                                            {{ $terdakwa->nama }}
                                                        @endforeach
                                                    </th>
                                                    <td class="px-20 py-4">
                                                        {{ $dakwaan->pasal_didakwakan }}
                                                    </td>
                                                    <td class="px-10 py-4">
                                                        {{ $dakwaan->nomor_putusan }}
                                                    </td>
                                                    <td class="px-8 py-4">
                                                        {{ 
                                                            \Carbon\Carbon::parse($dakwaan->tanggal_putusan)->translatedFormat('l, j F Y')
                                                        }}
                                                    </td>
                                                    <td class="px-8 py-4">
                                                        <div class="flex flex-col gap-8 items-start justify-start">
                                                            @foreach ($dakwaan->barangBuktis as $barang_bukti)
                                                            <div>
                                                                <span>{{ $barang_bukti->barang_bukti }}</span>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="flex flex-col justify-between gap-8">
                                                            @foreach ($dakwaan->barangBuktis as $barang_bukti)
                                                            <div>
                                                                <span>{{ $barang_bukti->jumlah }}</span>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="flex flex-col justify-between gap-8">
                                                            @foreach ($dakwaan->barangBuktis as $barang_bukti)
                                                            <div>
                                                                <span>{{ $barang_bukti->lokasi }}</span>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                    <td class="px-10 py-4">
                                                        {{ $dakwaan->amar_barang_bukti }}
                                                    </td>
                                                    <td class="px-10 py-4">
                                                        {{ $dakwaan->nomor_register_barang_bukti }}
                                                    </td>
                                                    <td class="px-2 py-4">
                                                        {{ $dakwaan->p48 }}
                                                    </td>
                                                    <td class="px-8 py-4 text-center">
                                                        @if ($dakwaan->status == "Dapat Diambil")
                                                    <span class="px-4 py-2 bg-[#53A826] rounded-2xl">{{ $dakwaan->status }}</span>
                                                @else
                                                    <span class="px-4 py-2 bg-[#ff0040] rounded-2xl">{{ $dakwaan->status }}</span>
                                                @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="py-4 px-3">
                                    <div class="flex ">
                                        <div class="flex space-x-4 items-center mb-3">
                                            <label class="w-32 text-xs font-medium text-white">Tampilkan dalam</label>
                                            <select
                                                wire:model.live='perPage' 
                                                class="bg-[#5B3018] rounded-xl border text-white text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{$dakwaans->links()}}
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
