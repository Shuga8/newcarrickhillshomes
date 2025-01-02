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
        class="outside text-[15px] px-3 base:px-24 md:px-44 py-3.5 text-center base:text-left leading-[2.5] text-stone-800 dark:text-stone-300 bg-gray-100 dark:bg-[#1212]">
        Step into ultimate comfort with our Luxury Single Room, designed for the discerning traveler. Featuring modern
        decor, premium furnishings, and top-notch amenities, this room offers a perfect blend of style and relaxation.
        Whether you're here for business or leisure, enjoy a peaceful retreat with plush bedding, a spacious work area,
        and all the comforts you need for a restful stay.

        Our Luxury Single Room also includes high-speed internet, an HD TV, and climate control to ensure a personalized
        experience. The sleek en-suite bathroom is equipped with premium toiletries and a rain shower, adding a touch of
        indulgence to your stay. With every detail carefully considered, this room promises a memorable experience,
        where comfort meets sophistication.
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
                We understand that plans can change. Cancel your reservation up to 14 days before your check-in date for
                a full refund. For cancellations made after this period, a partial refund may apply. Please note that
                all cancellations must be made through the same platform or method used to book your stay. For more
                details, feel free to contact our support team.
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
                        `,
                    content: ` Step into ultimate comfort with our Luxury Single Room, designed for the discerning traveler. Featuring modern
                        decor, premium furnishings, and top-notch amenities, this room offers a perfect blend of style and relaxation.
                        Whether you're here for business or leisure, enjoy a peaceful retreat with plush bedding, a spacious work area,
                        and all the comforts you need for a restful stay.

                        Our Luxury Single Room also includes high-speed internet, an HD TV, and climate control to ensure a personalized
                        experience. The sleek en-suite bathroom is equipped with premium toiletries and a rain shower, adding a touch of
                        indulgence to your stay. With every detail carefully considered, this room promises a memorable experience,
                        where comfort meets sophistication.`
                },
                {
                    title: "Studio Room",
                    img: `${url}/assets/IMG_3658.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Our stylish Studio Room offers an open-plan layout that combines comfort and functionality, making it the perfect choice for solo travelers or couples. With modern furnishings and thoughtful design, the room features a comfortable bed, a cozy seating area, and a fully equipped kitchenette for your convenience.
                    Enjoy a peaceful atmosphere with amenities such as high-speed internet, an HD TV, and climate control. The sleek en-suite bathroom, complete with premium toiletries, adds a touch of luxury to your stay. Whether you're in town for business or leisure, our Studio Room provides the perfect balance of comfort and practicality for an enjoyable experience.`
                },
                {
                    title: "One Bedroom",
                    img: `${url}/assets/IMG_3697.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Our One Bedroom apartment offers a perfect blend of comfort and privacy, ideal for solo travelers or couples. Featuring modern decor and a spacious layout, this apartment is designed to ensure a relaxing stay with premium furnishings and thoughtful amenities.
                    The bedroom is equipped with a plush bed, ample storage, and a serene atmosphere for restful nights. Enjoy a fully equipped kitchen, cozy living area, high-speed internet, and a stylish bathroom with luxury toiletries. Whether you're here for a short getaway or an extended stay, our One Bedroom apartment offers the perfect home away from home.`
                },
                {
                    title: "Two Bedrooms",
                    img: `${url}/assets/IMG_3665.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Our Two-Bedroom apartment offers the perfect blend of space, comfort, and convenience for families or small groups. With modern furnishings and thoughtful design, each bedroom provides a restful environment with premium bedding and ample storage.
                        Enjoy a fully equipped kitchen, a spacious living area, and contemporary amenities such as high-speed internet, HD TV, and air conditioning. The apartment’s layout ensures privacy and comfort, while the shared spaces are ideal for relaxation or socializing. Whether you’re here for a short stay or extended visit, this apartment is designed to meet all your needs.`
                },
                {
                    title: "Four Bedroom Penthouse",
                    img: `${url}/assets/IMG_3649.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Indulge in luxury with our Four Bedroom Penthouse, offering expansive living spaces and stunning views that create an unparalleled experience. Perfect for large families or groups, this penthouse combines elegance and comfort with modern furnishings and high-end amenities.
                    Each bedroom is a private retreat, featuring plush bedding and ample space for relaxation. The open-plan living and dining areas are perfect for entertaining, and the fully equipped kitchen adds convenience to your stay. With large windows offering breathtaking views and exclusive access to premium facilities, this penthouse redefines luxury living. Experience the pinnacle of comfort and sophistication in every corner of this stunning apartment.`,
                },
                {
                    title: "Two Bedroom Apartment",
                    img: `${url}/assets/IMG_3639.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Our Two Bedroom Apartment is designed for comfort and convenience, making it ideal for families or small groups. Spacious and beautifully furnished, it offers a relaxing atmosphere with modern amenities and a homely touch.
                    Each bedroom is thoughtfully designed to provide ample space and comfort, ensuring a restful night's sleep. The fully equipped kitchen allows for easy meal preparation, and the cozy living area is perfect for unwinding or spending quality time together. With high-speed internet, HD TV, and a stylish bathroom with luxury toiletries, this apartment ensures a memorable and comfortable stay.`
                },
                {
                    title: "Two Bedrooms",
                    img: `${url}/assets/IMG_3672.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Our Two-Bedroom apartment offers the perfect blend of space, comfort, and convenience for families or small groups. With modern furnishings and thoughtful design, each bedroom provides a restful environment with premium bedding and ample storage.
                        Enjoy a fully equipped kitchen, a spacious living area, and contemporary amenities such as high-speed internet, HD TV, and air conditioning. The apartment’s layout ensures privacy and comfort, while the shared spaces are ideal for relaxation or socializing. Whether you’re here for a short stay or extended visit, this apartment is designed to meet all your needs.`
                },
                {
                    title: "Four Bedroom Penthouse",
                    img: `${url}/assets/IMG_3657.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Indulge in luxury with our Four Bedroom Penthouse, offering expansive living spaces and stunning views that create an unparalleled experience. Perfect for large families or groups, this penthouse combines elegance and comfort with modern furnishings and high-end amenities.
                    Each bedroom is a private retreat, featuring plush bedding and ample space for relaxation. The open-plan living and dining areas are perfect for entertaining, and the fully equipped kitchen adds convenience to your stay. With large windows offering breathtaking views and exclusive access to premium facilities, this penthouse redefines luxury living. Experience the pinnacle of comfort and sophistication in every corner of this stunning apartment.`,

                },
                {
                    title: "Single Bedroom",
                    img: `${url}/assets/IMG_3667.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: ` Step into ultimate comfort with our Luxury Single Room, designed for the discerning traveler. Featuring modern
                        decor, premium furnishings, and top-notch amenities, this room offers a perfect blend of style and relaxation.
                        Whether you're here for business or leisure, enjoy a peaceful retreat with plush bedding, a spacious work area,
                        and all the comforts you need for a restful stay.

                        Our Luxury Single Room also includes high-speed internet, an HD TV, and climate control to ensure a personalized
                        experience. The sleek en-suite bathroom is equipped with premium toiletries and a rain shower, adding a touch of
                        indulgence to your stay. With every detail carefully considered, this room promises a memorable experience,
                        where comfort meets sophistication.`
                },
                {
                    title: "Single Room",
                    img: `${url}/assets/IMG_3675.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: ` Step into ultimate comfort with our Luxury Single Room, designed for the discerning traveler. Featuring modern
                        decor, premium furnishings, and top-notch amenities, this room offers a perfect blend of style and relaxation.
                        Whether you're here for business or leisure, enjoy a peaceful retreat with plush bedding, a spacious work area,
                        and all the comforts you need for a restful stay.

                        Our Luxury Single Room also includes high-speed internet, an HD TV, and climate control to ensure a personalized
                        experience. The sleek en-suite bathroom is equipped with premium toiletries and a rain shower, adding a touch of
                        indulgence to your stay. With every detail carefully considered, this room promises a memorable experience,
                        where comfort meets sophistication.`
                },
                {
                    title: "Two Bedrooms",
                    img: `${url}/assets/IMG_3620.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Our Two-Bedroom apartment offers the perfect blend of space, comfort, and convenience for families or small groups. With modern furnishings and thoughtful design, each bedroom provides a restful environment with premium bedding and ample storage.
                        Enjoy a fully equipped kitchen, a spacious living area, and contemporary amenities such as high-speed internet, HD TV, and air conditioning. The apartment’s layout ensures privacy and comfort, while the shared spaces are ideal for relaxation or socializing. Whether you’re here for a short stay or extended visit, this apartment is designed to meet all your needs.`
                },
                {
                    title: "Single Room",
                    img: `${url}/assets/IMG_3679.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: ` Step into ultimate comfort with our Luxury Single Room, designed for the discerning traveler. Featuring modern
                        decor, premium furnishings, and top-notch amenities, this room offers a perfect blend of style and relaxation.
                        Whether you're here for business or leisure, enjoy a peaceful retreat with plush bedding, a spacious work area,
                        and all the comforts you need for a restful stay.

                        Our Luxury Single Room also includes high-speed internet, an HD TV, and climate control to ensure a personalized
                        experience. The sleek en-suite bathroom is equipped with premium toiletries and a rain shower, adding a touch of
                        indulgence to your stay. With every detail carefully considered, this room promises a memorable experience,
                        where comfort meets sophistication.`
                },
                {
                    title: "Studio Room",
                    img: `${url}/assets/IMG_3623.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Our stylish Studio Room offers an open-plan layout that combines comfort and functionality, making it the perfect choice for solo travelers or couples. With modern furnishings and thoughtful design, the room features a comfortable bed, a cozy seating area, and a fully equipped kitchenette for your convenience.
                    Enjoy a peaceful atmosphere with amenities such as high-speed internet, an HD TV, and climate control. The sleek en-suite bathroom, complete with premium toiletries, adds a touch of luxury to your stay. Whether you're in town for business or leisure, our Studio Room provides the perfect balance of comfort and practicality for an enjoyable experience.`
                },
                {
                    title: "Four Bedroom Penthouse",
                    img: `${url}/assets/IMG_3669.jpeg`,
                    video: `
                        <iframe width="700px" height="100%" src="https://www.youtube.com/embed/4TYC1Szexpg?si=hQ4d_uqBuH8-ghVy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        `,
                    content: `Indulge in luxury with our Four Bedroom Penthouse, offering expansive living spaces and stunning views that create an unparalleled experience. Perfect for large families or groups, this penthouse combines elegance and comfort with modern furnishings and high-end amenities.
                    Each bedroom is a private retreat, featuring plush bedding and ample space for relaxation. The open-plan living and dining areas are perfect for entertaining, and the fully equipped kitchen adds convenience to your stay. With large windows offering breathtaking views and exclusive access to premium facilities, this penthouse redefines luxury living. Experience the pinnacle of comfort and sophistication in every corner of this stunning apartment.`,
                },
            ];
            let index = parseInt("{{ $index }}") - 1;

            document.querySelector("#title").textContent = apartments[index].title;
            document.querySelector(".video").innerHTML = apartments[index].video;
            document.querySelector("#img").setAttribute("src", apartments[index].img);
            document.querySelector("#img_url").setAttribute("href", apartments[index].img);
            document.querySelector(".outside").textContent = apartments[index].content;
        </script>
    @endpush
</x-layout>
