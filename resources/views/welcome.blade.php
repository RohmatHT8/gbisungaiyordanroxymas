<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    @vite(['resources/css/navbar.css', 'resources/css/app.css'])
    <link rel="icon" href="{{ asset('asset/images/favicon.png') }}" type="image/x-icon">
    <title>Home - GBI Sungai Yordan Roxy Mas</title>
</head>

<body>
    <nav id="mainNavbar" class="navbar navbar-expand-lg py-4 py-lg-0 fixed-top">
        <div class="container px-4">
            <img src="{{asset('asset/images/logo.png')}}" alt="">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#top-navbar" aria-controls="top-navbar">
                <i class="lni lni-grid-alt nav-link"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="top-navbar" aria-labelledby="top-navbarLabel">
                <!-- Navigation Bar Content -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#top-navbar" aria-controls="top-navbar">
                    <div class="d-flex justify-content-between p-3">
                        <img src="{{asset('asset/images/logo.png')}}" alt="">
                        <i class="lni lni-cross-circle nav-link"></i>
                    </div>
                </button>
                <ul class="navbar-nav ms-lg-auto p-4 p-lg-0">
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Team</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                            <li><a class="dropdown-item" href="#">Pricing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">Company</a>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- herro section -->
    <section id="yourSectionId" class="hero-section d-flex align-items-center justify-content-center">
        <div class="text-center text-dark">
            <h1 class="text-header">GBI SUNGAI YORDAN ROXY MAS</h1>
            <span id="hero-typing" class="text-header-hero"></span>
        </div>
        <div class="bg-under-hero-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e4c577" fill-opacity="0.5" d="M0,64L1440,224L1440,320L0,320Z"></path>
            </svg>
        </div>
        <div class="bg-under-hero-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e4c577" fill-opacity="1" d="M0,64L1440,224L1440,320L0,320Z"></path>
            </svg>
        </div>
        <div class="bg-under-hero">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#212529" fill-opacity="1" d="M0,64L1440,224L1440,320L0,320Z"></path>
            </svg>
        </div>
        <!-- <div class="bg-gembala">
            <img src="{{asset('asset/gembala.png')}}" alt="" width="100%">
        </div> -->
    </section>

    <section id="schedule" class="py-5 bg-dark">
        <div class="container px-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="py-2 text-center text-warning m-0">JADWAL MINGGU INI</h4>
                    <hr class="text-warning hr-section" />
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                                alt="Skyscrapers" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top"
                                alt="Los Angeles Skyscrapers" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top"
                                alt="Palm Springs Road" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This card has even longer content than the first to show
                                    that equal height action.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="welcome" class="py-5">
        <div class="container px-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="py-2 text-center fw-bold">Bootstrap 5 Navbar</h1>
                </div>
                <div class="col-md-12 px-lg-0">
                    <div class="welcome-description mt-4 text-center">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, eaque. Doloremque inventore
                            dolores veniam atque rerum veritatis, consequuntur ad voluptas at pariatur dicta, neque
                            vitae? Perspiciatis laudantium aliquid aspernatur necessitatibus.
                            Quidem nulla excepturi a doloremque asperiores voluptatibus commodi blanditiis dolor
                            mollitia deserunt perferendis ipsam consequuntur laborum impedit, incidunt quis, labore
                            minima natus similique error qui illo quisquam atque consequatur? Earum.
                            Hic, cupiditate quae ab, officia qui sapiente doloribus debitis iusto blanditiis in
                            perspiciatis accusantium ipsum placeat quos. Adipisci delectus omnis, eius eveniet ipsum
                            perferendis! Magni deserunt reiciendis quam sed dolores.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nostrum quia voluptates hic
                            aliquid vero dolore distinctio sed, a eum aperiam nihil tempora impedit sit quod. Quidem
                            reprehenderit facere mollitia.
                            Vero quo provident, magni id iusto quia assumenda, odit officiis fugit rerum modi voluptates
                            ratione explicabo optio deleniti ipsum temporibus accusantium sunt architecto, tenetur
                            excepturi aperiam. Molestias ut architecto quo!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nulla tempora impedit
                            perspiciatis laborum dignissimos magnam provident aperiam expedita nostrum, itaque at
                            dolore? Culpa adipisci eius maxime quisquam! Voluptatem, cumque.
                            Iure ex veniam sunt, esse explicabo maxime sapiente ab veritatis delectus error unde
                            tenetur, soluta amet aliquid officiis autem minima quasi, placeat voluptatem voluptates
                            consectetur dolores repellendus et totam. Cupiditate?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="welcome" class="py-5">
        <div class="container px-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="py-2 text-center fw-bold">Bootstrap 5 Navbar</h1>
                </div>
                <div class="col-md-12 px-lg-0">
                    <div class="welcome-description mt-4 text-center">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, eaque. Doloremque inventore
                            dolores veniam atque rerum veritatis, consequuntur ad voluptas at pariatur dicta, neque
                            vitae? Perspiciatis laudantium aliquid aspernatur necessitatibus.
                            Quidem nulla excepturi a doloremque asperiores voluptatibus commodi blanditiis dolor
                            mollitia deserunt perferendis ipsam consequuntur laborum impedit, incidunt quis, labore
                            minima natus similique error qui illo quisquam atque consequatur? Earum.
                            Hic, cupiditate quae ab, officia qui sapiente doloribus debitis iusto blanditiis in
                            perspiciatis accusantium ipsum placeat quos. Adipisci delectus omnis, eius eveniet ipsum
                            perferendis! Magni deserunt reiciendis quam sed dolores.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nostrum quia voluptates hic
                            aliquid vero dolore distinctio sed, a eum aperiam nihil tempora impedit sit quod. Quidem
                            reprehenderit facere mollitia.
                            Vero quo provident, magni id iusto quia assumenda, odit officiis fugit rerum modi voluptates
                            ratione explicabo optio deleniti ipsum temporibus accusantium sunt architecto, tenetur
                            excepturi aperiam. Molestias ut architecto quo!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nulla tempora impedit
                            perspiciatis laborum dignissimos magnam provident aperiam expedita nostrum, itaque at
                            dolore? Culpa adipisci eius maxime quisquam! Voluptatem, cumque.
                            Iure ex veniam sunt, esse explicabo maxime sapiente ab veritatis delectus error unde
                            tenetur, soluta amet aliquid officiis autem minima quasi, placeat voluptatem voluptates
                            consectetur dolores repellendus et totam. Cupiditate?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <script>
        // effect nav
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('mainNavbar');
            const topNavbar = document.getElementById('top-navbar');
            const section = document.getElementById('yourSectionId'); // Change to the ID of the section you want to detect

            window.addEventListener('scroll', function() {
                const sectionTop = section.offsetTop;
                const scrollPosition = window.scrollY;
                if (scrollPosition > sectionTop) {
                    navbar.classList.add('navbar-solid');
                    topNavbar.classList.add('bg-dark');
                } else {
                    navbar.classList.remove('navbar-solid');
                    topNavbar.classList.remove('bg-dark');
                }
            });
        });

        // effect-typing
        document.addEventListener("DOMContentLoaded", function() {
            const textElement = document.getElementById('hero-typing');
            const text = "GEREJA SAHABAT KELUARGA"; // Ubah teks sesuai kebutuhan
            let index = 0;
            let isAdding = true;

            function typeEffect() {
                if (isAdding) {
                    if (index < text.length) {
                        textElement.innerHTML += text[index];
                        index++;
                    } else {
                        isAdding = false;
                        setTimeout(typeEffect, 1000); // Tunggu sebentar sebelum mulai menghapus
                        return;
                    }
                } else {
                    if (index > 0) {
                        textElement.innerHTML = text.substring(0, index - 1);
                        index--;
                    } else {
                        isAdding = true;
                    }
                }

                setTimeout(typeEffect, isAdding ? 100 : 50); // Kecepatan mengetik atau menghapus
            }

            typeEffect();
        });
    </script>
</body>

</html>