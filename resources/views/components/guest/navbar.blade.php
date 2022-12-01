<nav class="sticky top-0 z-[90] mx-auto">


    <!-- NAV DIV -->
    <div class="md:relative md:h-14 px-2 md:px-3 py-1 md:py-0 bg-[rgba(0,51,102,.99)] border-t-4 border-red-700">

        <!-- LOGO -->
        <div class="absolute z-[100] hidden md:block">
            <div class="py-4 px-3  w-48 lg:w-56 bg-white rounded-md mt-3">
                <a href="/">
                    <img src="/images/logo.png" class="w-32 lg:w-56" alt="logo">
                </a>
            </div>
            <h3 class="text-[#007a28] mt-4 lg:mt-0 text-sm lg:text-lg font-sans">Leading The People ... Moulding
                Opinions.</h3>
        </div>

        <!-- NAV MENU DIV -->
        <div class="md:ml-44 lg:ml-64 px-2  md:px-4 py-1 md:py-0 flex justify-between">

            <!-- LOGO -->
            <div class="block md:hidden">
                <div class=" py-3 px-2 w-32 bg-white rounded">
                    <a href="/">
                        <img src="/images/logo.png" class="w-28" alt="logo">
                    </a>
                </div>
                <h4 class="text-[yellow] text-sm font-sans">Leading The People ... Moulding Opinions.</h4>
            </div>

            <!-- MENU ITEMS 1-->
            <div class="hidden md:flex space-x-2">

                <div class="py-3 px-3">
                    <a href="/imo-politics"
                        class="text-white md:text-sm lg:text-base md:font-semibold lg:font-medium font-sans">
                        Imo Politics
                    </a>
                </div>

                <div class="py-3 px-3">
                    <a href="/foreign-news"
                        class="text-white md:text-sm lg:text-base md:font-semibold lg:font-medium font-sans">
                        Foreign news
                    </a>
                </div>

                <div class="py-3 px-3 md:hidden lg:flex">
                    <a href="/politics"
                        class="text-white md:text-sm lg:text-base md:font-semibold lg:font-medium font-sans">
                        Politics
                    </a>
                </div>

                <div class="py-3 px-3 md:hidden lg:flex">
                    <a href="/economy" class="text-white text-base md:font-semibold lg:font-medium font-sans">
                        Economy
                    </a>
                </div>

                <div class="py-3 px-3 md:hidden lg:flex">
                    <a href="/entertainment"
                        class="text-white md:text-sm lg:text-base md:font-semibold lg:font-medium font-sans ">
                        Entertainment
                    </a>
                </div>

                <div class="py-3 px-3">
                    <a href="/sport"
                        class="text-white md:text-sm lg:text-base md:font-semibold lg:font-medium font-sans">
                        Sport
                    </a>
                </div>


                <div class="py-3 px-3 md:hidden lg:flex">
                    <a href="/crime-watch" class="text-white text-base font-medium font-sans">
                        Crime watch
                    </a>
                </div>


            </div>



            <!-- MOBILE MENU -->
            <div x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">

                 <!-- MENU ITEMS 2-->
                <div class="flex">

                    <div @click="open = ! open" class="py-4 px-3 md:flex hidden">
                        <a href="" class="text-white md:text-sm lg:text-base md:font-semibold lg:font-medium flex font-sans">
                            <span> More</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-4 h-4 mt-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="order-last md:order-none py-3 px-2" @click="open = ! open">

                        <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'hidden' : !open }" class="w-7 h-7 stroke-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'hidden' : open }" class="w-7 h-7 stroke-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>


                    </div>

                    <div class="py-2 px-2 hidden md:block md:px-6">
                        <a href="/watch-tv" type="submit"
                            class="bg-[#d20f26] text-white text-sm font-sans md:font-medium rounded w-24 py-1.5 px-3">
                            Watch Tv
                        </a>
                    </div>


                </div>


                <!-- MENU ITEMS -->
                <div x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        style="display: none;"

                    class="absolute z-[90] py-20 flex-col bg-[rgba(0,51,102,.99)] h-screen overscroll-y-contain overflow-x-scroll self-end   space-y-4 font-bold sm:w-auto left-0 right-0">

                    <!-- SEARCH INPUT FORM -->
                    <div class="border-y border-y-zinc-400  py-4 px-2 md:px-0">

                        <form action="{{ route('search') }}" method="GET" class="flex justify-center w-full items-center">


                            <input type="search" name="search"
                                class="border-2 border-gray-500 py-3 px-3 rounded focus:outline-none w-full md:w-6/12 focus:border-sky-700 focus:ring-sky-600 block sm:text-sm focus:ring-1 placeholder:text-base placeholder:font-sans placeholder:text-gray-500"
                                placeholder="Search easternleadexpress.ng" required autofocus>


                            <button type="submit" class="py-3 px-6 text-base bg-[#d20f26] font-sans font-medium text-white rounded">
                                search
                            </button>


                        </form>

                    </div>


                    <!-- CONTENT SECTION DIV-->
                    <!-- GRID-->
                    <div
                        class="container mt-12 mx-auto px-3 grid grid-cols-2 gap-4 md:grid md:grid-cols-3 md:gap-4 lg:grid lg:grid-cols-5 lg:gap-4 ">

                        <div class="py-2 px-2  md:hidden md:px-6">
                            <a href="/watch-tv" type="submit"
                                class="bg-[#d20f26] text-white text-sm font-sans md:font-medium rounded w-24 py-1.5 px-3">
                                Watch Tv
                            </a>
                        </div>

                        <!-- GRID BOX 1-->
                        <div class="flex md:hidden  lg:hidden">
                            <a href="/foreign-news">
                                <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Foreign-news</h1>
                            </a>

                        </div>

                        <!-- GRID BOX 2-->
                        <div class="flex md:hidden lg:hidden">
                            <a href="/imo-politics">
                                <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Imo Politics</h1>
                            </a>

                        </div>

                        <!-- GRID BOX 3-->
                        <div class="flex lg:hidden">
                            <a href="/politics">
                                <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Politics</h1>
                            </a>
                        </div>

                        <!-- GRID BOX 4 -->
                        <div class="flex lg:hidden">
                            <a href="/entertainment">
                                <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Entertainment</h1>
                            </a>
                        </div>

                        <!-- GRID BOX 5 -->
                        <div class="flex lg:hidden">
                            <a href="/economy">
                                <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Economy</h1>
                            </a>

                        </div>

                        <!-- GRID BOX 6 -->
                        <div class="flex lg:hidden">
                            <a href="/sport">
                                <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Sports</h1>
                            </a>

                        </div>

                        <!-- GRID BOX 7 -->
                        <div class="flex  lg:hidden">
                            <a href="/crime-watch">
                                <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Crime watch</h1>
                            </a>
                        </div>

                        <div class="flex flex-col space-y-2">
                            <!-- GRID BOX 8 -->

                            <div class="flex ">
                                <a href="/health">
                                    <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Health</h1>
                                </a>
                            </div>

                            <div class="flex ">
                                <a href="/insecurity">
                                    <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Insecurity</h1>
                                </a>
                            </div>

                            <!-- GRID BOX 9 -->
                            <div class="flex ">
                                <a href="/opinion">
                                    <h1 class="text-white text-lg md:text-2xl font-sans font-bold">Opinion</h1>
                                </a>
                            </div>
                        </div>


                        <!-- GRID BOX 10 -->
                        <div class="flex flex-col">
                            <div>
                                <h1 class="text-white text-2xl font-sans font-bold">About</h1>
                            </div>
                            <div class="space-y-2">
                                <div>
                                    <a href="/contact-us" class="text-white text-base font-normal">
                                        Contact Us
                                    </a>
                                </div>

                                <div>
                                    <a href="/advertise" class="text-white text-base font-normal">
                                        Advertise With Us
                                    </a>
                                </div>

                                <div>
                                    <a href="/about-us" class="text-white text-base font-normal">
                                       About Us
                                    </a>
                                </div>

                            </div>
                        </div>

                        <!-- GRID BOX 9 -->
                        <div class="container mx-auto px-3 mt-3 flex space-x-4">

                            <div class="">
                                <a href="https://facebook.com/theleadexpressng/?_rdc=1&_rdr" target="_blank">
                                    <img src="/icons/icons8-facebook.png" class="w-12" alt="icons">
                                </a>
                            </div>

                            <div class="">
                                <a href="https://www.instagram.com/eastern_lead_express_newspaper/?hl=en" target="_blank">
                                    <img src="/icons/icons8-instagram.png" class="w-12" alt="icons">
                                </a>
                            </div>

                            <div class="">
                                <a href="https://twitter.com/leadexpres_news" target="_blank">
                                    <img src="/icons/free-twitter-logo.png" class="w-12" alt="icons">
                                </a>
                            </div>

                            <div class="">
                                <a href="" target="_blank">
                                    <img src="/icons/icons8-whatsapp.png" class="w-12" alt="icons">
                                </a>
                            </div>

                        </div>



                    </div>

                </div>
            </div>


        </div>
    </div>



    </div>

    <!-- SUB MEAN-->
    <div>
        <x-guest.subnav />
    </div>

</nav>
