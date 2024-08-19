@include('component/header')
@include('component/navbar')

<!-- hero -->
<section id="hero" class="min-h-[90vh] md:min-h-[70vh] bg-slate-950 relative">
    <div class="max-w-[90vw] md:max-w-[75vw] absolute md:-bottom-64 z-0 inset-0 m-auto flex items-center">
        <div>
            <h1 class="text-white font-[Poppins] font-medium text-center text-6xl">#GEREJA SAHABAT KELUARGA</h1>
            <img data-aos="fade-up" src="{{asset('asset/images/bg-footer.png')}}" alt="bg-hero" class="w-[100%]" />
        </div>
    </div>

    <div class="text-white rotate-90 absolute text-thin italic -right-[6.5rem] top-20 hidden md:inline">
        <p>GBI SUNGAI YORDAN ROXY MAS</p>
    </div>
    <div class="p-3 absolute bottom-0 w-[100%] flex md:flex-col gap-2 justify-center">
        <div class="border border-white text-white hover:text-yellow-200 hover:border-yellow-200 w-10 h-10 rounded-full flex justify-center items-center transition duration-300">
            <i class="bi bi-youtube"></i>
        </div>
        <div class="border border-white text-white hover:text-yellow-200 hover:border-yellow-200 w-10 h-10 rounded-full flex justify-center items-center transition duration-300">
            <i class="bi bi-instagram"></i>
        </div>
    </div>
</section>
<!-- end hero -->

<!-- news -->
<section id="news" class="md:px-32 min-h-[100vh] bg-white p-5 md:mt-60">
    <div class="relative mb-5">
        <h1 class="font-[Poppins] text-5xl md:text-7xl mt-10 italic" data-aos="fade-up">INFO SATU BULAN</h1>
    </div>

    <div class="w-full h-[50vh]overflow-hidden relative" data-aos="zoom-in-up">
        <div id="scrollContainer" class="flex space-x-4 w-full h-full overflow-x-auto scroll-smooth">
            <div class="w-96 md:w-[34rem] h-[40vh] md:h-[50vh] flex-none overflow-hidden">
                <img src="{{asset('asset/images/news/t-1.jpg')}}" class="hover:scale-105 transition duration-500 w-full" />
                <p class="font-[Poppins] text-xl font-light mt-4">Ibadah Hari Minggu</p>
            </div>
            <div class="w-96 md:w-[34rem] h-[40vh] md:h-[50vh] flex-none overflow-hidden">
                <img src="{{asset('asset/images/news/t-5.jpg')}}" class="hover:scale-105 transition duration-500 w-full" />
                <p class="font-[Poppins] text-xl font-light mt-4">Pray Praise And Worship</p>
            </div>
            <div class="w-96 md:w-[34rem] h-[40vh] md:h-[50vh] flex-none overflow-hidden">
                <img src="{{asset('asset/images/news/t-4.jpg')}}" class="hover:scale-105 transition duration-500 w-full" />
                <p class="font-[Poppins] text-xl font-light mt-4">Pendalaman Alkitab</p>

            </div>
        </div>
        <i id="scrollRight" class="bi bi-arrow-right-circle-fill absolute top-1/2 transform -translate-y-1/2 right-2 text-slate-500 opacity-30 hover:text-yellow-200 hover:opacity-100 hover:text-6xl text-5xl p-2 transition duration-500"></i>
    </div>

    <div class="text-9xl absolute opacity-20 left-0 right-0">
        <div class="marquee">
            <div class="marquee-content">
                <span>GEREJA SAHABAT KELUARGA</span>
                <span>GEREJA SAHABAT KELUARGA</span>
                <span>GEREJA SAHABAT KELUARGA</span>
            </div>
        </div>
    </div>

</section>
<!-- visi misi -->
<section id="vision" class="md:px-32 min-h-[90vh] bg-slate-950 px-5 py-14 relative">
    <div class="w-80 md:w-96 absolute -top-16 left-20 md:-top-32 md:left-64">
        <img src="{{asset('asset/images/gembala.png')}}" alt="gembala" data-aos="zoom-in-up">
    </div>
    <div class="w-[20rem] md:w-[35rem] absolute left-[5rem] lg:left-[20rem] top-[18rem] md:top-[15rem]" data-aos="fade-up">
        <img src="{{asset('asset/images/nama-gembala.png')}}" alt="nama-gembala" class="-rotate-2" />
        <p class="text-slate-300 text-center">-Gembala Sidang</p>
    </div>
    <div class="text-white md:flex mt-96">
        <div class="mb-10" data-aos="fade-up">
            <h1 class="text-2xl text-slate-400">VISI</h1>
            <p class="text-5xl">Menjadi Serupa Kristus.</p>
        </div>
        <div data-aos="zoom-in-up">
            <h1 class="text-2xl text-slate-400">MISI</h1>
            <p class="text-5xl">Pergi menjadikan semua bangsa murid Kristus.</p>
        </div>
    </div>
</section>

