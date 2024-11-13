<div>
    <div class="w-full h-auto flex mt-24 mb-12">
        <div class="sm:px-2 sm:mx-0 md:mx-20 h-full w-full rounded-3xl">
            <div class="flex flex-col bg-[#5B3018] w-full h-full rounded-3xl overflow-hidden sm:gap-10" style="box-shadow: 0px 14px 0 rgba(87, 46, 23, 1);">
                <div class="flex">
                    <div class="flex flex-col w-full h-full basis-2/3 sm:p-10 md:p-20 justify-start items-start gap-6">
                        <div>
                            <h1 class="font-montserrat font-semibold text-4xl text-white">
                                Input data permohonan anda
                            </h1>
                        </div>
                        <div class="">
                            <p class="font-montserrat text-white font-normal text-lg">Apabila anda membutuhkan format surat kuasa, anda bisa mendonwloadnya disini</p>
                        </div>
                        <div>
                            <a download target="_blank" href="https://drive.google.com/folderview?id=1TTjhzjabkb23e9tvqo-h3Mq6HH2ebQdJ" class="font-montserrat font-semibold px-4 py-2 rounded-3xl bg-white w-1/2 text-center" style="box-shadow: 0px 5px 0 rgb(211, 211, 211);">Download Surat Kuasa</a>
                        </div>
                    </div>
                    <div class="basis-1/3 bg-cover bg-gradient-to-t sm:hidden md:block" style="background-image: url('storage/assets/img/bg-1.jpeg')">
                        <div class="bg-cover bg-gradient-to-r from-[#5B3018] w-full h-full">
                            {{-- <img class="object-cover h-full w-full overflow-hidden" src="{{ asset('storage/assets/img/bg2.png') }}" alt=""> --}}
                        </div>
                    </div>
                </div>
                
                <div class="w-full h-full bg-[#D7BDA6] sm:p-0 md:p-20 border-l-2 border-r-2 border-[#5b3018]">
                    <form wire:submit.prevent="submit">
                    <div class="flex flex-col w-full">
                        <div>
                            <div class="flex flex-col d px-10 sm:mt-8 md:-mt-4 pb-10 gap-6">
                                <h1 class="text-xl font-montserrat font-semibold">Nama Terdakwa</h1>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                    <div class="flex w-full items-end gap-5">
                                        <div class="w-full relative">
                                            <span class="text-red-800">
                                                *
                                                <label for="" class="text-black">Nama Terdakwa</label>
                                            </span>
                                            <input type="text"
                                                wire:model="nama_terdakwa"
                                                wire:keyup="searchTerdakwa"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 placeholder:text-white"
                                                placeholder="Nama Terdakwa">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('nama_terdakwa') {{ $message }} @enderror</span>
                                            <!-- Dropdown Suggestions -->
                                            @if(!empty($suggestions))
                                                <div class="absolute z-10 w-full bg-[#5B3018] text-white rounded-xl -mt-4">
                                                    @foreach($suggestions as $suggestion)
                                                        <div wire:click="selectSuggestion('{{ $suggestion['id'] }}', '{{ $suggestion['nama'] }}')"
                                                            class="p-2 cursor-pointer hover:bg-[#BB91FF] rounded-lg">
                                                            {{ $suggestion['nama'] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="basis-2/3 w-full">
                                            <span class="text-red-800">
                                                *
                                                <label class="text-black" for="">Tanggal Pengambilan</label>
                                            </span>
                                            <input  type="date"
                                            wire:model="tanggal_pengambilan"
                                            class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                            placeholder="Tanggal pengambilan">
                                            <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('tanggal_pengambilan') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col d px-10 sm:mt-0 md:-mt-4 pb-10 gap-6">
                                <div>
                                    <h1 class="text-xl font-montserrat font-semibold">Data Pemohon</h1>
                                    <p class="font-montserrat font-medium italic text-sm">*Isi data pemohon sesuai dengan KTP</p>
                                </div>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                    <div class="flex flex-col w-full sm:gap-0 md:gap-3">
                                        <div class="flex sm:flex-col md:flex-row w-full items-end sm:gap-0 md:gap-5">
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label for="" class="text-black">Nama Pemohon</label>
                                                </span>
                                                <input  type="text"
                                                wire:model="nama_pemohon"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Nama Pemohon">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('nama_pemohon') {{ $message }} @enderror</span>
                                            </div>
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">NIK</label>
                                                </span>
                                                <input  type="text"
                                                wire:model="nik"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="NIK">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('nik') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="flex sm:flex-col md:flex-row w-full items-end sm:gap-0 md:gap-5">
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">Tempat Lahir</label>
                                                </span>
                                                <input  type="text"
                                                wire:model="tempat_lahir"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Tempat Lahir">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('tempat_lahir') {{ $message }} @enderror</span>
                                            </div>
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">Tanggal Lahir</label>
                                                </span>
                                                <input  type="date"
                                                wire:model="tanggal_lahir"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Tanggal Lahir">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('tanggal_lahir') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="flex sm:flex-col md:flex-row w-full items-end sm:gap-0 md:gap-5">
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">Jenis Kelamin</label>
                                                </span>
                                                <select wire:model="jenis_kelamin" class="bg-[#b7957f] mt-2 p-2 border-2  border-[#5B3018] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start">
                                                    <option value="">-- Jenis Kelamin --</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('jenis_kelamin') {{ $message }} @enderror</span>
                                            </div>
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">Agama</label>
                                                </span>
                                                <input  type="text"
                                                wire:model="agama"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Agama">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('agama') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="flex sm:flex-col md:flex-row w-full items-end sm:gap-0 md:gap-5">
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">Alamat</label>
                                                </span>
                                                <input  type="text"
                                                wire:model="alamat"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Alamat">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('alamat') {{ $message }} @enderror</span>
                                            </div>
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">Status Perkawinan</label>
                                                </span>
                                                <select wire:model="status_perkawinan" class="bg-[#b7957f] mt-2 p-2 border-2  border-[#5B3018] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start">
                                                    <option value="">-- Status Perkawinan --</option>
                                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                </select>
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('status_perkawinan') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="flex sm:flex-col md:flex-row w-full items-end sm:gap-0 md:gap-5">
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">Pekerjaan</label>
                                                </span>
                                                <input  type="text"
                                                wire:model="pekerjaan"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Pekerjaan">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('pekerjaan') {{ $message }} @enderror</span>
                                            </div>
                                            <div class="basis-2/3 w-full">
                                                <span class="text-red-800">
                                                    *
                                                    <label class="text-black" for="">Nomor Hp</label>
                                                </span>
                                                <input  type="text"
                                                wire:model="nomor_hp"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Nomor HP">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('nomor_hp') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col d px-10 sm:mt- md:-mt-4 pb-10 sm:gap-6 md:gap-6">
                                    <h1 class="text-xl font-montserrat font-semibold">Dokumen Pemohon</h1>
                                    <div class="flex flex-col sm:gap-0 md:gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                        <div class="flex w-full sm:gap-0 md:gap-3">
                                            <div class="flex sm:flex-col md:flex-row w-full items-end sm:gap-0 md:gap-5">
                                                <div class="basis-2/3">
                                                    <span class="text-red-800">
                                                        *
                                                        <label class="text-black" for="">Unggah KTP Pemohon</label>
                                                    </span>
                                                    <p class="text-sm italic">File yang diupload dalam bentuk PDF, dengan batas ukuran 2MB</p>
                                                    <div class="relative">
                                                        <input 
                                                            type="file"
                                                            wire:model="ktp_pemohon"
                                                            class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                            placeholder="Unggah KTP Pemohon"
                                                        >
                                                        <!-- Elemen Loading -->
                                                        <div wire:loading wire:target="ktp_pemohon" class="absolute inset-0 flex items-center justify-center bg-[#b7957f] bg-opacity-75 rounded-2xl">
                                                            <div class="text-white text-sm">Uploading...</div>
                                                        </div>
                                                    </div>
                                                    <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('ktp_pemohon') {{ $message }} @enderror</span>
                                                </div>
                                                <div class="basis-2/3">
                                                    <label for="">Unggah KTP Pemberi Kuasa (Apabila diwakili)</label>
                                                    <p class="text-sm italic">File yang diupload dalam bentuk PDF, dengan batas ukuran 2MB</p>
                                                    <div class="relative">
                                                        <input  type="file"
                                                        wire:model="ktp_pemberi"
                                                        class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                        placeholder="Unggah KTP Pemberi Kuasa">
                                                        <div wire:loading wire:target="ktp_pemberi" class="absolute inset-0 flex items-center justify-center bg-[#b7957f] bg-opacity-75 rounded-2xl">
                                                            <div class="text-white text-sm">Uploading...</div>
                                                        </div>
                                                    </div>
                                                    <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('ktp_pemberi') {{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col w-full gap-3 justify-center">
                                            <div class="flex flex-col w-full items-start">
                                                <label for="">Dokumen Pendukung (KK/STNK/BPKB/atau lainnya)</label>
                                                <p class="text-sm italic">File yang diupload dalam bentuk PDF, dengan batas ukuran 2MB</p>
                                                <div class="relative">
                                                    <input  type="file"
                                                    wire:model="dokumen_pendukung"
                                                    class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                    placeholder="Unggah Dokumen Pendukung">
                                                    <div wire:loading wire:target="dokumen_pendukung" class="absolute inset-0 flex items-center justify-center bg-[#b7957f] bg-opacity-75 rounded-2xl">
                                                        <div class="text-white text-sm">Uploading...</div>
                                                    </div>
                                                </div>
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('dokumen_pendukung') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="font-montserrat sm:mb-10 md:mb-0 sm:mx-20 md:mx-80 font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none">Simpan Data</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>
