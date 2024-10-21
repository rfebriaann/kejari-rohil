<div>
    <div class="p-4 rounded-lg dark:border-gray-700">
        <div class="relative mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-4xl font-montserrat">
                    Hello again.. <strong class="text-[#DEF261]">{{ auth()->user()->name }}</strong>
                </h1>
            </div>
            <div class="bg-cover rounded-[30px] bg-[#FF8653]">
                <div class="bg-gradient-to-t from-[#FF9E75] py-4 px-4 rounded-[30px]">
                    <h1 class="font-bold font-montserrat text-4xl text-white">📒 Tambah Surat </h1>
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
                                <div class="flex">
                                    <div class="basis-2/4 clear-start border border-l-8 border-l-[#BE95FF] border-r-0 border-t-0 border-b-0 px-4">
                                        <p>Nomor Putusan</p>
                                    </div>
                                    <div class="basis-2/4">
                                        <input  type="text"
                                                wire:model="nomor_putusan"
                                                class="bg-[#2b2f3f] p-4 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-10 text-start"
                                                placeholder="Search" required="">
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="basis-2/4 clear-start border border-l-8 border-l-[#BE95FF] border-r-0 border-t-0 border-b-0 px-4">
                                        <p>Tanggal Putusan</p>
                                    </div>
                                    <div class="basis-2/4">
                                        <input  type="date" wire:model="tanggal_putusan"
                                                class="bg-[#2b2f3f] p-4 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-10 text-start"
                                                placeholder="Search" required="">
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="basis-2/4 clear-start border border-l-8 border-l-[#BE95FF] border-r-0 border-t-0 border-b-0 px-4">
                                        <p>Nama Terdakwa</p>
                                    </div>
                                    <div class="basis-2/4 text-black">
                                        <div class="flex flex-col gap-4">
                                            @foreach ($nama_terdakwa as $index => $terdakwa)
                                            <input type="text" wire:model="nama_terdakwa.{{ $index }}" class="bg-[#2b2f3f] p-4 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-10 text-start">
                                            <div class="flex gap-4">
                                                <button type="button" wire:click="removeTerdakwa({{ $index }})" class="font-montserrat font-medium text-white bg-[#e13775] hover:bg-[#e8588d] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-4 py-1.5 mb-2 focus:outline-nonee">Hapus Terdakwa</button>
                                            </div>
                                                @endforeach
                                            <div class="flex gap-4">
                                                <button type="button" wire:click="addTerdakwa" class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 mb-2 focus:outline-none">Tambah Terdakwa</button>
                                                @error('nama_terdakwa.*') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="basis-2/4 clear-start border border-l-8 border-l-[#BE95FF] border-r-0 border-t-0 border-b-0 px-4">
                                        <p>Barang Bukti</p>
                                    </div>
                                    <div class="basis-2/4 text-black">
                                        @foreach ($barang_bukti as $index => $bukti)
                                            <div class="flex gap-3">
                                                <div class="basis-1/2">
                                                    <input type="text" wire:model="barang_bukti.{{ $index }}" placeholder="Barang Bukti" class="bg-[#2b2f3f] p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-5 text-start">
                                                </div>
                                                <div class="basis-1/2">
                                                    <input type="text" wire:model="keterangan_barang_bukti.{{ $index }}" placeholder="Keterangan" class="bg-[#2b2f3f] p-2 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-5 text-start">
                                                </div>
                                            </div>
                                            <div class="flex gap-4 mt-4">
                                                <button type="button" wire:click="removeBarangBukti({{ $index }})" class="font-montserrat font-medium text-white bg-[#e13775] hover:bg-[#e8588d] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-4 py-1.5 mb-2 focus:outline-none">Hapus Barang Bukti</button>
                                            </div>
                                        @endforeach
                                        <button type="button" wire:click="addBarangBukti" class="font-montserrat font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 mb-2 focus:outline-none">Tambah Barang Bukti</button>
                                        @error('barang_bukti.*') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="basis-2/4 clear-start border border-l-8 border-l-[#BE95FF] border-r-0 border-t-0 border-b-0 px-4">
                                        <p>Nomor Register Barang Bukti</p>
                                    </div>
                                    <div class="basis-2/4">
                                        <input  type="text"
                                                wire:model="nomor_register_barang_bukti"
                                                class="bg-[#2b2f3f] p-4 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-10 text-start"
                                                placeholder="Search" required="">
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="basis-2/4 clear-start border border-l-8 border-l-[#BE95FF] border-r-0 border-t-0 border-b-0 px-4">
                                        <p>Pasal yang Didakwakan</p>
                                    </div>
                                    <div class="basis-2/4">
                                        <input  type="text"
                                                wire:model="pasal_didakwakan"
                                                class="bg-[#2b2f3f] p-4 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-10 text-start"
                                                placeholder="Search" required="">
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="basis-2/4 clear-start border border-l-8 border-l-[#BE95FF] border-r-0 border-t-0 border-b-0 px-4">
                                        <p>Keputusan</p>
                                    </div>
                                    <div class="basis-2/4">
                                        <input  type="text"
                                                wire:model="keputusan"
                                                class="bg-[#2b2f3f] p-4 border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-10 text-start"
                                                placeholder="Search" required="">
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="bg-gray-700 text-white px-2 py-2 rounded-xl">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
