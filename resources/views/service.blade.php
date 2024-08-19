@include('component/header')
@include('component/navbar')

<section class="h-[60vh] relative">
    <img src="{{ asset('asset/images/service-bg.jpg') }}"
        class="absolute top-0 left-0 w-full h-full object-cover -z-10" alt="bg-hero"/>
        <div class="absolute top-0 left-0 w-full h-full object-cover -z-10 bg-black opacity-70"></div>
    <div class="w-full h-full text-white flex justify-center items-center">
        <div class="text-center">
            <h1 class="text-6xl md:text-7xl font-bold mb-2">Layanan Kami</h1>
            <p class="font-extralight italic">Sebagai Gereja kami berkomitmen untuk membantu dan menemani perjalanan iman anda</p>
        </div>
    </div>
</section>
<section class="min-h-[100vh]">

</section>
@include('component/footer')