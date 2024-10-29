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
                    class="py-[16px] text-sm px-5 md:px-10 text-gray-600 dark:text-white bg-transparent hover:bg-purple-700 hover:text-white  dark:hover:bg-cyan-600 border-white border ">
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
                class="shadow-sm shadow-gray-300 dark:shadow-none dark:bg-white w-[230px] h-[270px] grow md:grow-0 my-0 md:mt-[-30px] block">
                <div
                    class="icon w-full h-[80px] flex items-center justify-center text-[3.5rem] text-gray-600 dark:text-gray-700">
                    <i class="fa-solid fa-people-group"></i>
                </div>

                <h3 class="text-center capitalize text-[18px] font-[450] text-slate-600 mt-[8px]">Strong Team</h3>

                <div
                    class="w-full h-[150px] flex justify-center items-center text-center text-[14px] text-slate-500 px-[10px]">
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
                class="book-btn w-fit py-[16px] text-sm px-14 text-white bg-yellow-600 hover:text-yellow-600 uppercase hover:border-[2px] hover:border-yellow-600 hover:bg-transparent mx-auto md:mx-0">Book
                Now</a>


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
        </script>
    @endpush

</x-layout>
