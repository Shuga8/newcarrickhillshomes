    <section class="subcribe-form w-full h-[40dvh] px-8 flex flex-col gap-y-10 justify-center items-center">

        <h4 class="old-standard text-[1.5rem] md:text-[60px] text-slate-800 dark:text-white text-center font-[450]">
            Subscribe to Newsletter
        </h4>

        <form action="{{ route('subscribe') }}" method="POST" class="w-full flex justify-center">
            @csrf

            <div class="input w-[100%] md:w-[70%] lg:w-[60%] relative">
                <input type="email" name="email" id="email"
                    class="py-[24px] px-[24px] w-full rounded-sm border-transparent bg-slate-200 focus:border-none focus:outline-none text-[#121212] text-[11px] md:text-[14px]"
                    placeholder="email address..." required>
                <button type="submit"
                    class="absolute top-[50%] right-[10px] translate-y-[-50%] text-white bg-blue-700 dark:text-white dark:bg-blue-800 py-[14px] px-5 md:px-10 rounded-sm hover:bg-stone-800 dark:hover:bg-slate-700 hover:transition-all ease-out duration-300">Subscribe</button>
            </div>
        </form>
    </section>
