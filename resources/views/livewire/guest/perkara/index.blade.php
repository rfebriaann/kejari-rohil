<div>
    <div class="w-full h-auto flex mt-24 mb-24">
        <div class="mx-20 h-full w-full rounded-3xl overflow-hidden">
            <div class="flex flex-col bg-[#5B3018] h-full rounded-3xl overflow-hidden" style="box-shadow: 0px 14px 0 rgba(87, 46, 23, 1);">
                <div class="flex basis-1/3">
                    <div class="flex flex-col w-full h-full basis-2/3 p-10 justify-start items-start gap-6">
                        <div>
                            <h1 class="font-montserrat font-semibold text-4xl text-white">
                                Tabel Data Perkara
                            </h1>
                        </div>
                        {{-- <div class="">
                            <p class="font-montserrat text-white font-normal text-lg">Apabila anda membutuhkan surat kuasa, anda bisa mendownloadnya disini untuk kebutuhap dokumen pendukung</p>
                        </div>
                        <div>
                            <a href="" class="font-montserrat font-semibold px-4 py-2 rounded-3xl bg-white w-1/2 text-center" style="box-shadow: 0px 5px 0 rgb(211, 211, 211);">Download Surat Kuasa</a>
                        </div> --}}
                    </div>
                </div>
                <div class="basis-2/3">
                    <div>
                        <section class="mt-4 ">
                            <div class="bg-[#ab7743] border-2 border-[#5b3018] sm:rounded-[30px]">
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
                                </div>

                                <div class="relative overflow-x-auto ">
                                    <table class="w-full text-sm text-left rtl:text-right text-white">
                                        <thead class="text-xs text-white uppercase bg-[#966534] text-center">
                                            <tr>
                                                <th scope="col" class="px-4 py-3">
                                                    #
                                                </th>
                                                <th scope="col" class="px-10 py-3">
                                                    Nama Terdakwa
                                                </th>
                                                <th scope="col" class="px-20 py-3">
                                                    Pasal Dakwaan
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
                                                <th scope="col" class="px-10 py-3">
                                                    Amar Putusan
                                                </th>
                                                <th scope="col" class="px-10 py-3">
                                                    Register Barang Bukti
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
                                                    <th scope="row" class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                        </section>
                    </div>
                </div>
        </div>
    </div>
</div>
