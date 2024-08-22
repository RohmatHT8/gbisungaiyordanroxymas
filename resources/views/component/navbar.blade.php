<header class="bg-slate-950">
    <nav class="flex justify-between items-center w-[92%] mx-auto">
        <div>
            <img class="w-32 py-5" src="{{asset('asset/images/logo.png')}}" alt="logo-nav">
        </div>
        <div class="nav-links duration-500 md:static absolute bg-slate-950 md:min-h-fit min-h-[90vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5 z-20">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-base lg:text-lg">
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/')}}">Beranda</a>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/tentang-kami')}}">Tentang Kami</a>
                </li>
                <li class="relative group">
                    <a class="text-white hover:text-yellow-200 flex items-center" href="#" onclick="toggleDropdown(event)">
                        Layanan
                        <i class="bi bi-chevron-down text-base ml-2 transition-transform duration-300 dropdown-icon mt-1"></i> <!-- Ikon panah dropdown -->
                    </a>
                    <ul class="dropdown-menu absolute left-0 top-full overflow-hidden mt-2 bg-slate-500 text-white rounded-md shadow-lg opacity-0 transition-opacity duration-300 z-30">
                        <li>
                            <a class="block text-base px-4 py-2 hover:bg-slate-800" href="{{url('/layanan/penunjang')}}">Penunjang</a>
                        </li>
                        <li>
                            <a class="block text-base px-4 py-2 hover:bg-slate-800" href="{{url('/layanan/misi')}}">Misi</a>
                        </li>
                        <li>
                            <a class="block text-base px-4 py-2 hover:bg-slate-800" href="{{url('/layanan/pastoral')}}">Pastoral</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/komunitas')}}">Komunitas</a>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/renungan')}}">Renungan Harian</a>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/persembahan')}}">Persembahan</a>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/hubungi-kami')}}">Hubungi Kami</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <!-- <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Sign in</button> -->
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer text-white md:hidden"></ion-icon>
        </div>
    </nav>
</header>
