@if (session()->has('error'))
    <div id="error-toast"
        class="fixed w-[50%] base:w-[300px] z-[18] top-[105px] right-[5px] h-fit py-3 px-2 flex justify-between place-items-center gap-x-4 border-t-[3px] border-red-700 dark:border-red-500 rounded-md shadow-sm shadow-[#ddd] bg-white transition-all duration-300 ease-in-out">
        <div
            class="icon w-[30px] h-[30px] bg-red-700 dark:bg-red-600 text-white flex justify-center items-center px-[7px] pt-[4px] rounded-md">
            <i class="fi fi-br-exclamation"></i>
        </div>
        <div class="message text-wrap text-[12px] text-stone-600">{{ session('error') }}</div>
        <div class="cancel w-[30px] h-[30px] bg-red-700 dark:bg-red-600 hover:bg-red-600 dark:hover:bg-red-500 text-white flex justify-center items-center px-[7px] pt-[4px] rounded-md cursor-pointer"
            onclick="this.parentElement.classList.replace('flex', 'hidden')">
            <i class="fi fi-rr-circle-xmark"></i>
        </div>
    </div>
    @php
        session()->forget('error');
    @endphp
@endif


@if (session()->has('success'))
    <div id="success-toast"
        class="fixed w-[50%] base:w-[300px] z-[18] top-[105px] right-[5px] h-fit py-3 px-2 flex justify-between place-items-center gap-x-4 border-t-[3px] border-green-700 dark:green-red-500 rounded-md shadow-sm shadow-[#ddd] bg-white transition-all duration-300 ease-in-out">
        <div
            class="icon w-[30px] h-[30px] bg-green-700 dark:bg-green-600 text-white flex justify-center items-center px-[7px] pt-[4px] rounded-md">
            <i class="fi fi-br-check"></i>
        </div>
        <div class="message text-wrap text-[12px] text-stone-600">{{ session('success') }}</div>
        <div class="cancel w-[30px] h-[30px] bg-green-700 dark:bg-green-600 hover:bg-green-600 dark:hover:bg-green-500 text-white flex justify-center items-center px-[7px] pt-[4px] rounded-md cursor-pointer"
            onclick="this.parentElement.classList.replace('flex', 'hidden')">
            <i class="fi fi-rr-circle-xmark"></i>
        </div>
    </div>
    @php
        session()->forget('success');
    @endphp
@endif
