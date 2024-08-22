@include('component/header')
@include('component/navbar')
<section class="h-[60vh] relative">
    <img src="{{ asset('asset/images/bg-persembahan.png') }}"
        class="absolute top-0 left-0 w-full h-full object-cover -z-10" alt="bg-hero" />
    <div class="absolute top-0 left-0 w-full h-full object-cover -z-10 bg-black opacity-70"></div>
    <div class="w-full h-full text-white flex justify-center items-center">
        <div class="text-center">
            <h1 class="text-6xl md:text-7xl font-bold mb-2">Renungan Harian</h1>
            <p class="font-extralight italic"></p>
        </div>
    </div>
</section>
<section class="min-h-[60vh]">
    <div class="mt-10 flex justify-end px-10">
        <div class="relative w-64">
            <!-- Input pencarian -->
            <input type="text" placeholder="Search" class="w-full pl-10 pr-4 py-1 border border-gray-300 focus:outline-none focus:border-cyan-600">
    
            <!-- Ikon kaca pembesar -->
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l3.387 3.387a1 1 0 01-1.414 1.414l-3.387-3.387zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>


    <div class="grid lg:grid-cols-4 md:grid-cols-2 p-10 gap-10">
        <div clas="w-full bg-white">
            <div class="h-60 p-5 shadow-md overflow-hidden">
                <a class="text-cyan-600 hover:text-cyan-800 font-bold text-lg cursor-pointer">Pengampunan yang Memberikan Hidup</a>
                <p class="text-sm text-gray-600 mb-2">Matius 6:33</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam soluta ratione praesentium. Nam aspernatur, corporis repellat quibusdam quisquam enim consequatur?</p>
            </div>
            <div class="row-span-1 bg-slate-700 py-1 px-5 shadow-md">
                <p class="text-white">Minggu, 10 Oktober 2010</p>
            </div>
        </div>
        <div clas="w-full bg-white">
            <div class="h-60 p-5 shadow-md overflow-hidden">
                <a class="text-cyan-600 hover:text-cyan-800 font-bold text-lg cursor-pointer">Pengampunan yang Memberikan Hidup</a>
                <p class="text-sm text-gray-600 mb-2">Matius 6:33</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam soluta ratione praesentium. Nam aspernatur, corporis repellat quibusdam quisquam enim consequatur?</p>
            </div>
            <div class="row-span-1 bg-slate-700 py-1 px-5 shadow-md">
                <p class="text-white">Minggu, 10 Oktober 2010</p>
            </div>
        </div>
        <div clas="w-full bg-white">
            <div class="h-60 p-5 shadow-md overflow-hidden">
                <a class="text-cyan-600 hover:text-cyan-800 font-bold text-lg cursor-pointer">Pengampunan yang Memberikan Hidup</a>
                <p class="text-sm text-gray-600 mb-2">Matius 6:33</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam soluta ratione praesentium. Nam aspernatur, corporis repellat quibusdam quisquam enim consequatur?</p>
            </div>
            <div class="row-span-1 bg-slate-700 py-1 px-5 shadow-md">
                <p class="text-white">Minggu, 10 Oktober 2010</p>
            </div>
        </div>
        <div clas="w-full bg-white">
            <div class="h-60 p-5 shadow-md overflow-hidden">
                <a class="text-cyan-600 hover:text-cyan-800 font-bold text-lg cursor-pointer">Pengampunan yang Memberikan Hidup</a>
                <p class="text-sm text-gray-600 mb-2">Matius 6:33</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam soluta ratione praesentium. Nam aspernatur, corporis repellat quibusdam quisquam enim consequatur?</p>
            </div>
            <div class="row-span-1 bg-slate-700 py-1 px-5 shadow-md">
                <p class="text-white">Minggu, 10 Oktober 2010</p>
            </div>
        </div>
        <div clas="w-full bg-white">
            <div class="h-60 p-5 shadow-md overflow-hidden">
                <a class="text-cyan-600 hover:text-cyan-800 font-bold text-lg cursor-pointer">Pengampunan yang Memberikan Hidup</a>
                <p class="text-sm text-gray-600 mb-2">Matius 6:33</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam soluta ratione praesentium. Nam aspernatur, corporis repellat quibusdam quisquam enim consequatur?</p>
            </div>
            <div class="row-span-1 bg-slate-700 py-1 px-5 shadow-md">
                <p class="text-white">Minggu, 10 Oktober 2010</p>
            </div>
        </div>
        <div clas="w-full bg-white">
            <div class="h-60 p-5 shadow-md overflow-hidden">
                <a class="text-cyan-600 hover:text-cyan-800 font-bold text-lg cursor-pointer">Pengampunan yang Memberikan Hidup</a>
                <p class="text-sm text-gray-600 mb-2">Matius 6:33</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam soluta ratione praesentium. Nam aspernatur, corporis repellat quibusdam quisquam enim consequatur?</p>
            </div>
            <div class="row-span-1 bg-slate-700 py-1 px-5 shadow-md">
                <p class="text-white">Minggu, 10 Oktober 2010</p>
            </div>
        </div>
        <div clas="w-full bg-white">
            <div class="h-60 p-5 shadow-md overflow-hidden">
                <a class="text-cyan-600 hover:text-cyan-800 font-bold text-lg cursor-pointer">Pengampunan yang Memberikan Hidup</a>
                <p class="text-sm text-gray-600 mb-2">Matius 6:33</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam soluta ratione praesentium. Nam aspernatur, corporis repellat quibusdam quisquam enim consequatur?</p>
            </div>
            <div class="row-span-1 bg-slate-700 py-1 px-5 shadow-md">
                <p class="text-white">Minggu, 10 Oktober 2010</p>
            </div>
        </div>
        <div clas="w-full bg-white">
            <div class="h-60 p-5 shadow-md overflow-hidden">
                <a class="text-cyan-600 hover:text-cyan-800 font-bold text-lg cursor-pointer">Pengampunan yang Memberikan Hidup</a>
                <p class="text-sm text-gray-600 mb-2">Matius 6:33</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam soluta ratione praesentium. Nam aspernatur, corporis repellat quibusdam quisquam enim consequatur?</p>
            </div>
            <div class="row-span-1 bg-slate-700 py-1 px-5 shadow-md">
                <p class="text-white">Minggu, 10 Oktober 2010</p>
            </div>
        </div>
    </div>
</section>
<div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
    <div class="flex flex-1 justify-between sm:hidden">
        <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
        <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
    </div>
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
        <div>
            <p class="text-sm text-gray-700">
                Showing
                <span class="font-medium">1</span>
                to
                <span class="font-medium">10</span>
                of
                <span class="font-medium">97</span>
                results
            </p>
        </div>
        <div>
            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                    </svg>
                </a>
                <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-cyan-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</div>


@include('component/footer')