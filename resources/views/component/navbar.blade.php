<header class="bg-slate-950">
    <nav class="flex justify-between items-center w-[92%]  mx-auto">
        <div>

            <img class="w-32 py-5" src="{{asset('asset/images/logo.png')}}" alt="">
        </div>
        <div
            class="nav-links duration-500 md:static absolute bg-slate-950 md:min-h-fit min-h-[90vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5 z-20">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-xl">
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/')}}">Beranda</a>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/about')}}">Tentang Kami</a>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/service')}}">Layanan</a>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/comunity')}}">Komunitas</a>
                </li>
                <li>
                    <a class="text-white hover:text-yellow-200" href="{{url('/contact')}}">Hubungi Kami</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <!-- <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Sign in</button> -->
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer text-white md:hidden"></ion-icon>
        </div>
</header>