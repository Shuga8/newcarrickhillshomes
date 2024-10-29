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
                    class="py-[16px] text-sm px-5 md:px-10 text-gray-600 dark:text-white bg-transparent hover:bg-purple-700 hover:text-white  dark:hover:bg-cyan-600 ">
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
