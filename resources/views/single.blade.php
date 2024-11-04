<x-layout :title="$title">
    <section class="apartment-hero">

        <div class="content">

            <p class="hero-label text-center md:text-left text-gray-400 dark:text-gray-200 uppercase font-semibold">
                The ultimate luxury experience
            </p>

            <h1 class="text-slate-100 dark:text-yellow-500 capitalize font-bold text-center md:text-left old-standard">
                Apartment
            </h1>

        </div>

    </section>

    <section
        class="apartment  w-full min-h-[500px] py-24 md:py-24 px-3 bg-gray-100 dark:bg-[#1212] flex justify-center place-content-center">

        <div class="w-[100%] h-[400px] max-w-[900px] relative" id="image-container">
            <a href="{{ asset('assets/IMG_3654.jpeg') }}" target="_blank" id="img_url">
                <img src="{{ asset('assets/IMG_3654.jpeg') }}" alt="{{ $index }}" loading="lazy"
                    class="w-full h-full object-cover bg-center" id="img">
            </a>

            <div
                class="absolute z-[2] bottom-[-80px] w-4/5 h-[fit-content] left-1/2 translate-x-[-50%] bg-white flex justify-center items-center flex-col pt-4 pb-4 gap-y-2 px-2 border-t-[7px] border-cyan-600 dark:border-yellow-600">
                <h2 class="uppercase text-gray-500 font-semibold tracking-[3px] text-center">Luxury Bed</h2>

                <h3 class="old-standard text-[24px] base:text-[40px] text-black text-center " id="title">Luxury
                    Single Room
                </h3>

            </div>
        </div>



    </section>

    <div
        class="outside text-[15px] px-3 base:px-24 md:px-44 pt-6 pb-3.5 text-center base:text-left leading-[1.7] text-stone-800 dark:text-stone-300 bg-gray-100 dark:bg-[#1212]">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem facere perferendis ratione minima aspernatur
        dolores magni asperiores repellat saepe incidunt facilis, voluptates ab explicabo. Minima temporibus dolores,
        nemo, earum explicabo accusantium, veritatis delectus repellendus consectetur inventore maxime eligendi ducimus
        doloribus.
    </div>

    <div
        class="outside text-[15px] px-3 base:px-24 md:px-44 py-3.5 text-center base:text-left leading-[1.7] text-stone-800 dark:text-stone-300 bg-gray-100 dark:bg-[#1212]">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur nulla deserunt at ducimus dolores. Doloribus
        temporibus voluptate quod doloremque quam inventore architecto animi minima nam iusto explicabo itaque, velit
        ut. Deserunt officia error culpa vitae voluptas tempore aut quidem, nulla sint nemo debitis quos reiciendis vero
        minus corporis. Iste inventore blanditiis rem fugiat optio aperiam ea officia consequatur voluptatem expedita!
    </div>

    <div
        class="video w-full h-[500px] pt-10 pb-0 px-4 base:px-24 md:px-44 flex justify-center items-center bg-gray-100 dark:bg-[#1212]">
        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class=" w-full h-fit py-10 md:pt-24 md:pb-10 px-3 bg-gray-100 dark:bg-[#1212] flex justify-center">
        <div class="w-[100%] h-fit max-w-[900px] bg-white px-6 base:px-10 py-7 base:py-12">

            <h3 class="old-standard text-[24px]  base:text-[27px] md:text-[30px] text-gray-950 font-[300]">
                Amenities
            </h3>

            <hr class="border-[1px] border-gray-200 dark:border-gray-600 mt-3" />

            <div class="grid grid-cols-2 base:grid-cols-3 gap-y-4 base:gap-y-6 gap-x-4 px-3 pt-10 pb-3">
                <div
                    class="flex flex-row gap-x-3.5 place-content-center justify-center text-[12px] base:text-[14px] w-fit h-fit ">

                    <span class="text-stone-700">
                        <i class="fi fi-rr-bath"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Air Conditioner
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rr-wifi"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        High Speed Wifi
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center justify-center text-[12px] base:text-[14px] h-fit w-fit">

                    <span class="text-stone-700">
                        <i class="fi fi-rs-room-service"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Breakfast
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rs-microwave"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Kitchen
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rr-broom"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Cleaning
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rr-shower"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Shower
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rr-grocery-basket"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Grocery
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rr-bed"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Standard Bed
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rr-cart-shopping-fast"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Shop Near
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-br-toilet-paper-blank"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Towel
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rs-employees"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Fast Response Team
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-content-center text-[12px] base:text-[14px] h-fit w-fit justify-center">

                    <span class="text-stone-700">
                        <i class="fi fi-rr-padlock-check"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Security
                    </span>

                </div>
            </div>
        </div>
    </div>

    <div class=" w-full h-fit py-10 md:pt-0 md:pb-15 px-3 bg-gray-100 dark:bg-[#1212] flex justify-center">
        <div class="w-[100%] h-fit max-w-[900px] bg-white px-6 base:px-10 py-7 base:py-12">

            <h3 class="old-standard text-[24px]  base:text-[27px] md:text-[30px] text-gray-950 font-[300]">
                House Rules
            </h3>

            <hr class="border-[1px] border-gray-200 dark:border-gray-600 mt-3" />

            <div class="block w-full px-3 py-7 md:px-6 md:py-10">
                <div
                    class="flex flex-row gap-x-3.5 place-items-center justify-center text-[13px] base:text-[15px] w-fit h-fit mb-3">

                    <span class="text-stone-700 text-[20px]">
                        <i class="fi fi-br-check"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        No smoking, parties or events.
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-items-center justify-center text-[13px] base:text-[15px] w-fit h-fit mb-3">

                    <span class="text-stone-700 text-[20px]">
                        <i class="fi fi-br-check"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Check-in time from 2 PM, check-out by 10 AM.
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-items-center justify-center text-[13px] base:text-[15px] w-fit h-fit mb-3">

                    <span class="text-stone-700 text-[20px]">
                        <i class="fi fi-br-check"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Time to time car parking.
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-items-center justify-center text-[13px] base:text-[15px] w-fit h-fit mb-3">

                    <span class="text-stone-700 text-[20px]">
                        <i class="fi fi-br-check"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Always use house emergency line.
                    </span>

                </div>

                <div
                    class="flex flex-row gap-x-3.5 place-items-center justify-center text-[13px] base:text-[15px] w-fit h-fit">

                    <span class="text-stone-700 text-[20px]">
                        <i class="fi fi-br-check"></i>
                    </span>

                    <span class="text-gray-500 capitalize">
                        Browse regular our website.
                    </span>

                </div>
            </div>

        </div>

    </div>

    <div class=" w-full h-fit py-10 md:pt-0 md:pb-15 px-3 bg-gray-100 dark:bg-[#1212] flex justify-center">
        <div class="w-[100%] h-fit max-w-[900px] bg-white px-6 base:px-10 py-7 base:py-12">

            <h3 class="old-standard text-[24px]  base:text-[27px] md:text-[30px] text-gray-950 font-[300]">
                Cancellation
            </h3>

            <hr class="border-[1px] border-gray-200 dark:border-gray-600 mt-3" />

            <div
                class="block w-full px-3 py-3 md:px-6 md:py-5 leading-[1.8] text-center base:text-left text-[13px] base:text-[15px] text-stone-700">
                Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat
                metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a
                full refund.
            </div>

        </div>

    </div>

    <div class="text-center base:text-left pb-10 w-full flex justify-center h-fit  bg-gray-100 dark:bg-[#1212]">
        <a href="{{ route('contact') }}"
            class="px-10 py-3.5 border-[2px] font-medium transition-colors ease-in-out duration-500 border-cyan-700 text-white bg-cyan-700 hover:bg-white hover:text-cyan-700 w-fit uppercase">Book
            Now</a>
    </div>

    <x-subscribe />

    @push('script')
        <script type="text/javascript">
            var url = "http://localhost:8000";
            const apartments = [{
                    title: "Single Room",
                    img: `${url}/assets/IMG_3654.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Studio Room",
                    img: `${url}/assets/IMG_3658.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "One Bedroom",
                    img: `${url}/assets/IMG_3697.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Two Bedrooms",
                    img: `${url}/assets/IMG_3665.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Four Bedroom Penthouse",
                    img: `${url}/assets/IMG_3649.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Two Bedroom Apartment",
                    img: `${url}/assets/IMG_3639.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Two Bedrooms",
                    img: `${url}/assets/IMG_3672.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Four Bedroom Penthouse",
                    img: `${url}/assets/IMG_3657.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Single Bedroom",
                    img: `${url}/assets/IMG_3667.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Single Room",
                    img: `${url}/assets/IMG_3675.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Two Bedrooms",
                    img: `${url}/assets/IMG_3620.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Single Room",
                    img: `${url}/assets/IMG_3679.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Studio Room",
                    img: `${url}/assets/IMG_3623.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
                {
                    title: "Four Bedroom Penthouse",
                    img: `${url}/assets/IMG_3669.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `
                },
            ];
            let index = parseInt("{{ $index }}") - 1;

            document.querySelector("#title").textContent = apartments[index].title;
            document.querySelector(".video").innerHTML = apartments[index].video;
            document.querySelector("#img").setAttribute("src", apartments[index].img);
            document.querySelector("#img_url").setAttribute("href", apartments[index].img);
        </script>
    @endpush
</x-layout>
