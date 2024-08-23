<footer class="min-h-[100vh] relative">
    <div class="min-h-[50vh] bg-slate-950 gap-5 p-5 relative overflow-hidden">
        <div class="absolute grid grid-cols-2 top-0 bottom-0 right-0 left-0 py-10 z-10 px-10 h-[100%]">
            <div class="flex items-center justify-center">
                <p class="text-3xl text-white md:text-5xl">Apa yang bisa kami bantu ?</p>
            </div>
            <div class="flex items-center justify-center">
                <div>
                    <p class="text-white mb-3 md:text-2xl">Hubungi kami lebih lanjut! Dengan senang hati, kami akan membantu Anda semakin mengenal GBI Sungai Yordan Roxy Mas dan mendukung perjalanan iman Anda.</p>
                    <a class="relative px-5 py-2 bg-white text-black group overflow-hidden" href="{{url('/contact')}}">
                        <span class="absolute inset-0 w-full h-full bg-yellow-300 transition-all duration-500 ease-out transform scale-x-0 group-hover:scale-x-100 origin-left blur-none"></span>
                        <span class="relative">HUBUNGI KAMI</span>
                    </a>
                </div>
            </div>
        </div>
        <img src="{{asset('asset/images/bg-contact-us.jpg')}}" class="absolute top-0 z-0 right-0" />
    </div>
    <div class="min-h-[50vh] bg-slate-950 text-white">
        <div class="py-2 flex justify-center gap-5 items-center text-xl pt-5">
            <a href="https://www.youtube.com/@gbisungaiyordanroxymas" target="_blank" class="border border-gray-400 text-gray-400 hover:text-white hover:border-white w-10 h-10 rounded-full flex justify-center items-center transition duration-300 cursor-pointer">
                <i class="bi bi-youtube"></i>
            </a>
            <a href="https://www.instagram.com/gbisungaiyordanroxy/" target="_blank" class="border border-gray-400 text-gray-400 hover:text-white hover:border-white w-10 h-10 rounded-full flex justify-center items-center transition duration-300 cursor-pointer">
                <i class="bi bi-instagram"></i>
            </a>
        </div>
        <div class="px-10 mt-3">
            <hr class="opacity-30" />
        </div>
        <div class="grid grid-cols-2 px-10 py-3 gap-10">
            <div class="mb-2">
                <h1 class="mb-2 text-gray-400 font-[Poppins] text-xl">LOKASI</h1>
                <div class="mb-3">
                    <h1 class="font-medium italic">GBI Sungai Yordan Roxy Mas</h1>
                    <p class="text-sm opacity-70">Jl. Roxy Mas Pertokoan No.32 6, RT.6/RW.5, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150.</p>
                </div>
                <div class="mb-3">
                    <h1 class="font-medium italic">GBI Sungai Yordan Depok (Cabang)</h1>
                    <p class="text-sm opacity-70">Gedung Pertemuan Sekar Peni, Jl. Siliwangi No. 14 Pancoran Mas - Depok Lama</p>
                </div>
            </div>
            <div>
                <h1 class="mb-2 text-gray-400 font-[Poppins] text-xl">PINTASAN</h1>
                <ul class="">
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
                        <a class="text-white hover:text-yellow-200" href="{{url('/renungan')}}">Renungan</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-yellow-200" href="{{url('/persembahan')}}">Persembahan</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-yellow-200" href="{{url('/hubungi-kami')}}">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="absolute bottom-5 text-white text-center w-[100%] opacity-55">
        &copy;Copyright <strong><span>GBI Sungai Yordan Roxy Mas</span></strong>. All Rights Reserved
    </div>
</footer>

<script>
    const navLinks = document.querySelector('.nav-links')

    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }

    function toggleDropdown(event) {
        event.preventDefault();
        const dropdownMenu = event.currentTarget.nextElementSibling;
        const dropdownIcon = event.currentTarget.querySelector('.dropdown-icon');

        dropdownMenu.classList.toggle('opacity-0');
        dropdownMenu.classList.toggle('opacity-100');

        // Toggle rotation of the icon
        dropdownIcon.classList.toggle('rotate-180');
    }
</script>
</body>

</html>