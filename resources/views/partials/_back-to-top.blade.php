<div
    class="back-to-top border border-cyan-600 dark:border-yellow-600 bg-cyan-600 hover:bg-transparent dark:bg-yellow-600 dark:hover:bg-transparent text-white hover:text-cyan-600 dark:hover:text-yellow-600">
    <i class="fi fi-bs-angle-double-small-up"></i>
</div>

@push('script')
    <script>
        "use strict";

        document.querySelector(".back-to-top").addEventListener("click", function() {
            window.scrollTo(0, 0);
        })
    </script>
@endpush
