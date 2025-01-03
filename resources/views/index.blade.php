<x-layout :title="$title">

    <div class="hero bg-white dark:bg-[#121212] grid grid-cols-1 lg:grid-cols-2 gap-x-12 px-5 justify-center md:px-48">

        <div class="hero-content py-10">

            <p
                class="animate__animated animate__bounceInLeft hero-label text-center md:text-left text-gray-600 dark:text-gray-400 uppercase font-semibold">
                The ultimate luxury experience
            </p>

            <h1
                class="animate__animated animate__bounceInLeft text-slate-900 dark:text-yellow-600 capitalize font-bold text-center md:text-left old-standard">
                New Carrick Hills Home
            </h1>

            <div class="buttons flex flex-row gap-x-6 mt-5 uppercase justify-center lg:justify-normal">
                <a href="{{ route('apartments') }}"
                    class="animate__animated animate__bounceInUp py-[16px] text-sm px-10 text-white bg-cyan-600 hover:bg-cyan-700 dark:bg-purple-700 dark:hover:bg-purple-600">
                    Take a tour
                </a>

                <a href="{{ route('contact') }}"
                    class="animate__animated animate__bounceInUp py-[16px] text-sm px-5 md:px-10 text-gray-600 dark:text-white bg-transparent hover:bg-yellow-600 hover:text-white border-gray-200 border ">
                    Learn More
                </a>
            </div>

        </div>

        <div class="img-slideshow block">

            <img src="{{ asset('assets/IMG_3654.jpeg') }}" alt="" id="show-1">


            <div class="float-img">
                <img src="{{ asset('assets/IMG_3651.jpeg') }}" alt="" id="show-2">
            </div>

        </div>

    </div>

    <section
        class="about-us flex flex-wrap justify-center pt-[300px] pb-16 px-4 md:px-32 lg:px-48 w-full bg-white dark:bg-[#121212]">
        <div class="content-section flex flex-wrap gap-x-7 justify-center gap-y-3 md:gap-y-0 ">

            <div
                class="slide-up shadow shadow-gray-300 dark:shadow-gray-600 w-[230px] h-[270px] grow md:grow-0 my-0 md:mt-[-30px] px-3 dark:bg-[#7a5b3a] py-2 flex flex-col gap-y-4 items-center place-content-center justify-center">
                <div
                    class="icon w-full h-[80px] flex items-center justify-center text-[3.5rem] text-gray-600 dark:text-gray-100">
                    <i class="fa-solid fa-people-group"></i>
                </div>

                <h3 class="text-center capitalize text-[18px] font-[450] text-slate-600 dark:text-slate-100 ">
                    Strong Team</h3>

                <div
                    class="w-full flex justify-center items-center text-center text-[14px] text-slate-500 dark:text-slate-200 px-[10px]">
                    Our expert team ensures exceptional service, making your stay seamless and comfortable.
                </div>
            </div>

            <div class="slide-right w-[230px] h-[300px] grow md:grow-0"></div>

            <div class="slide-right w-[230px] h-[270px] grow md:grow-0"></div>

            <div
                class="bg-cyan-800 dark:bg-cyan-600 w-[230px] h-[250px] grow md:grow-0 flex items-center justify-center flex-col gap-y-4">


                <span class="material-symbols-outlined text-[4rem] text-white">
                    night_shelter
                </span>

                <h3 class="text-center capitalize text-[18px] font-[450] text-white">Luxury Apartment</h3>

                <div class="text-white leading-[2] text-[13px] px-3 text-center">
                    Experience elegance, comfort, and modern amenities tailored for your perfect stay.
                </div>


            </div>


        </div>

        <div
            class="slide-left about-hero relative w-full py-8 px-3 md:py-10 md:px-6 flex flex-col gap-y-[2rem] md:gap-y-[1.5rem] place-content-center justify-center">

            <h3 class="text-gray-500 dark:text-gray-200 uppercase text-[14px] text-center md:text-left">ABOUT US</h3>

            <p
                class="text-gray-900 dark:text-white font-semibold text-[1rem] md:text-[2.8rem] lg:text-[4rem] capitalize text-center md:text-left">
                Discover Our Apartments
            </p>

            <div class="leading-[2.5] text-gray-600 dark:text-gray-400 text-[13px] text-center md:text-left">Welcome to
                {{ config('app.name') }} where luxury meets comfort. Our apartments are thoughtfully designed to provide
                a relaxing and stylish home-away-from-home experience. Our apartments feature modern amenities,
                exceptional service, and a commitment to excellence. Whether you're here for business or leisure,
                discover the perfect blend of elegance, convenience, and warmth with us. Let us redefine your
                expectations of a serviced apartment.</div>

            <a href="{{ route('apartments') }}"
                class="book-btn w-fit py-[16px] text-sm px-14 text-white bg-yellow-600 hover:text-yellow-600 uppercase border-[2px] border-white dark:border-[#121212] hover:border-yellow-600 dark:hover:border-yellow-600 hover:bg-transparent mx-auto md:mx-0">Discover</a>


        </div>
    </section>

    <section class="facilities w-full py-6 md:py-16 px-3 ">
        <h3 class="text-gray-400 tracking-[3px] dark-text-white text-[14px] font-semibold text-center uppercase mb-6">
            Facilities
        </h3>

        <h4 class="text-[1.5rem] md:text-[3.5rem] text-slate-800 dark:text-white text-center mb-6 font-[450]">Apartments
            & Rooms
        </h4>

        <a href="{{ route('apartments') }}"
            class="view-more w-fit px-2 mb-6 text-center flex flex-row gap-x-1 place-items-center mx-auto text-slate-400 dark:text-yellow-600 hover:text-yellow-500 dark:hover:text-white font-[500] text-[14px]"><span>View
                More</span><i class="fa-solid fa-arrow-right"></i>
        </a>


        <div
            class="price-facilities w-full px-5 py-6 md:px-24 md:py-8 lg:px-28 flex justify-center flex-wrap gap-x-5 gap-y-4 ">

            <div class="slide-up basis-[285px] h-[320px] grow md:grow-0">

                <div class="anchor">
                    <a href="{{ asset('assets/IMG_3654.jpeg') }}" target="_blank">
                        <div class="img-1">
                        </div>
                    </a>
                </div>

                <div class="content">
                    <h5 class="text-center text-[17px] text-slate-600 dark:text-gray-300 font-semibold">Single
                        Room
                    </h5>

                    <p class="text-center captialize text-[14px] text-slate-400 dark:text-slate-400">1 Queen Sized Bed,
                        1
                        Room</p>

                    <a href="{{ route('apartment', 1) }}"
                        class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                        Now</a>
                </div>

            </div>

            <div class="slide-up  basis-[285px] h-[320px] grow md:grow-0">

                <div class="anchor">
                    <a href="{{ asset('assets/IMG_3665.jpeg') }}" target="_blank">
                        <div class="img-2">
                        </div>
                    </a>
                </div>

                <div class="content">
                    <h5 class="text-center text-[17px] text-slate-600 dark:text-gray-300 font-semibold">Studio Room
                    </h5>

                    <p class="text-center captialize text-[14px] text-slate-400 dark:text-slate-400">1 King Sized Bed, 1
                        Room</p>

                    <a href="{{ route('apartment', 2) }}"
                        class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                        Now</a>
                </div>

            </div>

            <div class="slide-up basis-[285px] h-[320px] grow md:grow-0">

                <div class="anchor">
                    <a href="{{ asset('assets/IMG_3665.jpeg') }}" target="_blank">
                        <div class="img-3">
                        </div>
                    </a>
                </div>

                <div class="content">
                    <h5 class="text-center text-[17px] text-slate-600 dark:text-gray-300 font-semibold">Two
                        Bedrooms
                    </h5>

                    <p class="text-center captialize text-[14px] text-slate-400 dark:text-slate-400">1 King Sized Bed,
                        2 Rooms</p>

                    <a href="{{ route('apartment', 4) }}"
                        class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                        Now</a>
                </div>

            </div>

            <div class="slide-up basis-[285px] h-[320px] grow md:grow-0">

                <div class="anchor">
                    <a href="{{ asset('assets/IMG_3649.jpeg') }}" target="_blank">
                        <div class="img-4">
                        </div>
                    </a>
                </div>

                <div class="content">
                    <h5 class="text-center text-[17px] text-slate-600 dark:text-gray-300 font-semibold">Four Bedrooms
                        Penthouse
                    </h5>

                    <p class="text-center captialize text-[14px] text-slate-400 dark:text-slate-400">2 King Sized Bed,
                        4 Rooms</p>

                    <a href="{{ route('apartment', 5) }}"
                        class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                        Now</a>
                </div>
            </div>
        </div>


    </section>

    <section class="core-features w-full py-6 md:py-16 px-3 ">
        <h3 class="text-gray-400 tracking-[3px] dark-text-white text-[14px] font-semibold text-center uppercase mb-6">
            Facilities
        </h3>

        <h4
            class="old-standard text-[1.5rem] md:text-[60px] text-slate-800 dark:text-white text-center mb-6 font-[450]">
            Core
            Features
        </h4>

        <div class="features w-full px-5 py-6 md:px-24 md:py-8 lg:px-28 flex justify-center flex-wrap gap-x-8 gap-y-7 ">

            <div
                class="slide-up  relative basis-[350px] h-[370px] shrink md:shrink-0 grow md:grow-0 flex flex-col gap-y-8 place-content-center px-6 md:px-12 py-18">

                <div
                    class="absolute top-0 right-0 w-[35%] h-[100px] flex justify-center items-center text-[6rem] text-slate-100 dark:text-slate-700">
                    01
                </div>

                <div class="icon w-[100px] h-[100px]">
                    <img src="{{ asset('assets/icons/rate.png') }}" class="w-full h-full object-contain"
                        alt="">
                </div>

                <h5 class="old-standard uppercase text-[#222] dark:text-gray-200 font-[400] text-[24px]">Good Standard
                </h5>

                <div class=" text-[#222] dark:text-gray-200 font-[350] w-full text-[13px]">
                    We pride ourselves on maintaining the highest standards of quality and comfort, ensuring every stay
                    exceeds expectations.
                </div>


            </div>

            <div
                class="slide-up relative basis-[350px] h-[370px] shrink md:shrink-0 grow md:grow-0 flex flex-col gap-y-8 place-content-center px-6 md:px-12 py-18">

                <div
                    class="absolute top-0 right-0 w-[35%] h-[100px] flex justify-center items-center text-[6rem] text-slate-100 dark:text-slate-700">
                    02
                </div>

                <div class="icon w-[100px] h-[100px]">
                    <img src="{{ asset('assets/icons/mute.png') }}" class="w-full h-full object-contain"
                        alt="">
                </div>

                <h5 class="old-standard uppercase text-[#222] dark:text-gray-200 font-[400] text-[24px]">Quiet Hours
                </h5>

                <div class=" text-[#222] dark:text-gray-200 font-[350] w-full text-[13px]">
                    Enjoy peace and relaxation with designated quiet hours, ensuring a serene and restful environment
                    for all our guests.
                </div>


            </div>

            <div
                class="slide-up relative basis-[350px] h-[370px] shrink md:shrink-0 grow md:grow-0 flex flex-col gap-y-8 place-content-center px-6 md:px-12 py-18">

                <div
                    class="absolute top-0 right-0 w-[35%] h-[100px] flex justify-center items-center text-[6rem] text-slate-100 dark:text-slate-700">
                    03
                </div>

                <div class="icon w-[100px] h-[100px]">
                    <img src="{{ asset('assets/icons/map.png') }}" class="w-full h-full object-contain"
                        alt="">
                </div>

                <h5 class="old-standard uppercase text-[#222] dark:text-gray-200 font-[400] text-[24px]">Best Locations
                </h5>

                <div class=" text-[#222] dark:text-gray-200 font-[350] w-full text-[13px]">
                    Our apartments are strategically located in prime areas, offering easy access to major attractions,
                    business hubs, and local conveniences.
                </div>


            </div>

            <div
                class="slide-up relative basis-[350px] h-[370px] shrink md:shrink-0 grow md:grow-0 flex flex-col gap-y-8 place-content-center px-6 md:px-12 py-18">

                <div
                    class="absolute top-0 right-0 w-[35%] h-[100px] flex justify-center items-center text-[6rem] text-slate-100 dark:text-slate-700">
                    04
                </div>

                <div class="icon w-[100px] h-[100px]">
                    <img src="{{ asset('assets/icons/time.png') }}" class="w-full h-full object-contain"
                        alt="">
                </div>

                <h5 class="old-standard uppercase text-[#222] dark:text-gray-200 font-[400] text-[24px]">Free
                    Cancellations
                </h5>

                <div class=" text-[#222] dark:text-gray-200 font-[350] w-full text-[13px]">
                    Enjoy flexibility and peace of mind with our hassle-free cancellation policy, designed to
                    accommodate your changing plans.
                </div>


            </div>

            <div
                class="slide-up relative basis-[350px] h-[370px] shrink md:shrink-0 grow md:grow-0 flex flex-col gap-y-8 place-content-center px-6 md:px-12 py-18">

                <div
                    class="absolute top-0 right-0 w-[35%] h-[100px] flex justify-center items-center text-[6rem] text-slate-100 dark:text-slate-700">
                    05
                </div>

                <div class="icon w-[100px] h-[100px]">
                    <img src="{{ asset('assets/icons/atm-card.png') }}" class="w-full h-full object-contain"
                        alt="">
                </div>

                <h5 class="old-standard uppercase text-[#222] dark:text-gray-200 font-[400] text-[24px]">Payment
                    Options
                </h5>

                <div class=" text-[#222] dark:text-gray-200 font-[350] w-full text-[13px]">
                    We offer a variety of convenient payment options to suit your needs, including credit/debit cards,
                    bank transfers, and online payment methods.
                </div>


            </div>

            <div
                class="slide-up relative basis-[350px] h-[370px] shrink md:shrink-0 grow md:grow-0 flex flex-col gap-y-8 place-content-center px-6 md:px-12 py-18">

                <div
                    class="absolute top-0 right-0 w-[35%] h-[100px] flex justify-center items-center text-[6rem] text-slate-100 dark:text-slate-700">
                    06
                </div>

                <div class="icon w-[100px] h-[100px]">
                    <img src="{{ asset('assets/icons/gift.png') }}" class="w-full h-full object-contain"
                        alt="">
                </div>

                <h5 class="old-standard uppercase text-[#222] dark:text-gray-200 font-[400] text-[24px]">Special Offers
                </h5>

                <div class=" text-[#222] dark:text-gray-200 font-[350] w-full text-[13px]">
                    Take advantage of our exclusive deals and discounts for a memorable stay at unbeatable rates. Check
                    back regularly for new offers!
                </div>


            </div>


        </div>
    </section>

    <section
        class="accolades w-full py-6 md:py-16 px-3 bg-yellow-950 dark:bg-[#121212]  flex justify-center gap-x-6 gap-y-6 flex-wrap place-content-center">

        <div class="basis-[150px] md:basis-[220px] h-fit py-4">

            <div class="icon w-[100px] h-[100px] text-white mb-3">
                <img src="{{ asset('assets/icons/home.png') }}" class="w-full h-full object-contain" alt="">
            </div>

            <h5 class=" text-white dark:text-white  old-standard"><span class="text-[40px] font-bold">
                    100</span><span class="text-[12px]">+</span></h5>

            <p class="mt-2 text-[13px] text-white dark:text-white uppercase">Apartments in Nigeria</p>
        </div>

        <div class="basis-[150px] md:basis-[220px] h-fit py-4">

            <div class="icon w-[100px] h-[100px] text-white mb-3">
                <img src="{{ asset('assets/icons/tools.png') }}" class="w-full h-full object-contain"
                    alt="">
            </div>

            <h5 class=" text-white dark:text-white  old-standard"><span class="text-[40px] font-bold">
                    8</span><span class="text-[12px]">+</span></h5>

            <p class="mt-2 text-[13px] text-white dark:text-white uppercase">Active Services</p>
        </div>

        <div class="basis-[150px] md:basis-[220px] h-fit py-4">

            <div class="icon w-[100px] h-[100px] text-white mb-3">
                <img src="{{ asset('assets/icons/wifi.png') }}" class="w-full h-full object-contain" alt="">
            </div>

            <h5 class=" text-white dark:text-white  old-standard"><span class="text-[40px] font-bold">
                    Wifi</span><span class="text-[12px]">+</span></h5>

            <p class="mt-2 text-[13px] text-white dark:text-white uppercase">24/7 Internent</p>
        </div>

        <div class="basis-[150px] md:basis-[220px] h-fit py-4">

            <div class="icon w-[100px] h-[100px] text-white mb-3">
                <img src="{{ asset('assets/icons/customer-experience.png') }}" class="w-full h-full object-contain"
                    alt="">
            </div>

            <h5 class=" text-white dark:text-white  old-standard"><span class="text-[40px] font-bold">
                    1000</span><span class="text-[12px]">+</span></h5>

            <p class="mt-2 text-[13px] text-white dark:text-white uppercase">Satisfied CUstomers</p>
        </div>
    </section>

    <x-subscribe />



    @push('script')
        <script>
            "use strict";

            const img1 = document.querySelector("#show-1");
            const img2 = document.querySelector("#show-2");

            function swapImages() {
                let currentFloatSrc = img2.getAttribute("src");
                let currentImgSrc = img1.getAttribute("src");

                img1.setAttribute("src", currentFloatSrc);
                img2.setAttribute("src", currentImgSrc);
            }

            setInterval(() => {
                swapImages();
            }, 3000);

            const amounts = document.querySelectorAll(".amount-ngn");

            amounts.forEach(amount => {
                let former = parseFloat(amount.textContent)

                former = former.toLocaleString("en-NG", {
                    style: "currency",
                    currency: "NGN",
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2,
                })

                amount.textContent = former
            });
        </script>
        <script>
            var slideUp = {
                distance: '150%',
                origin: 'bottom',
                opacity: null,
                reset: false,
                useDelay: 'once',
                desktop: true,
                mobile: true,
                viewOffset: {
                    top: 10
                }
            };

            var slideRight = {
                distance: '150%',
                origin: 'left',
                opacity: null,
                reset: false,
                useDelay: 'once',
                desktop: true,
                mobile: true,
                viewOffset: {
                    top: 10
                }
            };

            var slideLeft = {
                distance: '150%',
                origin: 'right',
                opacity: null,
                reset: false,
                useDelay: 'once',
                desktop: true,
                mobile: true,
                viewOffset: {
                    top: 10
                }
            };

            ScrollReveal().reveal('.slide-up', slideUp);
            ScrollReveal().reveal('.slide-right', slideRight);
            ScrollReveal().reveal('.slide-left', slideLeft);
        </script>
    @endpush

</x-layout>
