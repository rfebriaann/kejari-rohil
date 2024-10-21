<div>
    <div class="p-4 rounded-lg dark:border-gray-700">
        <div class="relative mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-4xl font-montserrat">
                    Welcome, <strong class="text-[#DEF261]">{{ auth()->user()->name }}</strong>
                </h1>
            </div>
            <div class="bg-cover rounded-[30px] bg-[#B78BFF]">
                <div class="bg-gradient-to-t from-[#C9A9FF] py-4 px-4 rounded-[30px]">
                    <h1 class="font-bold font-montserrat text-4xl text-white">🧐 Halaman Dakwaan </h1>
                </div>
            </div>
        </div>
        <div>
            <section class="mt-4 ">
                <div class="max-w-screen-xl p-2 mx-auto lg:px-1">
                    <div class="bg-[#1E212D] w-full relative sm:rounded-[30px] overflow-hidden ">
                        <div class="flex items-center justify-between d p-4">
                            <div class="flex">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input  type="text"
                                        wire:model.live = 'search'
                                        class="bg-[#2b2f3f] border border-[#BB91FF] text-white text-sm rounded-2xl focus:ring-[#BB91FF] focus:border-[#BB91FF] block w-full pl-10 p-2 "
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
                            <table class="w-full text-md text-left text-white dark:text-gray-400">
                                <thead class="text-xs text-white uppercase bg-[#2b2f3f]">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">#</th>
                                        <th scope="col" class="px-4 py-3">Nama Bisnis</th>
                                        <th scope="col" class="px-4 py-3">Logo Bisnis</th>
                                        <th scope="col" class="px-4 py-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($business as $busines)
                                    <tr class="border-b dark:border-gray-200">
                                            <td class="px-4 py-3">{{$i++}}</td>
                                            <td class="px-4 text-left text-black py-3"><span class="text-md  leading-8 font-semibold p-1 rounded-2xl px-4">{{ucwords(strtolower($busines->business_name))}}</span></td>
                                            <td class="px-4 text-center text-black py-3">
                                                <img class="w-[80px]" src="{{asset('storage/assets/busines_images/' . $busines->image)}}" alt="">
                                            </td>
                                            <td scope="row" class="px-1 py-3 flex flex-col items-start justify-center text-gray-900 font-semibold"><a class="" href="{{route('admin.business.edit.{id}', $busines->id)}}">Edit ✏️</a> <button wire:click="destroy({{$busines->id}})">Hapus 🗑️</button></td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="py-4 px-3">
                            <div class="flex ">
                                <div class="flex space-x-4 items-center mb-3">
                                    <label class="w-32 text-sm font-medium text-white">Per Page</label>
                                    <select
                                        wire:model.live='perPage' 
                                        class="bg-[#2b2f3f] border text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
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
                </div>
            </section>
        </div>
    </div>
</div>
