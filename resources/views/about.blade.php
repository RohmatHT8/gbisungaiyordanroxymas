@include('component/header')
@include('component/navbar')
<section class="h-[60vh] relative">
    <img src="{{ asset('asset/images/bg-hero-about.png') }}"
        class="absolute top-0 left-0 w-full h-full object-cover -z-10" />
    <div class="w-full h-full text-white flex justify-center items-center">
        <div class="text-center">
            <h1 class="text-6xl md:text-7xl font-bold mb-2">Tentang Kami</h1>
            <p class="font-extralight italic">Hallo Selamat datang dirumah kami, <br /> dengan senang hati kami membuka diri untuk kamu kenali.</p>
        </div>
    </div>
</section>

<section class="min-h-[100vh] px-10 py-10 font-[Poppins] mt-10 mb-10">
    <div class="md:grid grid-cols-2">
        <div>
            <h1 class="text-5xl font-semibold italic mb-2">PERJALANAN GBI SUNGAI YORDAN ROXY MAS</h1>
        </div>
        <div>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, deserunt! Eveniet laborum minus aliquid architecto reiciendis ullam porro cupiditate, amet veritatis eius commodi quia nulla officiis deleniti alias quo ad!</d>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, deserunt! Eveniet laborum minus aliquid architecto reiciendis ullam porro cupiditate, amet veritatis eius commodi quia nulla officiis deleniti alias quo ad!</p>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, deserunt! Eveniet laborum minus aliquid architecto reiciendis ullam porro cupiditate, amet veritatis eius commodi quia nulla officiis deleniti alias quo ad!</p>
        </div>
    </div>
    <hr class="my-10" />
    <h1 class="text-2xl" data-aos="zoom-in-right">NILAI YANG KITA PEGANG</h1>
    <div class="md:grid grid-cols-5 gap-3 mt-4">
        <p data-aos="zoom-out-up">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, atque?</p>
        <p data-aos="zoom-out-up">2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, atque?</p>
        <p data-aos="zoom-out-up">3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, atque?</p>
        <p data-aos="zoom-out-up">4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, atque?</p>
        <p data-aos="zoom-out-up">5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, atque?</p>
    </div>
</section>


<!-- visi misi -->
<section id="vision" class="md:px-32 min-h-[90vh] bg-slate-950 px-5 py-14 relative font-[Poppins]">
    <div class="w-[30rem] md:w-[50rem] absolute -top-5 left-0 md:-top-32 md:left-36">
        <img src="{{asset('asset/images/bg-footer.png')}}" alt="bg-footer" data-aos="zoom-in-up">
    </div>
    <div class="text-white md:flex mt-80 md:mt-96">
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
<section class="min-h-[100vh] mt-10 px-10 py-10"> 
    <h1 class="text-5xl italic text-center mb-10 font-semibold" data-aos="fade-up">KEPENGURUSAN</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div data-aos="flip-left">
            <div class="card h-96 w-72 bg-slate-500 mx-auto"></div>
            <p class="text-center text-2xl">Pdt. Emanuel Gatot, S.Th, M.Ag</p>
            <p class="text-center text-gray-500">Gembala Sidang</p>
        </div>
        <div data-aos="flip-left">
            <div class="card h-96 w-72 bg-slate-500 mx-auto"></div>
            <p class="text-center text-2xl">Pdt. Emanuel Gatot, S.Th, M.Ag</p>
            <p class="text-center text-gray-500">Gembala Sidang</p>
        </div>
        <div data-aos="flip-left">
            <div class="card h-96 w-72 bg-slate-500 mx-auto"></div>
            <p class="text-center text-2xl">Pdt. Emanuel Gatot, S.Th, M.Ag</p>
            <p class="text-center text-gray-500">Gembala Sidang</p>
        </div>
        <div data-aos="flip-left">
            <div class="card h-96 w-72 bg-slate-500 mx-auto"></div>
            <p class="text-center text-2xl">Pdt. Emanuel Gatot, S.Th, M.Ag</p>
            <p class="text-center text-gray-500">Gembala Sidang</p>
        </div>
        <div data-aos="flip-left">
            <div class="card h-96 w-72 bg-slate-500 mx-auto"></div>
            <p class="text-center text-2xl">Pdt. Emanuel Gatot, S.Th, M.Ag</p>
            <p class="text-center text-gray-500">Gembala Sidang</p>
        </div>
        <div data-aos="flip-left">
            <div class="card h-96 w-72 bg-slate-500 mx-auto"></div>
            <p class="text-center text-2xl">Pdt. Emanuel Gatot, S.Th, M.Ag</p>
            <p class="text-center text-gray-500">Gembala Sidang</p>
        </div>
        <div data-aos="flip-left">
            <div class="card h-96 w-72 bg-slate-500 mx-auto"></div>
            <p class="text-center text-2xl">Pdt. Emanuel Gatot, S.Th, M.Ag</p>
            <p class="text-center text-gray-500">Gembala Sidang</p>
        </div>
    </div>
</section>

@include('component/footer')