<section id="activity" class="md:px-32 min-h-[90vh] bg-slate-950 px-5 py-14 relative">
    <div class="relative mb-10" data-aos="zoom-in-up">
        <div class="w-44 h-1 bg-yellow-200 absolute top-12"></div>
        <h1 class="text-white font-light italic text-6xl mt-20">IBADAH KATEGORIAL</h1>
    </div>

    <div class="text-9xl absolute opacity-20 -top-10 left-0 right-0 text-white">
        <div class="marquee">
            <div class="marquee-content">
                <span class="italic">IBADAH GBI SUNGAI YORDAN ROXY</span>
                <span class="italic">IBADAH GBI SUNGAI YORDAN ROXY</span>
                <span class="italic">IBADAH GBI SUNGAI YORDAN ROXY</span>
            </div>
        </div>
    </div>

    <div class="text-white mb-28" data-aos="fade-up">
        <div class="border-t-2 border-b-2 border-slate-50 opacity-50 font-light p-2 grid grid-cols-4 hover:opacity-100 cursor-pointer">
            <div class="col-span-1 md:col-span-2 font-medium text-3xl font-[Poppins]">
                IBADAH RAYA
            </div>
            <div class="col-span-2 md:col-span-1">
                GBI Sungai Yordan Roxy Mas, Pusat Perniagaan Roxy Mas Blok C1 No. 32, Lt. 3
            </div>
            <div class="col-span-1">
                Minggu, 10.00 am
            </div>
        </div>
        <div class="border-t-2 border-b-2 border-slate-50 opacity-50 font-light p-2 grid grid-cols-4 hover:opacity-100 cursor-pointer">
            <div class="col-span-1 md:col-span-2 font-medium text-3xl font-[Poppins]">
                IBADAH YOUTH (SYNC)
            </div>
            <div class="col-span-2 md:col-span-1">
                GBI Sungai Yordan Roxy Mas, Pusat Perniagaan Roxy Mas Blok C1 No. 32, Lt. 5
            </div>
            <div class="col-span-1">
                Sabtu, 05.00 pm
            </div>
        </div>
        <div class="border-t-2 border-b-2 border-slate-50 opacity-50 font-light p-2 grid grid-cols-4 hover:opacity-100 cursor-pointer">
            <div class="col-span-1 md:col-span-2 font-medium text-3xl font-[Poppins]">
                IBADAH SEKOLAH MINGGU
            </div>
            <div class="col-span-2 md:col-span-1">
                GBI Sungai Yordan Roxy Mas, Pusat Perniagaan Roxy Mas Blok C1 No. 32, Lt. 2 & Lt. 4
            </div>
            <div class="col-span-1">
                Minggu, 05.00 pm
            </div>
        </div>
        <div class="border-t-2 border-b-2 border-slate-50 opacity-50 font-light p-2 grid grid-cols-4 hover:opacity-100 cursor-pointer">
            <div class="col-span-1 md:col-span-2 font-medium text-3xl font-[Poppins]">
                KOMUNITAS PRIA (KOMPI)
            </div>
            <div class="col-span-2 md:col-span-1">
                GBI Sungai Yordan Roxy Mas, Pusat Perniagaan Roxy Mas Blok C1 No. 32, Lt. 5
            </div>
            <div class="col-span-1">
                Sabtu, Minggu ke 2, 10.00 am
            </div>
        </div>
        <div class="border-t-2 border-b-2 border-slate-50 opacity-50 font-light p-2 grid grid-cols-4 hover:opacity-100 cursor-pointer">
            <div class="col-span-1 md:col-span-2 font-medium text-3xl font-[Poppins]">
                KOMUNITAS WANITA (KOMUNITA)
            </div>
            <div class="col-span-2 md:col-span-1">
                GBI Sungai Yordan Roxy Mas, Pusat Perniagaan Roxy Mas Blok C1 No. 32, Lt. 2
            </div>
            <div class="col-span-1">
                Sabtu, Minggu ke 2, 10.00 am
            </div>
        </div>
        <div class="border-t-2 border-b-2 border-slate-50 opacity-50 font-light p-2 grid grid-cols-4 hover:opacity-100 cursor-pointer">
            <div class="col-span-1 md:col-span-2 font-medium text-3xl font-[Poppins]">
                (PPW) PRAY PRAISE AND WORSHIP
            </div>
            <div class="col-span-2 md:col-span-1">
                Onsite/Online Via ZOOM
            </div>
            <div class="col-span-1">
                Rabu, Minggu Pertama 07.00 pm
            </div>
        </div>
    </div>
</section>

<section id="whatnext" class="md:px-32 min-h-[100vh] px-5 py-14 relative flex justify-center items-center">
    <div class="grid md:grid-cols-2 gap-10">
        <div class="relative">
            <div class="absolute -top-28 w-52 h-80 md:w-64 md:h-96" data-aos="fade-left">
                <img src="{{asset('asset/baptis.jpeg')}}" alt="mari-bertumbuh-bersama" class="opacity-50"/>
            </div>
            <div class="text-5xl md:text-7xl font-bold italic text-end">
                <p data-aos="fade-right">MARI</p>
                <p data-aos="fade-right">BERTUMBUH</p>
                <p data-aos="fade-right">BERSAMA</p>
            </div>
        </div>
        <div class="flex flex-col justify-center gap-4" data-aos="fade-left">
            <div class="hover:text-yellow-400 hover:border-yellow-400 hover:scale-105 cursor-pointer transition duration-500 flex items-center gap-3">
                <div>
                    <p class="text-3xl font-semibold">Baru Bergereja ?</p>
                    <p class="">Dengan senang hati kami mau jadi keluarga mu.</p>
                </div>
                <i class="bi bi-arrow-right-circle-fill text-3xl"></i>
            </div>
            <div class="hover:text-yellow-400 hover:border-yellow-400 hover:scale-105 cursor-pointer transition duration-500 flex items-center gap-3">
                <div>
                    <p class="text-3xl font-semibold">Bergabung Dengan Komunitas</p>
                    <p class="">Mari Bertumbuh Bersama dalam satu keluarga.</p>
                </div>
                <i class="bi bi-arrow-right-circle-fill text-3xl"></i>
            </div>
        </div>
    </div>
</section>

@include('component/footer')