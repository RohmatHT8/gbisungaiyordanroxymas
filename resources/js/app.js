// import './bootstrap';
// import 'bootstrap';
// import 'bootstrap/dist/css/bootstrap.min.css';
import "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css";
import "flowbite";
import "bootstrap-icons/font/bootstrap-icons.css";
import AOS from "aos";
import "aos/dist/aos.css";
import Swiper from "swiper";
import "swiper/swiper-bundle.css";
AOS.init();

// document.getElementById('scrollLeft').onclick = function () {
//     document.getElementById('scrollContainer').scrollBy({
//         left: -300, // Adjust the value to control scroll distance
//         behavior: 'smooth'
//     });
// };

document.getElementById('scrollRight').onclick = function () {
    console.log('ke klik')
    document.getElementById('scrollContainer').scrollBy({
        left: 300, // Adjust the value to control scroll distance
        behavior: 'smooth'
    });
};


// swiper()
