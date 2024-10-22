<div>
    <div class="p-4 rounded-lg dark:border-gray-700">
        <div class="relative mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-4xl font-montserrat">
                    Hello again.. <strong class="text-[#DEF261]">{{ auth()->user()->name }}</strong>
                </h1>
            </div>
            <div class="bg-cover rounded-[30px] bg-[#FF8653]">
                <div class="bg-gradient-to-t from-[#FF9E75] py-2 px-6 rounded-[30px]">
                    <h1 class="font-bold font-montserrat text-3xl text-white">📒 Tambah Surat </h1>
                </div>
            </div>
        </div>
        <div>
            <section class="mt-4 ">
                <div class="max-w-screen-xl p-2 mx-auto lg:px-1">
                    <div class="bg-[#1E212D] w-full relative sm:rounded-[30px] overflow-hidden ">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form wire:submit.prevent="submit">
                            <div class="flex flex-col d p-10 gap-6">
                                <h1 class="text-xl font-montserrat font-semibold">Data Dakwaan</h1>
                                <div class="flex gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4">
                                    <div>
                                        <label for="">Nomor Putusan</label>
                                        <input  type="text"
                                        wire:model="nomor_putusan"
                                        class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="Nomor Putusan" required="">
                                    </div>
                                    <div>
                                        <label for="">Tanggal</label>
                                        <input  type="text"
                                        wire:model="tanggal_putusan"
                                        class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="Tanggal" required="">
                                    </div>
                                    <div>
                                        <label for="">Pasal Didakwakan</label>
                                        <input  type="text"
                                        wire:model="pasal_didakwakan"
                                        class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="Pasal Didakwakan" required="">
                                    </div>
                                    <div>
                                        <label for="">Keputusan</label>
                                        <input  type="text"
                                        wire:model="keputusan"
                                        class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="Keputusan" required="">
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
                                            class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                            placeholder="Nama Terdakwa" required="">
                                        </div>
                                        <div class="basis-1/3">
                                            <button type="button" wire:click="addTerdakwa" class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none">Tambah Terdakwa</button> 
                                        </div>
                                    </div>
                                    <div class="flex mx-4">
                                        @foreach($terdakwaks as $terdakwa)
                                            <span class="text-white font-medium font-montserrat italic">{{ $terdakwa['nama'] }}, &nbsp</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col d px-10 -mt-4 pb-4 gap-4">
                                <h1 class="text-xl font-montserrat font-semibold">Barang Bawaan</h1>
                                <div class="flex gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-2 items-end">
                                    <div>
                                        <label for="">Nama Barang Bukti</label>
                                        <input  type="text"
                                        wire:model="barang_bukti"
                                        class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="Nama Barang Bukti" required="">
                                    </div>
                                    <div>
                                        <label for="">Keterangan Barang Bukti</label>
                                        <input  type="text"
                                        wire:model="keterangan_barang_bukti"
                                        class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="Keterangan Barang Bukti" required="">
                                    </div>
                                    <div>
                                        <label for="">No. Barang Bukti</label>
                                        <input  type="text"
                                        wire:model="nomor_register_barang_bukti"
                                        class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="No. Register Barang Bukti" required="">
                                    </div>
                                    <div>
                                        <label for="">Keputusan</label>
                                        <input  type="text"
                                        wire:model="keputusan_barang_bukti"
                                        class="bg-[#2b2f3f] mt-2 p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start"
                                        placeholder="Keputusan Barang" required="">
                                    </div>
                                    <div>
                                        <button type="button" wire:click="addBarangBukti" class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none">Tambah</button>
                                    </div>
                                    <div class="flex mx-4">
                                        @foreach($barang_buktis as $barang_bukti)
                                            <li>{{ $barang_bukti['barang_bukti'] }} - {{ $barang_bukti['keterangan_barang_bukti'] }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="font-montserrat mx-10 font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none m-4">Simpan Data</button>
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