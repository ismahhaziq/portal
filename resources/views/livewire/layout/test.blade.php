<div class="navbar bg-base-100 font-poppins">
    <div class="flex-1">
        <a href="{{ route('home') }}"><img src="{{asset('assets/ost-logo.png')}}" alt="" class="ml-12 h-16 w-auto"></a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-8 text-lg lg:flex hidden">
            <li><a href="{{ route('about-us') }}"
                    class="{{ request()->routeIs('about-us') ? 'text-[#225f8C] font-bold' : '' }}">About Us</a></li>
            <li><a href="{{ route('services') }}"
                    class="{{ request()->routeIs('services') ? 'text-[#225f8C] font-bold' : '' }}">Services</a></li>
            <li><a href="{{ route('careers') }}"
                    class="{{ request()->routeIs('careers') ? 'text-[#225f8C] font-bold' : '' }}">Careers</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
        <!-- Dropdown for Contact Us -->
        <li class="dropdown dropdown-end lg:hidden">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <ul tabindex="0" class="menu dropdown-content bg-base-100 rounded-box z-[1] mt-4 w-52 p-2 shadow">
                <li><a href="{{ route('about-us') }}"
                        class="{{ request()->routeIs('about-us') ? 'text-[#225f8C] font-bold' : '' }}">About Us</a>
                </li>
                <li><a href="{{ route('services') }}"
                        class="{{ request()->routeIs('services') ? 'text-[#225f8C] font-bold' : '' }}">Services</a>
                </li>
                <li><a href="{{ route('careers') }}"
                        class="{{ request()->routeIs('careers') ? 'text-[#225f8C] font-bold' : '' }}">Careers</a>
                </li>
            </ul>
        </li>
    </div>
</div>