<div>
    <div class="p-4 rounded-lg">
        <div class="relative mb-6 flex justify-between items-center">
            {{-- <div>
                <h1 class="text-4xl font-montserrat">
                    Welcome, <strong class="text-[#DEF261]">{{ auth()->user()->name }}</strong>
                </h1>
            </div> --}}
            <div class="bg-cover rounded-[30px] bg-[#5B3018]">
                <div class="bg-gradient-to-t from-[#5B3018] py-2 px-6 rounded-[30px]">
                    <h1 class="font-bold font-montserrat text-3xl text-white">📒 Data Perkara </h1>
                </div>
            </div>
        </div>
        <div>
            <section class="mt-4 ">
                <div class="max-w-screen-xl p-2 mx-auto lg:px-1">
                    <div class="bg-[#ab7743] border-2 border-[#5b3018] w-full relative sm:rounded-[30px] overflow-hidden " style="box-shadow: 0px 10px 0 rgba(87, 46, 23, 1);">
                        <div class="flex items-center justify-between d p-4 mx-2">
                            <div class="flex">
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
                                        placeholder="Search" required="">
                                </div>
                            </div>
                            <div class="text-left ml-4 flex space-x-3">
                                <a href="{{route('app.surat.create')}}" class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 mb-2 focus:outline-none" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
                                Tambah data
                                </a>
                            </div>
                            {{-- <div class="flex space-x-3">
                                <div class="flex space-x-3 items-center">
                                    <label class="w-20 text-sm font-medium text-gray-900">Bidang Urusan :</label>
                                    <select 
                                        wire:model.live = 'bidang'
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-40 p-2.5 ">
                                        <option value="">All</option> --}}
                                        {{-- @foreach ($bidangs as $bidang)
                                            <option value="{{$bidang->id}}">{{$bidang->bidang_urusan}}</option>
                                        @endforeach --}}
                                    {{-- </select>
                                </div>
                            </div> --}}
                        </div>
                        <div class="overflow-x-auto">
                            {{-- <h2 class="text-lg font-semibold mb-4">Daftar Semua Dakwaan</h2> --}}
                            <table class="min-w-full divide-y divide-gray-200 text-sm font-montserrat">
                                <thead class="text-xs text-white uppercase bg-[#855a2f]">
                                    <tr>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">#</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Nama Terdakwa</th>
                                        <th class="px-2 md:px-32 py-3 text-center font-semibold uppercase">Pasal yang Didakwakan</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">No. Putusan</th>
                                        <th class="px-2 md:px-24 py-3 text-center font-semibold uppercase">Tanggal Putusan</th>
                                        <th class="px-2 md:px-24 py-3 text-center font-semibold uppercase">Barang Bukti</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Jumlah</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Amar Putusan</th>
                                        <th class="px-2 md:px-6  py-3 text-center font-semibold uppercase">Register Barang Bukti</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase ">P-48</th>
                                        <th class="px-2 md:px-28 py-3 text-center font-semibold uppercase" style="width: 150px;">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($dakwaans as $i => $dakwaan)
                                    <tr class="odd:bg-[#a36d37] even:bg-[#855a2f]">
                                        <td class="px-2 md:px-6 py-4">{{ $i + 1 }}</td>
                                        <td class="px-2 md:px-6 py-4">
                                            @foreach ($dakwaan->terdakwaks as $terdakwa)
                                                {{ $terdakwa->nama }}
                                            @endforeach
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $dakwaan->pasal_didakwakan }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $dakwaan->nomor_putusan }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ \Carbon\Carbon::parse($dakwaan->tanggal_putusan)->translatedFormat('l, j F Y') }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            <div class="flex flex-col gap-8 items-start justify-start">
                                                @foreach ($dakwaan->barangBuktis as $barang_bukti)
                                                <div>
                                                    <span>{{ $barang_bukti->barang_bukti }}</span>
                                                </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            <div class="flex flex-col justify-between gap-8">
                                                @foreach ($dakwaan->barangBuktis as $barang_bukti)
                                                <div>
                                                    <span>{{ $barang_bukti->jumlah }}</span>
                                                </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $dakwaan->amar_barang_bukti }}
                                            {{-- <ul>
                                                @foreach ($dakwaan->barangBuktis->unique('amar_barang_bukti') as $barang_bukti)
                                                    <li>{{ $barang_bukti->amar_barang_bukti }}</li>
                                                @endforeach
                                            </ul> --}}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $dakwaan->nomor_register_barang_bukti }}
                                            {{-- <ul>
                                                @foreach ($dakwaan->barangBuktis->unique('nomor_register_barang_bukti') as $barang_bukti)
                                                    <li>{{ $barang_bukti->nomor_register_barang_bukti }}</li>
                                                @endforeach
                                            </ul> --}}
                                        </td>
                                        <td class="px-2 md:px-6 py-4 text-left">
                                            {{ $dakwaan->p48 }}
                                            {{-- <ul>
                                                @foreach ($dakwaan->barangBuktis->unique('p48') as $barang_bukti)
                                                    <li>{{ $barang_bukti->p48 }}</li>
                                                @endforeach
                                            </ul> --}}
                                        </td>
                                        <td class="px-2 md:px-6 py-4 text-center">
                                            @if ($dakwaan->status == "Dapat Diambil")
                                                <span class="px-2 py-2 bg-[#53A826] rounded-2xl">{{ $dakwaan->status }}</span>
                                            @else
                                                <span class="px-2 py-2 bg-[#ff0040] rounded-2xl">{{ $dakwaan->status }}</span>
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
                                    <label class="w-32 text-sm font-medium text-white">Per Page</label>
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
                            {{-- {{$indikators->links()}} --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
