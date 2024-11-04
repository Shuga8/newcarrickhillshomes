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

    <x-subscribe />

</x-layout>
