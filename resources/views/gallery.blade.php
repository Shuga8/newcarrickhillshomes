<x-layout :title="$title">

    <section class="gallery-hero">

        <div class="content">

            <p class="hero-label text-center md:text-left text-gray-400 dark:text-gray-200 uppercase font-semibold">
                Carrick Hills
            </p>

            <h1 class="text-slate-100 dark:text-yellow-500 capitalize font-bold text-center md:text-left old-standard">
                Our Gallery
            </h1>

        </div>

    </section>

    <section class="gallery py-24 md:py-24 px-5 justify-center md:px-48 grid grid-cols-2 grid-row-6 gap-6">

        <div class="">
            <a href="{{ asset('assets/IMG_3620.jpeg') }}">
                <img src="{{ asset('assets/IMG_3620.jpeg') }}" alt="">
            </a>
        </div>

        <div class="">
            <a href="{{ asset('assets/IMG_3622.jpeg') }}">
                <img src="{{ asset('assets/IMG_3622.jpeg') }}" alt="">
            </a>
        </div>

        <div class="col-span-2 row-span-[1.5]">
            <a href="{{ asset('assets/03.jpg') }}">
                <img src="{{ asset('assets/03.jpg') }}" alt="">
            </a>
        </div>

        <div class="">
            <a href="{{ asset('assets/IMG_3649.jpeg') }}">
                <img src="{{ asset('assets/IMG_3649.jpeg') }}" alt="">
            </a>
        </div>

        <div class=" ">
            <a href="{{ asset('assets/IMG_3644.jpeg') }}">
                <img src="{{ asset('assets/IMG_3644.jpeg') }}" alt="">
            </a>
        </div>

        <div class="  col-span-2 row-span-[1.5]">
            <a href="{{ asset('assets/IMG_3651.jpeg') }}">
                <img src="{{ asset('assets/IMG_3651.jpeg') }}" alt="">
            </a>
        </div>

        <div class=" ">
            <a href="{{ asset('assets/IMG_3663.jpeg') }}">
                <img src="{{ asset('assets/IMG_3663.jpeg') }}" alt="">
            </a>
        </div>

        <div class="">
            <a href="{{ asset('assets/IMG_3669.jpeg') }}">
                <img src="{{ asset('assets/IMG_3669.jpeg') }}" alt="">
            </a>
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
