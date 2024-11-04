<footer class="footer w-full">

    <div
        class="py-6 md:py-10 px-2 md:px-10 bg-gray-200 border-t border-gray-100 dark:border-gray-900 dark:bg-[#0a070e] flex justify-center base:justify-between gap-y-8 gap-x-4 flex-wrap place-items-center">
        <div class="">
            <div class="logo w-[200px] h-[150px] block mx-auto base:mx-0">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo-light.png') }}" id="footer-logo" class="w-full h-full object-contain"
                        alt="">
                </a>
            </div>


            <div class="flex flex-row gap-x-4 text-[12px] h-fit">
                <a href="{{ route('home') }}"
                    class="py-[4px] px-[6px] bg-purple-900 hover:bg-stone-900 dark:bg-blue-500 dark:hover:bg-cyan-500 bg-opacity-65 hover:bg-opacity-15 dark:bg-opacity-15 dark:hover:bg-opacity-15 rounded-sm">Home</a>
                <a href="{{ route('contact') }}"
                    class="py-[4px] px-[6px] bg-purple-900 hover:bg-stone-900 dark:bg-blue-500 dark:hover:bg-cyan-500 bg-opacity-65 hover:bg-opacity-15 dark:bg-opacity-15 dark:hover:bg-opacity-15 rounded-sm">Contact
                    Us</a>
                <a href="{{ route('apartments') }}"
                    class="py-[4px] px-[6px] bg-purple-900 hover:bg-stone-900 dark:bg-blue-500 dark:hover:bg-cyan-500 bg-opacity-65 hover:bg-opacity-15 dark:bg-opacity-15 dark:hover:bg-opacity-15 rounded-sm">Apartments</a>
                <a href="{{ route('gallery') }}"
                    class="py-[4px] px-[6px] bg-purple-900 hover:bg-stone-900 dark:bg-blue-500 dark:hover:bg-cyan-500 bg-opacity-65 hover:bg-opacity-15 dark:bg-opacity-15 dark:hover:bg-opacity-15 rounded-sm">Gallery</a>
            </div>
        </div>

        <div class="block">
            <div class="flex flex-row gap-x-2 place-items-center justify-start mb-2">
                <span class="text-stone-600 dark:text-gray-100">
                    <i class="fi fi-rr-mobile-button"></i>
                </span>
                <span class="text-slate-800 dark:text-gray-50 text-[12.5px]">
                    <a href="tel:+2348133632646">0813 363 2646</a>
                </span>
            </div>

            <div class="flex flex-row gap-x-2 place-items-center justify-start mb-2">
                <span class="text-stone-600 dark:text-gray-100">
                    <i class="fi fi-br-envelope"></i>
                </span>
                <span class="text-slate-800 dark:text-gray-50 text-[12.5px]">
                    <a href="mailto:info@newcarrickhills.com">info@newcarrickhills.com</a>
                </span>
            </div>

            <div class="flex flex-row gap-x-2 place-items-center justify-start mb-2">
                <span class="text-stone-600 dark:text-gray-100">
                    <i class="fi fi-rs-marker"></i>
                </span>
                <span class="text-slate-800 dark:text-gray-50 text-[12.5px]">
                    3 Femi Akinforlarin street, Ikotun.
                </span>
            </div>
        </div>



        <div class="flex flex-row gap-x-4 text-[12px] h-fit">
            <a href="">
                <img src="{{ asset('assets/icons/facebook.png') }}" class="w-[35px] h-[35px]" alt="">
            </a>
            <a href="">
                <img src="{{ asset('assets/icons/instagram.png') }}" class="w-[35px] h-[35px]" alt="">
            </a>
            <a href="">
                <img src="{{ asset('assets/icons/linkedin.png') }}" class="w-[35px] h-[35px]" alt="">
            </a>
        </div>
    </div>

    <div class="w-full text-center bg-[#1a132b] dark:bg-[#0a070e] text-[11px] py-3 ">
        New Carrick Hills Homes&trade; &copy; <span class="italic"> OneThought Technologies
            <script>
                document.write(new Date().getFullYear())
            </script>
        </span>
    </div>

</footer>
