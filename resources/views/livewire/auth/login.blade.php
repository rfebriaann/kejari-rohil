<div>
    <div class="flex flex-row h-screen w-full p-10 gap-20">
        <div class="basis-1/2 h-full py-16 px-14 flex flex-col justify-between">
            <div class="flex flex-col h-full justify-around mx-18">
                <div class="flex gap-5 justify-start items-center">
                    <div>
                        <img class="size-32" src="{{ asset('storage/assets/img/logokejari.png') }}" alt="">
                    </div>
                    <div class="w-48">
                        <h1 class="text-2xl font-montserrat font-bold block">
                            PAPBB Kejaksaan Negeri
                            <span class="">Rokan Hilir</span>
                        </h1>
                    </div>
                </div>
                <div class="flex flex-col justify-center gap-4 mt-4">
                    <form wire:submit="login" action="" class="flex flex-col justify-center gap-4 mt-4">
                        <div>
                            <input 
                            type="email"
                            name="email"
                            id="email"
                            wire:model="email"
                            type="text" class="w-full text-black font-montserrat border-2 p-2 px-4 rounded-xl" placeholder="Silahkan masukkan email anda">
                            @error('email')
                                <small class="text-sm mx-4 text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div>
                            <input 
                            type="password"
                            name="password"
                            id="password"
                            wire:model="password"
                            type="password" class="w-full text-black font-montserrat border-2 p-2 px-4 rounded-xl" placeholder="Silahkan masukkan password anda">
                            @error('password')
                                <small class="text-sm mx-4 text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        
                        <div>
                            <button 
                            type="submit"
                            class="w-full bg-[#964A27] text-white py-3 rounded-xl shadow-md font-montserrat font-semibold">Masuk!</button>
                        </div>
                    </form>
                </div>
                <div class="font-montserrat italic font-medium">
                    <h2>developed by Peserta Latsar Shely Triliya</h2>
                </div>
            </div>
        </div>
        <div class="relative basis-1/2 bg-[#FF8552] w-full h-full rounded-[60px] overflow-hidden">
            <img class="object-cover h-full w-full overflow-hidden" src="{{ asset('storage/assets/img/bg-1.jpeg') }}" alt="">
            <div class="absolute flex justify-center inset-0 bg-gradient-to-t from-black/75 to-transparent h-full w-full z-10">
                <div class="p-20">
                    <img class="object-cover size-28 rounded-2xl" src="{{ asset('storage/assets/img/logokejari.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
