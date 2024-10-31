<div class="mx-20">
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-[300px] h-screen transition-transform -translate-x-full sm:translate-x-0 p-10" aria-label="Sidebar">
        <div class="bg-[#ab7743] flex flex-col justify-around items-center rounded-[40px] h-full w-full py-4 overflow-y-auto border-2 border-[#572E17]" style="box-shadow: 0px 10px 0 rgba(87, 46, 23, 1);">
            <div class="flex justify-center items-center p-4 gap-2">
                <div>
                    <a href="">
                        <img class="object-cover size-24 rounded-3xl" src="{{ asset('storage/assets/img/logokejari.png') }}" alt="">
                    </a>
                </div>
                {{-- <div>
                    <a href="">
                        <img class="object-cover size-20 rounded-3xl" src="{{ asset('storage/assets/img/logoppapng.png') }}" alt="">
                    </a>
                </div> --}}
            </div>
            
            <div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="" class="flex items-center p-2 hover:text-white rounded-lg  hover:bg-[#fe9e55] group">
                        <svg class="w-5 h-5 text-[#572E17] transition duration-75 group-hover:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                        </svg>
                        <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('app.surat.index')}}" class="flex items-center p-2 hover:text-white rounded-lg  hover:bg-[#fe9e55] group">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="w-5 h-5 text-[#572E17] transition duration-75 group-hover:text-white "><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2l.117 .007a1 1 0 0 1 .876 .876l.007 .117v4l.005 .15a2 2 0 0 0 1.838 1.844l.157 .006h4l.117 .007a1 1 0 0 1 .876 .876l.007 .117v9a3 3 0 0 1 -2.824 2.995l-.176 .005h-10a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-14a3 3 0 0 1 2.824 -2.995l.176 -.005h5z" /><path d="M19 7h-4l-.001 -4.001z" /></svg>
                        <span class="ms-3">Data Perkara</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('app.pemohon.index')}}" class="flex items-center p-2 hover:text-white rounded-lg  hover:bg-[#fe9e55] group">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="w-5 h-5 text-[#572E17] transition duration-75 group-hover:text-white "><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2l.117 .007a1 1 0 0 1 .876 .876l.007 .117v4l.005 .15a2 2 0 0 0 1.838 1.844l.157 .006h4l.117 .007a1 1 0 0 1 .876 .876l.007 .117v9a3 3 0 0 1 -2.824 2.995l-.176 .005h-10a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-14a3 3 0 0 1 2.824 -2.995l.176 -.005h5z" /><path d="M19 7h-4l-.001 -4.001z" /></svg>
                        <span class="ms-3">Pemohon</span>
                        </a>
                    </li>

                    <li>
                        <a href="" class="flex items-center p-2 text-white rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-200 group">
        
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-photo flex-shrink-0 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.813 11.612c.457 -.38 .918 -.38 1.386 .011l.108 .098l4.986 4.986l.094 .083a1 1 0 0 0 1.403 -1.403l-.083 -.094l-1.292 -1.293l.292 -.293l.106 -.095c.457 -.38 .918 -.38 1.386 .011l.108 .098l4.674 4.675a4 4 0 0 1 -3.775 3.599l-.206 .005h-12a4 4 0 0 1 -3.98 -3.603l6.687 -6.69l.106 -.095zm9.187 -9.612a4 4 0 0 1 3.995 3.8l.005 .2v9.585l-3.293 -3.292l-.15 -.137c-1.256 -1.095 -2.85 -1.097 -4.096 -.017l-.154 .14l-.307 .306l-2.293 -2.292l-.15 -.137c-1.256 -1.095 -2.85 -1.097 -4.096 -.017l-.154 .14l-5.307 5.306v-9.585a4 4 0 0 1 3.8 -3.995l.2 -.005h12zm-2.99 5l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" /></svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Gallery</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class="w-full px-10 rounded-2xl">
                <a href="{{route('logout')}}" class="flex items-center p-2 w-full text-white rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-200 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </a>
            </div>
        </div>
    </aside>
    
    </div>