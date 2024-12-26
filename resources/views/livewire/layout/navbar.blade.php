 <div class="navbar bg-cover bg-center text-white font-poppins fixed top-0 left-0 w-full z-10 border-none transition-all duration-300"
    id="navbar">
    <div class="flex-1">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/navbar/ost-logo.png') }}" alt="OST Logo"
                class="h-10 w-auto md:h-16 lg:h-16 lg:ml-10">
        </a>
    </div>
    <div class="flex-none lg:hidden">
        <!-- Hamburger Icon -->
        <button id="menu-btn" class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 lg:h-10 lg:w-10" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex">
        <ul class="menu menu-horizontal px-8 text-lg">
            <li><a href="{{ route('about-us') }}"
                    class="{{ request()->routeIs('about-us') ? 'text-[#225f8C] font-bold' : '' }} hover:text-[#225f8C]">About
                    Us</a></li>
            <li><a href="{{ route('services') }}"
                    class="{{ request()->routeIs('services') ? 'text-[#225f8C] font-bold' : '' }} hover:text-[#225f8C]">Services</a>
            </li>
            <li><a href="{{ route('careers') }}"
                    class="{{ request()->routeIs('careers') ? 'text-[#225f8C] font-bold' : '' }} hover:text-[#225f8C]">Careers</a>
            </li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </div>
</div>


<!-- Mobile Screen Menu -->
<div id="mobile-menu" class="fixed inset-0 bg-white/70 backdrop-blur-md z-20 hidden">
    <div class="flex justify-between items-center p-4">
        <img src="{{ asset('assets/navbar/ost-logo.png') }}" alt="OST Logo" class="h-12 md:h-16">
        <button id="close-menu-btn" class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <ul class="flex flex-col items-start gap-y-6 p-6 text-sm font-medium md:text-lg">
        <li><a href="{{ route('about-us') }}"
                class="w-full {{ request()->routeIs('about-us') ? 'text-[#225f8C] font-bold' : '' }}">About Us</a></li>
        <li><a href="{{ route('services') }}"
                class="w-full {{ request()->routeIs('services') ? 'text-[#225f8C] font-bold' : '' }}">Services</a></li>
        <li><a href="{{ route('careers') }}"
                class="w-full {{ request()->routeIs('careers') ? 'text-[#225f8C] font-bold' : '' }}">Careers</a></li>
        <li><a href="#" class="w-full">Contact Us</a></li>
    </ul>
</div>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    closeMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });

    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.remove('text-white');
            navbar.classList.add('bg-base-100/80', 'text-black', 'backdrop-blur-md');
        } else {
            navbar.classList.remove('bg-base-100/80', 'text-black', 'backdrop-blur-md');
            navbar.classList.add('bg-opacity-0', 'text-white');
        }
    });
</script>