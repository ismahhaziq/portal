<div class="bg-white">
    @include("livewire.layout.navbar")

    <!-- HERO SECTION START -->
    <div class="relative h-screen max-w-full bg-cover bg-fixed bg-center "
        style="background-image: url('/assets/index/hero/hero-bg.jpg')">
        <!-- Shadow Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <!-- Content -->
        <!-- gap-y-12 sm:gap-y-16 pt-20 sm:px-12 md:px-24 lg:px-30 sm:py-40 md:py-48 lg:py-64 xl:py-52 -->
        <div class="relative flex h-full flex-col justify-between text-center text-white">
            <!-- <div class="flex flex-col justify-around text-white h-full"> -->
            <div class="h-1/6 w-full"></div>
            <!-- Heading -->
            <div
                class="-mb-5 -mt-9 break-words px-2 font-raleway text-3xl font-bold italic drop-shadow-lg animate-fade-in leading-snug sm:text-[28px] md:text-[40px] lg:mb-2 lg:text-[45px] xl:text-[66px]">
                WHERE ACTIONS SPEAK
            </div>
            <!-- Subheading -->
            <div
                class="font-circular-std text-[20px] font-medium sm:text-[20px] md:text-[24px] lg:mb-11 lg:text-[26px] xl:text-[28px]">
                Delivering Results
                <br class="sm:hidden" />
                Beyond Expectations.
            </div>
            <!-- Button -->
            <div class="-mt-5 flex items-center justify-center sm:mt-0">
                <button
                    class="btn btn-md transform rounded-none font-inter text-[16px] font-medium sm:btn-sm md:btn-md lg:btn-lg hover:-translate-y-1 hover:bg-[#225f8C] hover:text-white focus:bg-[#225f8C] focus:outline-none focus:ring focus:ring-offset-2 sm:text-[18px] md:text-[20px] lg:text-[22px]">
                    <a href="#about-us">Learn More</a>
                </button>
            </div>
            <!-- aaaa -->
            <div class="h-[2%] w-full bg-gradient-to-t from-white to-slate-200"></div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    <!-- ABOUT US SECTION START -->
    <div id="about-us"
        class="flex flex-col items-center justify-center pl-4 pr-6 pt-8 -mt-10 sm:pt-24 md:pt-12 lg:pt-20 xl:px-2 opacity-0 transform translate-y-10 transition-all duration-800 ease-out "
        loading="lazy">
        <div
            class="flex flex-wrap items-center justify-center  gap-x-8 gap-y-8 sm:gap-x-10 lg:gap-x-11 min-[1430px]:flex-nowrap">
            <!-- Image -->
            <div class="relative">
                <img src="/assets/index/about-us/partner2.jpg" loading="lazy"
                    class="rpv-bg-img lg:scroll-pl-30 h-[220px] w-[590px] flex-shrink-0 rounded-[30px] object-cover object-center border shadow-lg" />
                <div class="shadow-img"></div>
            </div>

            <!-- Text Block -->
            <div class="flex flex-col items-center pt-4 sm:pt-6 md:pt-8">
                <div class="flex w-full flex-col items-start gap-y-6 sm:w-[606px] sm:gap-y-9 md:w-[700px]">
                    <!-- Handshake Image -->
                    <div class="flex items-center sm:px-5">
                        <img src="/assets/index/about-us/handshake.png" loading="lazy"
                            class="hidden h-12 w-auto flex-shrink-0 object-cover object-center sm:h-16 md:h-20 xl:flex" />
                    </div>

                    <!-- Title -->
                    <div class="self-stretch pt-2 sm:pt-3 md:pt-4">
                        <div
                            class="rpv-title font-circular-std -mt-[50px] mb-4 text-[22px] font-medium leading-normal lg:text-[40px]">
                            <span>
                                <p>Your Trusted Partner in IT Solutions</p>
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div
                        class="rpv-desc -mt-6 flex items-start self-stretch text-justify font-poppins text-[14px] leading-[30px]">
                        <p>
                            At Opensoft Technologies, we are dedicated to
                            delivering innovative IT solutions that meet your
                            unique business needs. Our commitment to excellence
                            drives us to exceed expectations in every project we
                            undertake.
                        </p>
                    </div>

                    <!-- Buttons -->
                    <div class="group flex flex-wrap items-center justify-start gap-x-1 min-[1430px]:flex-nowrap">
                        <!-- About Us Button -->
                        <div class="relative flex items-center">
                            <a href="{{ route('about-us') }}"
                                class="hover-button group-hover:translate-x-14 sm:group-hover:translate-x-14 lg:group-hover:translate-x-16">
                                About Us
                            </a>
                        </div>

                        <!-- Arrow Button -->
                        <div class="relative flex items-center">
                            <a href="{{ route('about-us') }}"
                                class="hover-arrow group-hover:-translate-x-20 group-hover:bg-[#225f8C] group-hover:text-white sm:group-hover:-translate-x-28 lg:group-hover:-translate-x-36">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 sm:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US SECTION END -->

    <!-- SERVICE SECTION START -->
    <div id="services"
        class="flex flex-col items-center justify-center pl-4 pr-6 pt-8 sm:pt-24 md:pt-12 lg:pt-20 xl:px-2 opacity-0 transform translate-y-10 transition-all duration-800 ease-out ">
        <div
            class="flex flex-wrap items-center justify-center gap-x-8 gap-y-8 sm:gap-x-10 lg:gap-x-11 min-[1430px]:flex-nowrap">

            <!-- Image Carousel for Mobile-->
            <div
                class="rpv-bg-img carousel relative flex h-[220px] w-[590px] flex-shrink-0 overflow-hidden rounded-[30px] object-cover object-center xl:hidden">
                <div class="carousel-inner flex w-full">
                    <!-- Slide 1 -->
                    <div id="mobile-slide1" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/design&dev.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-2">
                            <a href="#mobile-slide6"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❮
                            </a>
                            <a href="#mobile-slide2"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❯
                            </a>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div id="mobile-slide2" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/system-integration.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#mobile-slide1"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❮
                            </a>
                            <a href="#mobile-slide3"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❯
                            </a>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div id="mobile-slide3" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/support.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#mobile-slide2"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❮
                            </a>
                            <a href="#mobile-slide4"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❯
                            </a>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div id="mobile-slide4" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/mobile-apps.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#mobile-slide3"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❮
                            </a>
                            <a href="#mobile-slide5"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❯
                            </a>
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div id="mobile-slide5" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/project-management2.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#mobile-slide4"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❮
                            </a>
                            <a href="#mobile-slide6"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❯
                            </a>
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div id="mobile-slide6" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/training2.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#mobile-slide5"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❮
                            </a>
                            <a href="#mobile-slide1"
                                class="mobile-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">
                                ❯
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Block -->
            <div class="flex flex-col items-center pt-4 sm:pt-6 md:pt-8">
                <div class="flex w-full flex-col items-start gap-y-6 sm:w-[606px] sm:gap-y-9 md:w-[700px]">
                    <!-- Handshake Image -->
                    <div class="flex items-center sm:px-5">
                        <img src="/assets/index/services/icon-2.png" loading="lazy"
                            class="hidden h-12 w-auto flex-shrink-0 object-cover object-center sm:h-16 md:h-20 xl:flex" />
                    </div>

                    <!-- Title -->
                    <div class="self-stretch pt-2 sm:pt-3 md:pt-4">
                        <div
                            class="rpv-title font-circular-std -mt-[50px] mb-4 text-[22px] font-medium leading-normal lg:text-[40px]">
                            <span>
                                <p>
                                    Comprehensive IT Solutions Tailored for You
                                </p>
                            </span>
                        </div>
                    </div>

                    <!-- Mobile Bullet Points -->
                    <div class="-mt-6 self-stretch sm:mt-0 sm:pt-3 md:pt-4 xl:hidden">
                        <div
                            class="rpv-bullet flex flex-wrap items-start gap-x-8 gap-y-6 font-poppins text-[14px] sm:grid sm:grid-cols-2 sm:gap-x-8">
                            <!-- Column 1 -->
                            <div class="flex w-full">
                                <ul class="list-inside list-disc space-y-4">
                                    <li>
                                        <a href="#mobile-slide1" id="bullet1"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            Design &amp; Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#mobile-slide2" id="bullet2"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            System Integration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#mobile-slide3" id="bullet3"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            24/7 Support
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Column 2 -->
                            <div class="-mt-2 flex w-full sm:mt-0">
                                <ul class="list-inside list-disc space-y-4">
                                    <li>
                                        <a href="#mobile-slide4" id="bullet4"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            Mobile Apps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#mobile-slide5" id="bullet5"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            Project Management
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#mobile-slide6" id="bullet6"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            On-Site &amp; In-House Training
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Bullet Points -->
                    <div class="-mt-6 self-stretch sm:mt-0 sm:pt-3 md:pt-4 hidden xl:flex">
                        <div
                            class="rpv-bullet flex flex-wrap items-start gap-x-8 gap-y-6 font-poppins text-[14px] sm:grid sm:grid-cols-2 sm:gap-x-8">
                            <!-- Column 1 -->
                            <div class="flex w-full">
                                <ul class="list-inside list-disc space-y-4">
                                    <li class="hover:-translate-y-0.5">
                                        <a href="#desktop-slide1" id="bullet1"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            Design &amp; Development
                                        </a>
                                    </li>
                                    <li class="hover:-translate-y-0.5">
                                        <a href="#desktop-slide2" id="bullet2"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            System Integration
                                        </a>
                                    </li>
                                    <li class="hover:-translate-y-0.5">
                                        <a href="#desktop-slide3" id="bullet3"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            24/7 Support
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Column 2 -->
                            <div class="-mt-2 flex w-full sm:mt-0">
                                <ul class="list-inside list-disc space-y-4">
                                    <li class="hover:-translate-y-0.5">
                                        <a href="#desktop-slide4" id="bullet4"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            Mobile Apps
                                        </a>
                                    </li>
                                    <li class="hover:-translate-y-0.5">
                                        <a href="#desktop-slide5" id="bullet5"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            Project Management
                                        </a>
                                    </li>
                                    <li class="hover:-translate-y-0.5">
                                        <a href="#desktop-slide6" id="bullet6"
                                            class="bullet-point transition hover:text-[#225f8C]">
                                            On-Site &amp; In-House Training
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="group flex flex-wrap items-center justify-start gap-x-1 min-[1430px]:flex-nowrap">
                        <div class="group relative">
                            <a href="{{ route('services') }}"
                                class="hover-button group-hover:translate-x-11 sm:group-hover:translate-x-14 lg:group-hover:translate-x-14">
                                More Details
                            </a>
                        </div>
                        <!-- Arrow Button -->
                        <div class="relative flex items-center">
                            <a href="{{ route('services') }}"
                                class=" hover-arrow group-hover:-translate-x-28 group-hover:bg-[#225f8C] group-hover:text-white sm:group-hover:-translate-x-36 lg:group-hover:-translate-x-44">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 sm:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>
            </div>

            <!-- DEKSTOP CAROUSEL -->
            <div class="rpv-bg-img carousel relative hidden h-[220px] w-[590px] overflow-hidden rounded-[30px] xl:flex">
                <div class="carousel-inner flex w-full">
                    <!-- Slide 1 -->
                    <div id="desktop-slide1" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/design&dev.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-2">
                            <a href="#desktop-slide6"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❮</a>
                            <a href="#desktop-slide2"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❯</a>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div id="desktop-slide2" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/system-integration.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#desktop-slide1"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❮</a>
                            <a href="#desktop-slide3"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❯</a>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div id="desktop-slide3" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/support.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#desktop-slide2"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❮</a>
                            <a href="#desktop-slide4"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❯</a>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div id="desktop-slide4" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/mobile-apps.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#desktop-slide3"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❮</a>
                            <a href="#desktop-slide5"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❯</a>
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div id="desktop-slide5" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/project-management2.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#desktop-slide4"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❮</a>
                            <a href="#desktop-slide6"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❯</a>
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div id="desktop-slide6" class="carousel-item relative w-full flex-shrink-0">
                        <img src="/assets/index/services/training2.jpg" loading="lazy"
                            class="h-full w-full object-cover object-center" />
                        <div class="shadow-img"></div>
                        <div class="absolute inset-0 flex items-center justify-between px-4">
                            <a href="#desktop-slide5"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❮</a>
                            <a href="#desktop-slide1"
                                class="desktop-arrow btn btn-circle bg-gray-200 text-black hover:bg-[#225f8C]">❯</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- SERVICE SECTION END -->

    <!-- DIVIDER LINE GRADIENT START -->
    <div class="mt-16 flex w-full justify-center px-4 sm:px-0 sm:mt-24">
        <div
            class="h-[4px] w-full max-w-[590px] bg-gradient-to-r from-[#BA2739] via-[#225F8C] via-[#314A93] via-[#42319A] to-[#464748] md:max-w-[700px] lg:max-w-[700px] xl:max-w-[1325px]">
        </div>
    </div>
    <!-- DIVIDER LINE GRADIENT END -->

    <!-- INDUSTRIES SECTION START -->
    <div id="industries"
        class="-mt-5 flex flex-col items-center justify-center pl-4 pr-6 pt-8 sm:pt-24 md:pt-12 lg:pt-20 xl:px-2">
        <div
            class="flex flex-wrap items-center justify-center gap-x-8 gap-y-8 sm:gap-x-10 lg:gap-x-11 min-[1430px]:flex-nowrap">
            <!-- Logos -->
            <div class="grid grid-cols-3 gap-2 sm:gap-y-8 sm:h-[80%] sm:w-[80%] h-[80%] w-[85%]">
                <div class="h-32 sm:h-32 items-center justify-center">
                    <img src="/assets/index/industries/kpdn-logo.png" alt="KPDN Logo"
                        class="h-full w-full object-contain" />
                </div>
                <div class="h-18 sm:h-32 items-center justify-center">
                    <img src="/assets/index/industries/kpkt-logo.png" alt="KPKT Logo"
                        class="h-full w-full object-contain" />
                </div>
                <div class="h-18 sm:h-32 items-center justify-center">
                    <img src="/assets/index/industries/dosm-logo.png" alt="DOSM Logo"
                        class="h-full w-full object-contain" />
                </div>
                <div class="h-18 sm:h-32 items-center justify-start">
                    <img src="/assets/index/industries/agc-logo.png" alt="AGC Logo"
                        class="h-full w-full object-contain" />
                </div>
                <div class="h-18 sm:h-32 items-center justify-center xl:-ml-2">
                    <img src="/assets/index/industries/mbsp-logo.png" alt="MBSP Logo"
                        class="h-full w-full object-contain" />
                </div>
                <div class="h-18 sm:h-32 items-center justify-center">
                    <img src="/assets/index/industries/jakim-logo.png" alt="JAKIM Logo"
                        class="h-full w-full object-contain" />
                </div>
                <div class="h-18 sm:h-32 items-center justify-center">
                    <img src="/assets/index/industries/lkim-logo.svg" alt="LKIM Logo"
                        class="h-full w-full object-contain" />
                </div>
                <div class="h-18 sm:h-32 items-center justify-center">
                    <img src="/assets/index/industries/aadk-logo.svg" alt="AADK Logo"
                        class="h-full w-full object-contain" />
                </div>
                <div class="h-18 sm:h-32 items-center justify-center">
                    <img src="/assets/index/industries/sprm-logo.svg" alt="SPRM Logo"
                        class="h-full w-full object-contain" />
                </div>
            </div>

            <!-- Text Block -->
            <div class="flex flex-col items-center pt-4 sm:pt-6 md:pt-8">
                <div class="flex w-full flex-col items-start gap-y-6 sm:w-[606px] sm:gap-y-9 md:w-[700px]">
                    <!-- Handshake Image -->
                    <div class="flex items-center sm:px-5">
                        <img src="/assets/index/industries/icon-3.png" loading="lazy"
                            class="hidden h-12 w-auto flex-shrink-0 object-cover object-center sm:h-16 md:h-20 xl:flex" />
                    </div>

                    <!-- Title -->
                    <div class="self-stretch pt-2 sm:pt-3 md:pt-4">
                        <div
                            class="rpv-title font-circular-std -mt-[50px] mb-4 text-[22px] font-medium leading-normal lg:text-[40px]">
                            <span>
                                <p>Shaping Success Across Industries</p>
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div
                        class="rpv-desc -mt-6 flex items-start self-stretch text-justify font-poppins text-[14px] leading-[30px]">
                        <p>
                            We partner with leading organizations across various
                            sectors, delivering tailored solutions that drive
                            success and innovation.
                        </p>
                    </div>

                    <!-- Buttons
                    <div
                        class="flex flex-wrap items-center justify-start gap-x-4 gap-y-2 sm:gap-x-6 min-[1430px]:flex-nowrap">
                        <div class="relative group">
                            <a href="{{ route("about-us") }}"
                                class="inline-flex items-center px-3 py-3 lg:px-7 lg:py-4 lg:text-lg text-sm sm:text-xl font-inter text-black border border-black rounded-full hover:bg-[#225f8C] hover:text-white transition duration-300">
                                View Case Study
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- INDUSTRIES SECTION END -->

    <!-- DIVIDER LINE GRADIENT START -->
    <div class="mt-8 flex w-full justify-center px-4 sm:px-0 md:mt-12 lg:mt-16">
        <div
            class="h-[4px] w-full max-w-[590px] bg-gradient-to-r from-[#BA2739] via-[#225F8C] via-[#314A93] via-[#42319A] to-[#464748] md:max-w-[700px] lg:max-w-[700px] xl:max-w-[1325px]">
        </div>
    </div>
    <!-- DIVIDER LINE GRADIENT END -->

    <br><br><br><br><br><br><br><br>
