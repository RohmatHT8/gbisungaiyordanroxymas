@include('component/header')
@include('component/navbar')
<section class="h-[60vh] relative">
    <img src="{{ asset('asset/images/bg-persembahan.png') }}"
        class="absolute top-0 left-0 w-full h-full object-cover -z-10" alt="bg-hero" />
    <div class="absolute top-0 left-0 w-full h-full object-cover -z-10 bg-black opacity-70"></div>
    <div class="w-full h-full text-white flex justify-center items-center">
        <div class="text-center">
            <h1 class="text-6xl md:text-7xl font-bold mb-2">Persembahan</h1>
            <p class="font-extralight italic"></p>
        </div>
    </div>
</section>
<section class="min-h-[100vh] md:grid md:grid-cols-2 px-10 gap-2 items-center pt-10">
    <div class="md:text-center mb-3">
        <h1 class="text-3xl md:text-4xl font-semibold italic">REKENING PERSEMBAHAN</h1>
        <h3 class="text-4xl md:text-5xl font-bold text-blue-800">BCA 2700 481 649</h3>
        <h3 class="text-2xl md:text-2xl">a/n GBI SUNGAI YORDAN RMS</h3>
    </div>
    <div>
        <h1 class="text-4xl font-semibold italic">KODE BERITA</h1>
        <ul class="font-semibold text-xl">
            <li>01. Persembahan Khusus</li>
            <li>02. Kolekte</li>
            <li>03. Pelayanan Kasih</li>
            <li>04. Misi</li>
            <li>05. Diakonia</li>
            <li>
                <span>06. Ibadah Kategorial</span>
                <ul class="ml-6 font-normal">
                    <li>- Perayaan</li>
                    <li>- KOMPI (Komunitas Pria)</li>
                    <li>- KOMUNITA (Komunitas Wanita)</li>
                    <li>- Jumat Agung</li>
                    <li>- Paskah</li>
                    <li>- Natal</li>
                </ul>
            </li>
            <li>07. Perpuluhan</li>
        </ul>
    </div>
</section>
@include('component/footer')