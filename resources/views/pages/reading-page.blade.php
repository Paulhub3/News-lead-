<x-guest-layout>

<div class="mb-12 mt-0 md:mt-6 bg-gray-50">

    @foreach ($post as $posts)
    <div class="grid grid-cols-1 gap-4">

        <div class="mx-auto px-4 flex space-x-2 md:space-x-4 text-lg">

            <h3 class="text-[rgba(0,51,102,.99)] font-sans font-medium">{{ $posts->categories }}</h3>

            <h1 class="text-gray-800 font-sans font-bold text-xl top-0">.</h1>

            <h3 class="text-gray-800 font-sans font-bold">Published <span class=" font-medium">{{ \Carbon\Carbon::parse($posts->date)->format('l jS \\of F Y h:i:s A')}}</span> </h3>

        </div>

        <h1 class="text-sm md:text-xl lg:text-3xl text-center font-serif font-bold mb-4 ">{{ $posts->title }}</h1>
    </div>


    <div class="lg:w-9/12 flex justify-between px-6">

        <div class="">
            <h3 class="text-gray-800 font-sans font-bold">
                By <span class=" text-[rgba(0,51,102,.99)]">{{ $posts->author }}</span>
            </h3>
        </div>

        <div class=" flex space-x-4">

            <div class="">

                <button>

                    <a href="https://www.facebook.com/sharer.php?u=https://easternleadexpress.ng/blog/" target="_blank">

                        <img src="/icons/icons8-facebook.png" class="w-12" alt="icons">

                    </a>

                </button>

            </div>

            <div class="">

                <button>

                    <a href="https://twitter.com/share?url=https://easternleadexpress.ng/blog/" target="_blank">

                        <img src="/icons/free-twitter-logo.png" class="w-12" alt="icons">

                    </a>

                </button>

            </div>

            <div class="">

                <button>
                    <a  href="https://api.whatsapp.com/send?text=https://easternleadexpress.ng/blog" target="_blank">

                        <img src="/icons/icons8-whatsapp.png" class="w-12" alt="icons">

                    </a>

                </button>

            </div>



        </div>

    </div>



    <!-- LAYOUT SECTION -->
    <div class="w-full flex flex-col space-x-1 lg:flex-row flex-wrap bg-white lg:flex-nowrap px-4 py-4">

        <!-- MAIN CONTENT -->
        <div>

            <div class="w-fixed w-full flex-shrink flex-grow-0 border border-gray-200">


                <!-- FIRST DIV SECTION -->
                <div class="">

                    <div class="w-full grid grid-cols-1 gap-32 md:gap-4 mb-12">

                        <div class="h-72 md:h-96">

                            <div>
                                <img src="/uploads/{{$posts->image}}"
                                class="w-full h-96  overflow-hidden bg-no-repeat object-cover" />
                            </div>

                        </div>

                        <div class="px-6 space-y-6">

                            <p class="text-[rgba(0,51,102,.99)] font-sans text-sm md:text-lg font-semibold">
                                {{ $posts->description }}
                            </p>

                        </div>

                        <div class="px-6 space-y-4 mt-5">

                            <p class="text-gray-800 font-sans text-sm md:text-base md:font-semibold">
                                {{ $posts->artical_one }}
                            </p>

                            <p class="text-gray-800 font-sans text-sm md:text-base md:font-semibold">
                                {{ $posts->artical_two }}
                            </p>

                            <p class="text-gray-800 font-sans text-sm md:text-base md:font-semibold">
                                {{ $posts->artical_three }}
                            </p>

                            <p class="text-gray-800 font-sans text-sm md:text-base md:font-semibold">
                                {{ $posts->artical_fourth }}
                            </p>

                            <p class="text-gray-800 font-sans text-sm md:text-base md:font-semibold">
                                {{ $posts->artical_fifth }}
                            </p>

                        </div>

                        <div class="px-6 flex space-x-2">

                            <h2 class="text-gray-800 font-sans text-sm md:text-base md:font-semibold">
                                Also Read:
                            </h2>

                            <a class="text-red-600 underline font-sans text-sm md:text-base md:font-semibold" href="{{ $posts->read_link }}">
                                <h1>{{ $posts->link_text }}</h1>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <!-- SECOND DIV SECTION WITH GRID -->

            <div class="md:px-20 px-2 mb-4 mt-24">

                <h1 class="text-gray-900 text-lg font-sans font-medium">
                    More From Eastern Leadexpress
                </h1>

            </div>

            <div class="grid grid-cols-1 w-full gap-8 md:gap-7 md:grid md:grid-cols-2 px-2 md:px-14 ">

                <!-- GRID BOX  -->


                @foreach ($shows as $show)
                <div class="grid grid-cols-1 gap-5 w-80 px-4">

                    <a >

                        <div class="relative h-40">

                            <div>
                                <img src="/uploads/{{$show->image}}"
                                    class=" h-40 w-80 md:w-96 absolute overflow-hidden bg-no-repeat object-cover" />
                            </div>

                            <div class="z-10 absolute bottom-0 ">
                                <button type="button"
                                    class="bg-[rgba(0,51,102,.99)] text-white font-medium font-sans text-lg px-5 py-2 uppercase">
                                    {{$show->categories}}
                                </button>
                            </div>

                        </div>

                        <div>
                            <h4 class="text-[rgba(0,51,102,.99)] font-sans text-sm text-justify font-bold hover:underline">
                                {{$show->title}}
                            </h4>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

        </div>


        <!--  SIDE BAR RIGHT -->
        <div class="w-fixed w-full lg:w-5/12 flex-shrink flex-grow-0 mt-12 md:px-4">

            <div>

                <div
                    class="bg-white border w-full lg:w-72 grid grid-cols-1 gap-24 md:gap-4  mt-12  border-gray-200  mb-6 py-3 px-2">

                    <div class="bg-[#d20f26] py-2 px-3 w-36 mb-3 rounded-r-full">
                        <h1 class="text-lg text-white font-serif font-medium">Also Read</h1>
                    </div>


                    <div>

                        <!-- SUB DIV 1 -->

                        <div >
                            @foreach ($recents as $recent)

                            <a
                                class="grid grid-cols-2 h-52 md:grid md:justify-center md:items-center  gap-3 px-2 border-b border-b-gray-200 md:px-36 lg:px-0">

                                <div>
                                    <img src="/uploads/{{$recent->image}}" class="w-full md:w-56 h-36 object-cover" />
                                </div>

                                <div>

                                    <h2 class="text-[#d20f26]  text-xs md:text-lg lg:text-xs font-sans font-bold text-justify">
                                        {{$recent->categories}}
                                    </h2>

                                    <p class="text-[rgba(0,51,102,.99)] font-medium text-xs md:text-sm lg:text-xs">
                                        {{$recent->title}}
                                    </p>

                                </div>
                            </a>

                        </div>
                        @endforeach

                        <div class="bg-white px-2">

                            @foreach ($adverts as $advert)
                            <div class="mb-8">
                                <img src="/banners/{{$advert->Ads}}" class="w-full md:w-96 lg:w-72 mx-auto object-contain overflow-hidden" />
                            </div>
                            @endforeach

                        </div>
                    </div>


                </div>


            </div>

        </div>
    </div>
    @endforeach

</div>
</x-guest-layout>
