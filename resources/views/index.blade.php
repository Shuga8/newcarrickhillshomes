<x-layout :title="$title">

    <div class="hero bg-white dark:bg-[#121212] grid grid-cols-1 lg:grid-cols-2 gap-x-12 px-5 justify-center md:px-48">

        <div class="hero-content py-10">

            <p class="hero-label text-center md:text-left text-gray-600 dark:text-gray-400 uppercase font-semibold">
                The ultimate luxury experience
            </p>

            <h1 class="text-slate-800 dark:text-yellow-600 uppercase font-bold text-center md:text-left">
                New Carrick Hills Home
            </h1>

            <div class="buttons flex flex-row gap-x-6 mt-5 uppercase justify-center lg:justify-normal">
                <a href=""
                    class="py-[16px] text-sm px-10 text-white bg-cyan-600 hover:bg-cyan-700 dark:bg-purple-700 dark:hover:bg-purple-600">
                    Take a tour
                </a>

                <a href=""
                    class="py-[16px] text-sm px-5 md:px-10 text-gray-600 dark:text-white bg-transparent hover:bg-yellow-600 hover:text-white border-gray-200 border ">
                    Learn More
                </a>
            </div>

        </div>

        <div class="img-slideshow hidden md:hidden lg:block">

            <img src="{{ asset('assets/IMG_3654.jpeg') }}" alt="" id="show-1">


            <div class="float-img">
                <img src="{{ asset('assets/IMG_3651.jpeg') }}" alt="" id="show-2">
            </div>

        </div>

    </div>

    <section
        class="about-us flex flex-wrap justify-center pt-32 pb-16 px-4 md:px-32 lg:px-48 w-full bg-white dark:bg-[#121212]">
        <div class="content-section flex flex-wrap gap-x-7 justify-center gap-y-3 md:gap-y-0 ">

            <div
                class="shadow shadow-gray-300 dark:shadow-gray-600 w-[230px] h-[270px] grow md:grow-0 my-0 md:mt-[-30px] px-3 dark:bg-[#7a5b3a] py-2 flex flex-col gap-y-4 items-center place-content-center justify-center">
                <div
                    class="icon w-full h-[80px] flex items-center justify-center text-[3.5rem] text-gray-600 dark:text-gray-100">
                    <i class="fa-solid fa-people-group"></i>
                </div>

                <h3 class="text-center capitalize text-[18px] font-[450] text-slate-600 dark:text-slate-100 ">
                    Strong Team</h3>

                <div
                    class="w-full flex justify-center items-center text-center text-[14px] text-slate-500 dark:text-slate-200 px-[10px]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, consequatur?
                </div>
            </div>

            <div class="w-[230px] h-[300px] grow md:grow-0"></div>

            <div class="w-[230px] h-[270px] grow md:grow-0"></div>

            <div
                class="bg-cyan-800 dark:bg-cyan-600 w-[230px] h-[250px] grow md:grow-0 flex items-center justify-center flex-col gap-y-4">


                <span class="material-symbols-outlined text-[4rem] text-white">
                    night_shelter
                </span>

                <h3 class="text-center capitalize text-[18px] font-[450] text-white">Luxury Apartment</h3>

                <div class="text-white leading-[2] text-[13px] px-3 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </div>


            </div>


        </div>

        <div
            class="about-hero relative w-full py-8 px-3 md:py-10 md:px-6 flex flex-col gap-y-[2rem] md:gap-y-[1.5rem] place-content-center justify-center">

            <h3 class="text-gray-500 dark:text-gray-200 uppercase text-[14px] text-center md:text-left">ABOUT US</h3>

            <p
                class="text-gray-900 dark:text-white font-semibold text-[1rem] md:text-[2.8rem] lg:text-[4rem] capitalize text-center md:text-left">
                Discover Our Apartments
            </p>

            <div class="leading-[1.5] text-gray-400 text-[13px] text-center md:text-left">Lorem ipsum dolor sit amet
                consectetur adipisicing
                elit. Minus, natus officiis nihil reprehenderit exercitationem harum recusandae molestiae. Cumque
                mollitia rerum, suscipit id consequatur unde corporis quidem recusandae. Magni, officiis eveniet.</div>

            <a href=""
                class="book-btn w-fit py-[16px] text-sm px-14 text-white bg-yellow-600 hover:text-yellow-600 uppercase border-[2px] border-white dark:border-[#121212] hover:border-yellow-600 dark:hover:border-yellow-600 hover:bg-transparent mx-auto md:mx-0">Book
                Now</a>


        </div>
    </section>

    <section class="facilities w-full py-6 md:py-16 px-3 ">
        <h3 class="text-gray-400 tracking-[3px] dark-text-white text-[14px] font-semibold text-center uppercase mb-6">
            Facilities
        </h3>

        <h4 class="text-[1.5rem] md:text-[3.5rem] text-slate-800 dark:text-white text-center mb-6 font-[450]">Apartments
            & Rooms
        </h4>

        <a href=""
            class="view-more w-fit px-2 mb-6 text-center flex flex-row gap-x-1 place-items-center mx-auto text-slate-400 dark:text-yellow-600 hover:text-yellow-500 dark:hover:text-white font-[500] text-[14px]"><span>View
                More</span><i class="fa-solid fa-arrow-right"></i></a>

        <div
            class="price-facilities w-full px-5 py-6 md:px-24 md:py-8 lg:px-28 flex justify-center flex-wrap gap-x-5 gap-y-4 ">

            <div class="basis-[285px] h-[320px] grow md:grow-0">

                <div class="img-1">
                </div>

                <div class="content">
                    <h5 class="text-center text-[17px] text-slate-600 dark:text-gray-300 font-semibold">Flex Apartment
                    </h5>

                    <p class="text-center captialize text-[14px] text-slate-400 dark:text-slate-400">1 persons, 1 Queens
                        Sized Beds,
                        2 rooms</p>

                    <p class=" text-slate-400 dark:text-slate-400 text-[15px]"><span
                            class="amount-ngn text-cyan-700 dark:text-cyan-600 font-semibold">45672</span> / per night
                    </p>
                </div>

            </div>

            <div class="basis-[285px] h-[320px] grow md:grow-0">

                <div class="img-2">
                </div>

                <div class="content">
                    <h5 class="text-center text-[17px] text-slate-600 dark:text-gray-300 font-semibold">Luxury Apartment
                    </h5>

                    <p class="text-center captialize text-[14px] text-slate-400 dark:text-slate-400">1 person, 1 King
                        Sized Bed,
                        1 rooms</p>

                    <p class=" text-slate-400 dark:text-slate-400 text-[15px]"><span
                            class="amount-ngn text-cyan-700 dark:text-cyan-600 font-semibold">50720</span> / per night
                    </p>
                </div>

            </div>

            <div class="basis-[285px] h-[320px] grow md:grow-0">

                <div class="img-3">
                </div>

                <div class="content">
                    <h5 class="text-center text-[17px] text-slate-600 dark:text-gray-300 font-semibold">Garden Apartment
                    </h5>

                    <p class="text-center captialize text-[14px] text-slate-400 dark:text-slate-400">3 Persons, 2 King
                        Sized Beds,
                        3 rooms</p>

                    <p class=" text-slate-400 dark:text-slate-400 text-[15px]"><span
                            class="amount-ngn text-cyan-700 dark:text-cyan-600 font-semibold">110000</span> / per night
                    </p>
                </div>

            </div>

            <div class="basis-[285px] h-[320px] grow md:grow-0">

                <div class="img-4">
                </div>

                <div class="content">
                    <h5 class="text-center text-[17px] text-slate-600 dark:text-gray-300 font-semibold">Party Apartment
                    </h5>

                    <p class="text-center captialize text-[14px] text-slate-400 dark:text-slate-400">Large Party Floor,
                        4 King
                        Sized Beds,
                        6 rooms</p>

                    <p class=" text-slate-400 dark:text-slate-400 text-[15px]"><span
                            class="amount-ngn text-cyan-700 dark:text-cyan-600 font-semibold">170000</span> / per night
                    </p>
                </div>

            </div>
        </div>


    </section>

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
    @endpush

</x-layout>
