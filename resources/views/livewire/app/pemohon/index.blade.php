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
                    <h1 class="font-bold font-montserrat text-3xl text-white">📒 Data Pemohon </h1>
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
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">No.</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Konfirmasi Pengambilan</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Tanggal Pengambilan</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Nama Terdakwa</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Nama Pemohon</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">NIK</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Tempat Lahir</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Tanggal Lahir</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Jenis Kelamin</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase">Alamat</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase ">Agama</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase ">Status Kawin</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase ">Pekerjaan</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase ">Nomor HP</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase ">KTP Pemohon</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase ">KTP Pemberi Kuasa</th>
                                        <th class="px-2 md:px-6 py-3 text-center font-semibold uppercase ">Dokumen pendukung</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($pemohons as $i => $pemohon)
                                    <tr class="odd:bg-[#a36d37] even:bg-[#855a2f]">
                                        <td class="px-2 md:px-6 py-4">{{ $i + 1 }}</td>
                                        <td class="px-2 md:px-6 py-4">
                                            <button class="py-1 px-4 bg-white text-[#855a2f] font-semibold text-center font-montserrat rounded-lg shadow-md" wire:click="confirm({{$pemohon->terdakwa->id}})">
                                                Konfirmasi pengambilan
                                            </button>
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ \Carbon\Carbon::parse($pemohon->tanggal_pengambilan)->translatedFormat('l, j F Y')}}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->terdakwa->nama }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->nama_pemohon }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->nik }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->tempat_lahir }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ \Carbon\Carbon::parse($pemohon->tanggal_lahir)->translatedFormat('l, j F Y')}}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->jenis_kelamin }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->alamat }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->agama }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->status_perkawinan }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->pekerjaan }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            {{ $pemohon->nomor_hp }}
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            @if ($pemohon->ktp_pemohon_path == null)
                                                -
                                            @else
                                                <a target="_blank" href="{{asset('storage/' . $pemohon->ktp_pemohon_path)}}">
                                                    <div class="py-1 px-4 bg-white text-[#855a2f] font-semibold text-center font-montserrat rounded-lg shadow-md">
                                                        <span>File</span>
                                                    </div>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            @if ($pemohon->ktp_pemberi_kuasa_path == null)
                                                -
                                            @else
                                                <a target="_blank" href="{{asset('storage/' . $pemohon->ktp_pemberi_kuasa_path)}}">
                                                    <div class="py-1 px-4 bg-white text-[#855a2f] font-semibold text-center font-montserrat rounded-lg shadow-md">
                                                        <span>File</span>
                                                    </div>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="px-2 md:px-6 py-4">
                                            @if ($pemohon->dokumen_pendukung_path == null)
                                                -
                                            @else
                                            <a target="_blank" href="{{asset('storage/' . $pemohon->dokumen_pendukung_path)}}">
                                                <div class="py-1 px-4 bg-white text-[#855a2f] font-semibold text-center font-montserrat rounded-lg shadow-md">
                                                    <span>File</span>
                                                </div>
                                            </a>
                                            @endif
                                        </td>
                                        {{-- <td class="px-2 md:px-6 py-4">
                                            <div class="flex flex-col gap-8 items-start justify-start">
                                                @foreach ($pemohon->barangBuktis as $barang_bukti)
                                                <div>
                                                    <span>{{ $barang_bukti->barang_bukti }}</span>
                                                </div>
                                                @endforeach
                                            </div>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>                            
                            
                        </div>
                        
                        <div class="py-4 px-3">
                            <div class="flex ">
                                <div class="flex space-x-4 items-center mb-3">
                                    <label class="w-32 text-sm font-medium text-white">Tampilkan dalam</label>
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
                        </div>
                        {{$pemohons->links()}}
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
