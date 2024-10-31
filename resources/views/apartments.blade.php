<x-layout :title="$title">

    <section class="apartment-hero">

        <div class="content">

            <p class="hero-label text-center md:text-left text-gray-400 dark:text-gray-200 uppercase font-semibold">
                The ultimate luxury experience
            </p>

            <h1 class="text-slate-100 dark:text-yellow-500 capitalize font-bold text-center md:text-left old-standard">
                Apartments
            </h1>

        </div>

    </section>

    <section
        class="apartments py-8 md:py-32 px-3 flex flex-wrap justify-center gap-x-12 gap-y-10 bg-gray-100 dark:bg-[#1212]">

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3672.jpeg') }}" class="w-full h-full" alt="">
            </div>

            <div
                class="apartment-facilities bg-white  w-4/5 h-[52.4px] absolute z-[2] top-[49%] left-1/2 translate-x-[-50%] translate-y-[-49%] flex flex-row gap-x-3 justify-center items-center text-[14px] text-gray-700">
                <i class="fi fi-rr-bed"></i>
                <i class="fi fi-ss-wifi"></i>
                <i class="fi fi-ts-car-alt"></i>
                <i class="fi fi-rr-mug-hot-alt"></i>
                <i class="fi fi-rr-room-service"></i>
                <i class="fi fi-ts-gamepad"></i>
                <i class="fi fi-rr-swimmer"></i>
            </div>

            <div class="content w-full h-[249.2px] bg-white flex flex-col gap-y-6 py-10 px-3">
                <a href=""
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Minimal
                    Duplex
                    Apartment</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <button
                    class="px-8 py-3.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-5 uppercase">Book
                    Now</button>
            </div>
        </div>

    </section>

</x-layout>
