<x-layout :title="$title">

    <section class="apartment-hero">

        <div class="content">

            <p class="hero-label text-center md:text-left text-gray-400 dark:text-gray-200 uppercase font-semibold">
                Carrick Hills
            </p>

            <h1 class="text-slate-100 dark:text-yellow-500 capitalize font-bold text-center md:text-left old-standard">
                Contact Us
            </h1>
        </div>

    </section>

    <section
        class="contact-container grid grid-cols-1 gap-y-9 md:grid-cols-2 md:gap-x-6 py-24 md:py-28 px-5 justify-center md:px-32 bg-gray-100 dark:bg-[#1212]">

        <div class="h-fit bg-white dark:bg-transparent py-4 px-3 md:px-6">
            <p class="hero-label text-center text-gray-400 dark:text-gray-200 uppercase font-semibold mt-2 mb-3">
                Send Us A Message
            </p>

            <h1
                class="text-slate-600 dark:text-yellow-500 capitalize font-bold text-center old-standard text-[25px] md:text-[35px]">
                How Can We Help You?
            </h1>

            <form action="" method="POST" enctype="multipart/form-data" class="py-7 px-2" autocomplete="off">
                @csrf

                <div class="grid-cols-1 base:grid-cols-2 grid gap-x-6 gap-y-3 mb-3 base:mb-6">

                    <div class="group relative">
                        <input type="text" placeholder="Your full name..."
                            class="bg-gray-100 focus:outline-none focus:border-none text-slate-600 w-full text-[13px] py-[14px] base:py-[20px] pl-[40px] pr-[12px] ">

                        <i class="fi fi-rr-user absolute top-[50%] translate-y-[-50%] left-[13px] text-stone-700"></i>
                    </div>

                    <div class="group relative">
                        <input type="email" placeholder="Enter your email address..."
                            class="bg-gray-100 focus:outline-none focus:border-none text-slate-600 w-full text-[13px] py-[14px] base:py-[20px] pl-[40px] pr-[12px] ">

                        <i
                            class="fi fi-rr-envelope absolute top-[50%] translate-y-[-50%] left-[13px] text-stone-700"></i>
                    </div>
                </div>

                <div class="grid-cols-1 base:grid-cols-2 grid gap-x-6 gap-y-3 mb-3 base:mb-6">

                    <div class="group relative">
                        <input type="tel" placeholder="Add phone number..." name="phone"
                            class="bg-gray-100 focus:outline-none focus:border-none text-slate-600 w-full text-[13px] py-[14px] base:py-[20px] pl-[40px] pr-[12px] ">

                        <i
                            class="fi fi-rs-mobile-button absolute top-[50%] translate-y-[-50%] left-[13px] text-stone-700"></i>
                    </div>

                    <div class="group relative">
                        <input type="text" placeholder="Message subject..." name="subject"
                            class="bg-gray-100 focus:outline-none focus:border-none text-slate-600 w-full text-[13px] py-[14px] base:py-[20px] pl-[40px] pr-[12px] ">

                        <i
                            class="fi fi-rs-reservation-table absolute top-[50%] translate-y-[-50%] left-[13px] text-stone-700"></i>
                    </div>
                </div>

                <div class="grid-cols-1 grid  mb-3 base:mb-6 w-full">

                    <div class="group relative">
                        <textarea id="message" name="message" placeholder="Enter message..."
                            class="bg-gray-100 placeholder-gray-400 focus:outline-none text-slate-600 w-full text-[13px] py-[14px] base:py-[20px] pl-[40px] pr-[12px] h-[150px]"></textarea>


                        <i class="fi fi-rs-mobile-button absolute top-[19px] left-[13px] text-stone-700"></i>
                    </div>
                </div>

                <div class="flex w-full justify-center base:justify-start">
                    <button
                        class="mt-3 w-fit mx-auto base:mx-0 px-[24px] py-[18px] bg-cyan-800 border-[2px] border-cyan-800 hover:text-cyan-700 dark:hover:text-white hover:bg-transparent text-white">Send</button>
                </div>
            </form>
        </div>

        <div class="map bg-transparent h-[500px] base:h-full">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.723522492329!2d3.264918775040549!3d6.556544693436565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8ff012249dcf%3A0x2d55a84508a96668!2s3%20Femi%20Akinfolarin%20St%2C%20Ikotun%2C%20Lagos%20102213%2C%20Lagos!5e0!3m2!1sen!2sng!4v1730474620846!5m2!1sen!2sng"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <x-subscribe />

</x-layout>
