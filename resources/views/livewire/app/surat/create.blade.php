<div>
    <div class="p-4 rounded-lg">
        <div class="relative mb-6 flex justify-between items-center">
            {{-- <div>
                <h1 class="text-4xl font-montserrat">
                    Hello again.. <strong class="text-[#DEF261]">{{ auth()->user()->name }}</strong>
                </h1>
            </div> --}}
            <div class="bg-cover rounded-[30px] bg-[#5B3018]">
                <div class="bg-gradient-to-t from-[#5B3018] py-2 px-6 rounded-[30px]">
                    <h1 class="font-bold font-montserrat text-3xl text-white">📒 Tambah Data Perkara </h1>
                </div>
            </div>
        </div>
        <div>
            <section class="mt-4 ">
                <div class="max-w-screen-xl p-2 mx-auto lg:px-1">
                    <div class="bg-[#ab7743] border-2 border-[#5b3018]  w-full relative sm:rounded-[30px] overflow-hidden" style="box-shadow: 0px 10px 0 rgba(87, 46, 23, 1);">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form wire:submit.prevent="submit">
                            <div class="flex flex-col d p-10 gap-6 w-full">
                                <h1 class="text-xl font-montserrat font-semibold">Data Perkara</h1>
                                <div class="flex gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4">
                                    <div class="basis-3/5">
                                        <label for="">Nomor Putusan</label>
                                        <input  type="text"
                                        wire:model="nomor_putusan"
                                        class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                        placeholder="Nomor Putusan" required="">
                                    </div>
                                    <div>
                                        <label for="">Tanggal</label>
                                        <input  type="date"
                                        wire:model="tanggal_putusan"
                                        class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2  text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="Tanggal" required="">
                                    </div>
                                    <div>
                                        <label for="">Pasal Didakwakan</label>
                                        <input  type="text"
                                        wire:model="pasal_didakwakan"
                                        class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                        placeholder="Pasal Didakwakan" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col d px-10 -mt-4 pb-10 gap-6">
                                <h1 class="text-xl font-montserrat font-semibold">Nama Terdakwa</h1>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                    <div class="flex w-full items-end gap-5">
                                        <div class="basis-2/3">
                                            <label for="">Nama Terdakwa</label>
                                            <input  type="text"
                                            wire:model="nama_terdakwa"
                                            class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                            placeholder="Nama Terdakwa">
                                        </div>
                                    </div>
                                    {{-- <div class="flex mx-4">
                                        @foreach($terdakwaks as $terdakwa)
                                            <span class="text-white font-medium font-montserrat italic">{{ $terdakwa['nama'] }}, &nbsp</span>
                                        @endforeach
                                    </div> --}}
                                </div>
                            </div>
                            <div class="flex flex-col d px-10 -mt-4 pb-4 gap-4">
                                <h1 class="text-xl font-montserrat font-semibold">Data Barang Bukti</h1>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-2">
                                    <div class="flex gap-4">
                                        <div class="flex flex-col w-1/2">
                                            <div class="">
                                                <label for="">Nama Barang Bukti</label>
                                                <input  type="text"
                                                wire:model="barang_bukti"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Nama Barang Bukti">
                                            </div>
                                            
                                        </div>
                                        <div class="flex flex-col w-1/2">
                                            <div class="">
                                                <label for="">Jumlah</label>
                                                <input  type="text"
                                                wire:model="jumlah"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Jumlah barang bukti">
                                            </div>
                                        </div>
                                        <div class="flex flex-col w-1/2">
                                            <div class="">
                                                <label for="">Lokasi barang bukti</label>
                                                <input  type="text"
                                                wire:model="lokasi"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Lokasi barang bukti">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 gap-4 mx-4">
                                        @foreach($barang_buktis as $index => $barang_bukti)
                                            <div class="flex">
                                                <div class="flex flex-col">
                                                    <span>
                                                        Nama barang bukti : {{ $barang_bukti['barang_bukti']}}
                                                    </span>
                                                    <span>
                                                        Jumlah :{{ $barang_bukti['jumlah']}}
                                                    </span>
                                                    <span>
                                                        Lokasi :{{ $barang_bukti['lokasi']}}
                                                    </span>
                                                    <span class="flex gap-3 mt-2 text-white font-medium font-montserrat italic">
                                                        {{-- {{ $barang_bukti['barang_bukti'] }} - {{ $barang_bukti['jumlah'] }} - {{ $barang_bukti['lokasi'] }}, --}}
                                                        <button type="button" wire:click="editBarangBukti({{ $index }})" class="text-white underline">
                                                            <span class="flex gap-1">
                                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                                                Edit
                                                            </span>
                                                        </button>
                                                        <button type="button" wire:click="deleteBarangBukti({{ $index }})" class="text-white underline">
                                                            <span class="flex gap-1">
                                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                Hapus data
                                                            </span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                    <div class="my-4">
                                        <button type="button" wire:click="addBarangBukti" class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none">
                                            {{ $editingIndex === null ? 'Tambah Barang Bukti' : 'Update Barang Bukti' }}
                                        </button>
                                    </div>
                                    {{-- <div class="flex mx-4">
                                        @foreach($barang_buktis as $barang_bukti)
                                            <span class="text-white font-medium font-montserrat italic">{{ $barang_bukti['barang_bukti'] }} - {{ $barang_bukti['jumlah'] }} - {{ $barang_bukti['lokasi'] }},&nbsp</span>
                                        @endforeach
                                    </div>
                                    <div class="">
                                        <button type="button" wire:click="addBarangBukti" class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none">Tambah Barang Bukti</button>
                                    </div> --}}
                                </div>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-2">
                                    <div class="flex gap-9">
                                        <div class="flex flex-col w-1/2 gap-4">
                                            <div class="">
                                                <label for="">Amar Putusan</label>
                                                <input  type="text"
                                                wire:model="amar_barang_bukti"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Amar putusan">
                                            </div>
                                            <div class="">
                                                <label for="">Nomor Register</label>
                                                <input  type="text"
                                                wire:model="nomor_register_barang_bukti"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Nomor Register Barang Bukti">
                                            </div>
                                        </div>
                                        <div class="flex flex-col w-1/2 gap-4">
                                            <div class="">
                                                <label for="">P-48</label>
                                                <input  type="text"
                                                wire:model="p48"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Kode P-48">
                                            </div>
                                            <div class="">
                                                <label for="">Status</label>
                                                <select wire:model="status" class="bg-[#b7957f] mt-2 p-2 border-2  border-[#5B3018] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start">
                                                    <option value="">-- Pilih status --</option>
                                                    <option value="Dapat Diambil">Dapat diambil</option>
                                                    <option value="Belum Dapat Diambil">Belum dapat diambil</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="font-montserrat mx-10 font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none m-4">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        {{-- @if (session()->has('message'))
            <div>{{ session('message') }}</div>
        @endif --}}
    </div>
</div>


{{-- <input  type="text"
wire:model="nomor_putusan"
class="bg-[#2b2f3f] p-4 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-10 text-start"
placeholder="Search" required=""> --}}


{{-- <button type="button" wire:click="removeTerdakwa({{ $index }})" class="font-montserrat font-medium text-white bg-[#e13775] hover:bg-[#e8588d] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-4 py-1.5 mb-2 focus:outline-nonee">Hapus Terdakwa</button> --}}


{{-- <button type="button" wire:click="addTerdakwa" class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 mb-2 focus:outline-none">Tambah Terdakwa</button> --}}