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
        class="apartments-lg  py-24 md:py-24 px-3 flex flex-wrap justify-center gap-y-[200px] bg-gray-100 dark:bg-[#1212]  ">

        <div class="apartment relative w-[90%] base:w-[75%] h-[75vh] base:h-[100dvh] mb-[130px] base:mb-[20px]">

            <div class="img w-full h-[45%] base:h-[60%] bg-white">
                <img src="{{ asset('assets/IMG_3653.jpeg') }}" class="w-full h-full object-cover" alt="">
            </div>

            <div
                class="content w-[90%] z-[2] base:w-[90%] h-fit absolute bottom-[20%] base:bottom-[65%] left-[50%] translate-x-[-50%] translate-y-[60%] base:translate-y-[125%] bg-white dark:bg-slate-200 border-t-[7px] border-cyan-600 dark:border-yellow-600 px-6 md:px-16 py-4 base:py-16">

                <h2 class="uppercase text-gray-500 font-semibold tracking-[3px] text-center mb-4">SIngle Bed</h2>

                <h3 class="old-standard text-[24px] base:text-[40px] text-black text-center mb-6">Luxury Single Bed</h3>

                <hr class="border-[1px] border-gray-200 dark:border-gray-600 " />

                <div class="inner w-full grid grid-cols-1 base:grid-cols-2 justify-center gap-x-12 gap-y-12 py-10">

                    <div class="w-fit">

                        <p
                            class="text-[12px] base:text-[14px] leading-[1.4] base:leading-[1.9] base-[18px] text-gray-500 mb-7 md:mb-12">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam distinctio illo sint
                            reprehenderit molestiae ducimus odio natus quasi velit cum, dolorum quos voluptates facere
                            nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eaque?

                        </p>

                        <div class="text-center base:text-left">
                            <a href="{{ route('contact') }}"
                                class="px-10 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-500 border-cyan-600 text-white bg-cyan-600 hover:bg-white hover:text-cyan-600 w-fit uppercase">Book
                                Now</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 grid-rows-5 gap-y-4 base:gap-y-6 gap-x-4 ">
                        <div
                            class="flex flex-row gap-x-3.5 place-content-center justify-start text-[12px] base:text-[14px] w-fit h-fit ">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-bath"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Air Conditioner
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-wifi"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                High Speed Wifi
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center justify-start text-[12px] base:text-[14px] h-fit w-fit">

                            <span class="text-stone-700">
                                <i class="fi fi-rs-room-service"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Breakfast
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rs-microwave"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Kitchen
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-broom"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Cleaning
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-shower"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Shower
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-grocery-basket"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Grocery
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-bed"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Single Bed
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-cart-shopping-fast"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Shop Near
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-br-toilet-paper-blank"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Towel
                            </span>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="apartment relative w-[90%] base:w-[75%] h-[75vh] base:h-[100dvh] mb-[200px] base:mb-[20px]">

            <div class="img w-full h-[45%] base:h-[60%] bg-white">
                <img src="{{ asset('assets/IMG_3698.jpeg') }}" class="w-full h-full object-cover" alt="">
            </div>

            <div
                class="content w-[90%] z-[2] base:w-[90%] h-fit absolute bottom-[20%] base:bottom-[65%] left-[50%] translate-x-[-50%] translate-y-[60%] base:translate-y-[125%] bg-white dark:bg-slate-200 border-t-[7px] border-cyan-600 dark:border-yellow-600 px-6 md:px-16 py-4 base:py-16">

                <h2 class="uppercase text-gray-500 font-semibold tracking-[3px] text-center mb-4">Double Bed</h2>

                <h3 class="old-standard text-[24px] base:text-[40px] text-black text-center mb-6">Luxury Double Bed</h3>

                <hr class="border-[1px] border-gray-200 dark:border-gray-600 " />

                <div class="inner w-full grid grid-cols-1 base:grid-cols-2 justify-center gap-x-12 gap-y-12 py-10">

                    <div class="w-fit">

                        <p
                            class="text-[12px] base:text-[14px] leading-[1.4] base:leading-[1.9] base-[18px] text-gray-500 mb-7 md:mb-12">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam distinctio illo sint
                            reprehenderit molestiae ducimus odio natus quasi velit cum, dolorum quos voluptates facere
                            nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eaque?

                        </p>

                        <div class="text-center base:text-left">
                            <a href="{{ route('contact') }}"
                                class="px-10 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-500 border-cyan-600 text-white bg-cyan-600 hover:bg-white hover:text-cyan-600 w-fit uppercase">Book
                                Now</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 grid-rows-5 gap-y-4 base:gap-y-6 gap-x-4 ">
                        <div
                            class="flex flex-row gap-x-3.5 place-content-center justify-start text-[12px] base:text-[14px] w-fit h-fit ">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-bath"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Air Conditioner
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-wifi"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                High Speed Wifi
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center justify-start text-[12px] base:text-[14px] h-fit w-fit">

                            <span class="text-stone-700">
                                <i class="fi fi-rs-room-service"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Breakfast
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rs-microwave"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Kitchen
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-broom"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Cleaning
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-shower"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Shower
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-grocery-basket"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Grocery
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-bed-alt"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Double Bed
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-rr-cart-shopping-fast"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Shop Near
                            </span>

                        </div>

                        <div
                            class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-start">

                            <span class="text-stone-700">
                                <i class="fi fi-br-toilet-paper-blank"></i>
                            </span>

                            <span class="text-gray-500 capitalize">
                                Towel
                            </span>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section
        class="apartments py-8 md:py-32 px-3 flex flex-wrap justify-center gap-x-14 gap-y-14 bg-gray-100 dark:bg-[#1212]">

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
                <a href="{{ route('apartment', 7) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Burndi
                    Apartment</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 7) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3657.jpeg') }}" class="w-full h-full" alt="">
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
                <a href="{{ route('apartment', 8) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Flex
                    Apartment</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 8) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3667.jpeg') }}" class="w-full h-full" alt="">
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
                <a href="{{ route('apartment', 9) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Single
                    Bedroom</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 9) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3675.jpeg') }}" class="w-full h-full" alt="">
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
                <a href="{{ route('apartment', 10) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Pulse
                    Single Bedroom</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 10) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3620.jpeg') }}" class="w-full h-full" alt="">
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
                <a href="{{ route('apartment', 11) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Genesis
                    Apartment</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 11) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3679.jpeg') }}" class="w-full h-full" alt="">
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
                <a href="{{ route('apartment', 12) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Dipper
                    Room</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 12) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3623.jpeg') }}" class="w-full h-full" alt="">
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
                <a href="{{ route('apartment', 13) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Azure
                    Room</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 13) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3639.jpeg') }}" class="w-full h-full" alt="">
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
                <a href="{{ route('apartment', 6) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Luxury
                    Studio Apartment</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 6) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

        <div
            class="apartment relative bg-white basis-[360px] h-[489.2px] rounded-[2px] overflow-hidden grow shrink md:shrink-0 md:grow-0">

            <div class="img w-full h-[240px] overflow-hidden">
                <img src="{{ asset('assets/IMG_3669.jpeg') }}" class="w-full h-full" alt="">
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
                <a href="{{ route('apartment', 14) }}"
                    class="w-fit mx-auto old-standard text-[1.3rem] text-gray-950 dark:text-stone-700 font-[450] dark:font-semibold">Superb
                    Apartment</a>

                <div class="w-full px-2  text-center text-[0.75rem] text-slate-600 leading-[1.4]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, repudiandae. Lorem ipsum dolor sit
                    amet.
                </div>

                <a href="{{ route('apartment', 14) }}"
                    class="px-8 py-2.5 border-[2px] font-medium transition-colors ease-in-out duration-300 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white w-fit mx-auto mt-3.5 uppercase">View
                    Now</a>
            </div>
        </div>

    </section>

    <section class="subcribe-form w-full h-[40dvh] px-8 flex flex-col gap-y-10 justify-center items-center">

        <h4 class="old-standard text-[1.5rem] md:text-[60px] text-slate-800 dark:text-white text-center font-[450]">
            Subscribe to Newsletter
        </h4>

        <form action="{{ route('subscribe') }}" method="POST" class="w-full flex justify-center">
            @csrf

            <div class="input w-[100%] md:w-[70%] lg:w-[60%] relative">
                <input type="text" name="email" id="email"
                    class="py-[24px] px-[24px] w-full rounded-sm border-transparent bg-slate-200 focus:border-none focus:outline-none text-[#121212] text-[11px] md:text-[14px]"
                    placeholder="email address...">
                <button type="submit"
                    class="absolute top-[50%] right-[10px] translate-y-[-50%] text-white bg-blue-700 dark:text-white dark:bg-blue-800 py-[14px] px-5 md:px-10 rounded-sm hover:bg-stone-800 dark:hover:bg-slate-700 hover:transition-all ease-out duration-300">Subscribe</button>
            </div>
        </form>
    </section>

</x-layout>
