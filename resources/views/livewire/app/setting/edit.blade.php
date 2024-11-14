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
                    <h1 class="font-bold font-montserrat text-3xl text-white">📒 Edit pengguna </h1>
                </div>
            </div>
        </div>
        <div>
            <section class="mt-4 ">
                <div class="max-w-screen-xl p-2 mx-auto lg:px-1">
                    <div class="bg-[#ab7743] border-2 border-[#5b3018]  w-full relative sm:rounded-[30px] overflow-hidden" style="box-shadow: 0px 10px 0 rgba(87, 46, 23, 1);">
                        {{-- @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif --}}
                        <form wire:submit.prevent="update">
                            <div class="flex flex-col d p-10 gap-6 w-full">
                                <h1 class="text-xl font-montserrat font-semibold">Nama Pengguna</h1>
                                <div class="flex gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4">
                                    <div class="w-full">
                                        <label for="">Nama pengguna</label>
                                        <input  type="text"
                                        wire:model="name"
                                        class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                        placeholder="Nama pengguna" required="">
                                        <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('name') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col d px-10 -mt-4 pb-10 gap-6">
                                <h1 class="text-xl font-montserrat font-semibold">Email</h1>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                    <div class="flex w-full items-end gap-5">
                                        <div class="w-full">
                                            <label for="">Email</label>
                                            <input  type="text"
                                            wire:model="email"
                                            class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                            placeholder="Email">
                                            <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('email') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col d px-10 -mt-4 pb-4 gap-4">
                                <h1 class="text-xl font-montserrat font-semibold">Password lama</h1>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-2">
                                    <div class="flex gap-4">
                                        <div class="w-full">
                                            <div class="">
                                                <label for="">Password lama</label>
                                                <input  type="text"
                                                wire:model="old_password"
                                                class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                                placeholder="Password lama">
                                                <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('old_password') {{ $message }} @enderror</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col d px-10  pb-10 gap-6">
                                <h1 class="text-xl font-montserrat font-semibold">Konfirmasi Password baru</h1>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                    <div class="flex w-full items-end gap-5">
                                        <div class="w-full">
                                            <label for="">Password baru</label>
                                            <input  type="text"
                                            wire:model="new_password"
                                            class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                            placeholder="Password baru">
                                            <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('new_password') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-4 px-4 py-4 rounded-3xl border-2 border-dashed border-[#0d0e13] -mt-4 items-start">
                                    <div class="flex w-full items-end gap-5">
                                        <div class="w-full">
                                            <label for="">Konfirmasi password baru</label>
                                            <input  type="text"
                                            wire:model="new_password_confirmation"
                                            class="bg-[#b7957f] border-2 border-[#5B3018] mt-2 p-2 text-white text-sm rounded-2xl  focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-4 text-start placeholder:text-white"
                                            placeholder="Konfirmasi Password baru">
                                            <span class="mx-5 font-montserrat font-medium italic text-sm text-red-800">@error('new_password_confirmation') {{ $message }} @enderror</span>
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
    </div>
</div>
