@include('component/header')
@include('component/navbar')

<section class="h-[60vh] relative">
    <img src="{{ asset('asset/images/bg-comunity.png') }}"
        class="absolute top-0 left-0 w-full h-full object-cover -z-20" />
    <div class="absolute top-0 left-0 w-full h-full object-cover -z-10 bg-black opacity-60"></div>
    <div class="w-full h-full text-white flex justify-center items-center">
        <div class="text-center">
            <h1 class="text-6xl md:text-7xl font-bold mb-2">Komunitas</h1>
            <p class="font-extralight italic">
                Tetapi jika kita hidup di dalam terang sama seperti Dia ada di dalam terang, <br /> maka kita beroleh persekutuan seorang dengan yang lain, dan darah Yesus, Anak-Nya itu, <br />menyucikan kita dari pada segala dosa. <br /> 1 Yohanes 1: 7</p>
        </div>
    </div>
</section>

<section class="min-h-[100vh]">

</section>
@include('component/footer')