<div class="group flex flex-wrap items-center justify-start gap-x-1 min-[1430px]:flex-nowrap">
    <div class="group relative">
        <a href="{{ route('services') }}"
            class="hover-button group-hover:translate-x-11 sm:group-hover:translate-x-14 lg:group-hover:translate-x-14">
            {{ $slot }}
        </a>
    </div>
    <!-- Arrow Button -->
    <div class="relative flex items-center">
        <a href="{{ route('services') }}"
            class=" hover-arrow group-hover:-translate-x-28 group-hover:bg-[#225f8C] group-hover:text-white sm:group-hover:-translate-x-36 lg:group-hover:-translate-x-44">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5 sm:size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
</div>