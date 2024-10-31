<div>
    <div class="w-full h-auto flex mt-24 mb-12">
        <div class="mx-20 h-full w-full rounded-3xl">
            <div class="flex flex-col bg-[#5B3018] w-full h-full rounded-3xl overflow-hidden border-2 border-[#5b3018]" style="box-shadow: 0px 14px 0 rgba(87, 46, 23, 1);">
                <div class="flex flex-col w-full h-full basis-1/3 p-20 justify-start items-start gap-6">
                    <div>
                        <h1 class="font-montserrat font-semibold text-4xl text-white">
                            Input data permohonan anda
                        </h1>
                    </div>
                    <div>
                        <p class="font-montserrat text-white font-normal text-lg">Apabila anda membutuhkan surat kuasa, anda bisa mendownloadnya disini </p>
                    </div>
                    <div>
                        <a href="" class="font-montserrat font-semibold px-4 py-2 rounded-3xl bg-white w-1/2 text-center" style="box-shadow: 0px 5px 0 rgb(211, 211, 211);">Download Surat Kuasa</a>
                    </div>
                </div>
                <div class="w-full h-full bg-[#D7BDA6] p-20">
                    <form wire:submit.prevent="submit">
                    <div class="flex flex-col w-full">
                        <div>
                            <div class="flex flex-col d px-10 -mt-4 pb-10 gap-6">
                                <h1 class="text-xl font-montserrat font-semibold">Nama Terdakwa</h1>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                    <div class="flex w-full items-end gap-5">
                                        <div class="w-full relative">
                                            <label for="">Nama Terdakwa</label>
                                            <input type="text"
                                                wire:model="nama_terdakwa"
                                                wire:keyup="searchTerdakwa"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 placeholder:text-white"
                                                placeholder="Nama Terdakwa">
                                
                                            <!-- Dropdown Suggestions -->
                                            @if(!empty($suggestions))
                                                <div class="absolute z-10 w-full bg-[#5B3018] text-white rounded-xl mt-1">
                                                    @foreach($suggestions as $suggestion)
                                                        <div wire:click="selectSuggestion('{{ $suggestion['id'] }}', '{{ $suggestion['nama'] }}')"
                                                            class="p-2 cursor-pointer hover:bg-[#BB91FF] rounded-lg">
                                                            {{ $suggestion['nama'] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col d px-10 -mt-4 pb-10 gap-6">
                                <h1 class="text-xl font-montserrat font-semibold">Data Pemohon</h1>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                    <div class="flex flex-col w-full gap-3">
                                        <div class="flex w-full items-end gap-5">
                                            <div class="basis-2/3">
                                                <label for="">Nama Pemohon</label>
                                                <input  type="text"
                                                wire:model="nama_pemohon"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Nama Pemohon">
                                            </div>
                                            <div class="basis-2/3">
                                                <label for="">NIK</label>
                                                <input  type="text"
                                                wire:model="nik"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="NIK">
                                            </div>
                                        </div>

                                        <div class="flex w-full items-end gap-5">
                                            <div class="basis-2/3">
                                                <label for="">Tempat Lahir</label>
                                                <input  type="text"
                                                wire:model="tempat_lahir"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Tempat Lahir">
                                            </div>
                                            <div class="basis-2/3">
                                                <label for="">Tanggal Lahir</label>
                                                <input  type="text"
                                                wire:model="tanggal_lahir"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Tanggal Lahir">
                                            </div>
                                        </div>

                                        <div class="flex w-full items-end gap-5">
                                            <div class="basis-2/3">
                                                <label for="">Jenis Kelamin</label>
                                                <select wire:model="jenis_kelamin" class="bg-[#b7957f] mt-2 p-2 border-2  border-[#5B3018] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start">
                                                    <option value="">-- Jenis Kelamin --</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="basis-2/3">
                                                <label for="">Agama</label>
                                                <input  type="text"
                                                wire:model="agama"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Agama">
                                            </div>
                                        </div>

                                        <div class="flex w-full items-end gap-5">
                                            <div class="basis-2/3">
                                                <label for="">Alamat Tinggal</label>
                                                <input  type="text"
                                                wire:model="alamat"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Alamat">
                                            </div>
                                            <div class="basis-2/3">
                                                <label for="">Status Perkawinan</label>
                                                <select wire:model="status_perkawinan" class="bg-[#b7957f] mt-2 p-2 border-2  border-[#5B3018] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start">
                                                    <option value="">-- Status Perkawinan --</option>
                                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="flex w-full items-end gap-5">
                                            <div class="basis-2/3">
                                                <label for="">Pekerjaan</label>
                                                <input  type="text"
                                                wire:model="pekerjaan"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Pekerjaan">
                                            </div>
                                            <div class="basis-2/3">
                                                <label for="">Nomor Hp</label>
                                                <input  type="text"
                                                wire:model="nomor_hp"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Nomor HP">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col d px-10 -mt-4 pb-10 gap-6">
                                    <h1 class="text-xl font-montserrat font-semibold">Berkas Pemohon</h1>
                                    <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                        <div class="flex flex-col w-full gap-3">
                                            <div class="flex w-full items-end gap-5">
                                                <div class="basis-2/3">
                                                    <label for="">Unggah KTP Pemohon</label>
                                                    <input  type="file"
                                                    wire:model="ktp_pemohon"
                                                    class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                    placeholder="Unggah KTP Pemohon">
                                                </div>
                                                <div class="basis-2/3">
                                                    <label for="">Unggah KTP Pemberi Kuasa</label>
                                                    <input  type="file"
                                                    wire:model="ktp_pemberi"
                                                    class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                    placeholder="Unggah KTP Pemberi Kuasa">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col w-full gap-3 justify-center">
                                            <div class="flex flex-col w-full items-start">
                                                <label for="">Dokumen Pendukung</label>
                                                <input  type="file"
                                                wire:model="dokumen_pendukung"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Unggah Dokumen Pendukung">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="font-montserrat mx-80 font-semibold text-gray-700 bg-[#FFFFFF] hover:bg-[#d2d2d2] focus:ring-4 focus:ring-blue-300 rounded-2xl text-sm px-5 py-2.5 focus:outline-none">Simpan Data</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
