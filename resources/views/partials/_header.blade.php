<header class="bg-white dark:bg-[#121212] ">

    <div class="logo">
        <img src="{{ asset('assets/logo-light.png') }}" alt="">
    </div>

    <div class="links">
        <a href="{{ route('home') }}" class="text-cyan-700 dark:text-yellow-500">Home</a>
        <a href="{{ route('apartments') }}" class="text-cyan-700 dark:text-yellow-500">Apartments</a>
        <a href="" class="text-cyan-700 dark:text-yellow-500">Gallery</a>
        <a href="" class="text-cyan-700 dark:text-yellow-500">Locations</a>
    </div>

    <div class="actions">

        <div id="theme-toggle"
            class="cursor-pointer w-8 h-8 flex place-items-center justify-center rounded-full bg-slate-800 dark:hover:bg-yellow-600 dark:bg-yellow-700">
            <div id="theme-toggle-dark-icon" class="hidden text-white text-[14px]">
                <i class="fa-regular fa-moon"></i>
            </div>
            <div id="theme-toggle-light-icon" class="hidden text-white text-[14px]">
                <i class="fa-solid fa-circle-half-stroke"></i>
            </div>
        </div>

        <a href=""
            class="contact text-cyan-700 dark:text-yellow-500 border border-cyan-700 dark:border-yellow-500 px-4 py-1 hover:bg-cyan-700 hover:text-white dark:hover:bg-yellow-500 dark:hover:text-white">Contact
            Us</a>

        <div
            class="toggle-icon text-slate-800 dark:text-yellow-700 hover:text-slate-700 dark:hover:text-yellow-600 cursor-pointer">
            <i class="fa-solid fa-bars-staggered "></i>
        </div>
    </div>

</header>

@push('script')
    <script type="text/javascript">
        "use strict";

        const header = document.querySelector("header");
        const backToTop = document.querySelector(".back-to-top");

        let previousY = window.scrollY;

        window.addEventListener("scroll", function() {
            const currentY = window.scrollY;

            if (currentY < 150) {
                if (header.classList.contains("scrollable")) {
                    header.classList.remove("scrollable");
                    backToTop.classList.remove("active");
                }
            } else {

                previousY = currentY;

                if (!header.classList.contains("scrollable")) {
                    header.classList.add("scrollable");

                }

                if (!backToTop.classList.contains("active")) {
                    backToTop.classList.add("active");
                }

            }

            if (header.classList.contains("scrollable")) {
                if (
                    localStorage.getItem("color-theme") === "dark" ||
                    (!("color-theme" in localStorage) &&
                        window.matchMedia("(prefers-color-scheme: dark)").matches)
                ) {
                    header.classList.remove("shadow", "dark:shadow-[#ddd]");
                    header.classList.add("dark:shadow", "dark:shadow-[#333]");
                } else {
                    header.classList.add("shadow", "dark:shadow-[#ddd]");
                    header.classList.remove("dark:shadow", "dark:shadow-[#333]");
                }
            } else {
                if (
                    localStorage.getItem("color-theme") === "dark" ||
                    (!("color-theme" in localStorage) &&
                        window.matchMedia("(prefers-color-scheme: dark)").matches)
                ) {

                    header.classList.remove("dark:shadow", "dark:shadow-[#333]");
                } else {
                    header.classList.remove("shadow", "dark:shadow-[#ddd]");
                }
            }
        });
    </script>
@endpush