</div>

<script>
    // Check if "About Us" and "Services" sections are in view
    window.addEventListener('scroll', () => {
        const aboutUsSection = document.getElementById('about-us');
        const serviceSection = document.getElementById('services');

        // Get bounding rectangles for both sections
        const aboutUsRect = aboutUsSection.getBoundingClientRect();
        const serviceRect = serviceSection.getBoundingClientRect();

        // Check if the "About Us" section is at least 50% in the viewport
        if (aboutUsRect.top <= window.innerHeight * 0.5) {
            aboutUsSection.classList.add('opacity-100', 'translate-y-0');
        } else {
            aboutUsSection.classList.remove('opacity-100', 'translate-y-0');
        }

        // Check if the "Services" section is at least 50% in the viewport
        if (serviceRect.top <= window.innerHeight * 0.5) {
            serviceSection.classList.add('opacity-100', 'translate-y-0');
        } else {
            serviceSection.classList.remove('opacity-100', 'translate-y-0');
        }
    });


    // script for image carousel sliding target
    document.addEventListener('DOMContentLoaded', () => {
        // Smooth sliding image when clicking a bullet point
        document.querySelectorAll('.bullet-point').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                updateActiveBullet(targetId);
                scrollToSlide(targetId);
            });
        });

        // Handle mobile arrows
        document.querySelectorAll('.mobile-arrow').forEach((arrow) => {
            arrow.addEventListener('click', function (e) {
                e.preventDefault();
                handleArrowClick(this);
            });
        });

        // Handle desktop arrows
        document.querySelectorAll('.desktop-arrow').forEach((arrow) => {
            arrow.addEventListener('click', function (e) {
                e.preventDefault();
                handleArrowClick(this);
            });
        });

        // Function to handle arrow clicks
        function handleArrowClick(arrow) {
            const targetId = arrow.getAttribute('href').substring(1);
            scrollToSlide(targetId);
            updateActiveBullet(targetId);
        }

        // Scroll to the specified slide
        function scrollToSlide(slideId) {
            const targetSlide = document.getElementById(slideId);
            if (targetSlide) {
                targetSlide.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center',
                });
            }
        }

        // Function to update the active bullet
        function updateActiveBullet(targetSlideId) {
            document.querySelectorAll('.bullet-point').forEach(bullet => {
                bullet.classList.remove('active-bullet');
            });
            const activeBullet = document.querySelector(`a[href="#${targetSlideId}"]`);
            if (activeBullet) {
                activeBullet.classList.add('active-bullet');
            }
        }

        // Set the first slide as active on page load (for mobile carousel as an example)
        updateActiveBullet('mobile-slide1');
        updateActiveBullet('desktop-slide1');
    });
</script>