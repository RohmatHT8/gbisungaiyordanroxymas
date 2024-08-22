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
            <div class="border border-gray-400 text-gray-400 hover:text-white hover:border-white w-10 h-10 rounded-full flex justify-center items-center transition duration-300 cursor-pointer">
                <i class="bi bi-youtube"></i>
            </div>
            <div class="border border-gray-400 text-gray-400 hover:text-white hover:border-white w-10 h-10 rounded-full flex justify-center items-center transition duration-300 cursor-pointer">
                <i class="bi bi-instagram"></i>
            </div>
        </div>
        <div class="px-10 mt-3">
            <hr class="opacity-30" />
        </div>
        <div class="grid grid-cols-2 px-10 py-3 gap-5">
            <div class="mb-2">
                <h1 class="mb-2 text-gray-400 font-[Poppins] text-xl">LOKASI</h1>
                <p class="text-sm">Jl. Roxy Mas Pertokoan No.32 6, RT.6/RW.5, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150.</p>
            </div>
            <div>
                <h1 class="mb-2 text-gray-400 font-[Poppins] text-xl">PINTASAN</h1>
                <p class="hover:text-yellow-200 cursor-pointer">Beranda</p>
                <p class="hover:text-yellow-200 cursor-pointer">Tentang Kami</p>
                <p class="hover:text-yellow-200 cursor-pointer">Layanan</p>
                <p class="hover:text-yellow-200 cursor-pointer">Komunitas</p>
                <p class="hover:text-yellow-200 cursor-pointer">Hubungi Kami</p>
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