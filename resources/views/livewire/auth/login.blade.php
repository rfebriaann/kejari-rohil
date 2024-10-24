<div>
    <div class="flex flex-row h-screen w-full p-10 gap-20">
        <div class="basis-1/2 h-full py-16 px-14 flex flex-col justify-between">
            <div class="flex flex-col h-full justify-around mx-18">
                <div class="flex gap-5 justify-start items-center">
                    <div>
                        <img class="size-32" src="{{ asset('storage/assets/img/logokejari.png') }}" alt="">
                    </div>
                    <div class="w-48">
                        <h1 class="text-2xl font-montserrat font-semibold">
                            Kejaksaan Negeri Rokan Hilir
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
                            type="text" class="w-full text-black font-montserrat border-2 p-2 px-4 rounded-xl" placeholder="Silahkan masukkan email anda..">
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
                            type="password" class="w-full text-black font-montserrat border-2 p-2 px-4 rounded-xl" placeholder="Silahkan masukkan password anda..">
                            @error('password')
                                <small class="text-sm mx-4 text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        
                        <div>
                            <button 
                            type="submit"
                            class="w-full bg-[#B68BFF] text-white py-3 rounded-xl shadow-md font-montserrat font-medium">Masuk!</button>
                        </div>
                    </form>
                </div>
                <div class="font-montserrat italic font-medium">
                    <h2>Developed by Kejari Rokan Hilir</h2>
                </div>
            </div>
        </div>
        <div class="basis-1/2 bg-[#FF8552] w-full h-full rounded-[50px] overflow-hidden">
                <img class="object-cover h-full w-full" src="{{ asset('storage/assets/img/bg1.jpeg') }}" alt="">
                {{-- <div class="absolute inset-0 bg-gradient-to-t from-black/100 to-transparent"></div> --}}
        </div>
    </div>

</div>
