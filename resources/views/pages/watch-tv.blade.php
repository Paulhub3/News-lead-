<x-guest-layout>

        <div class="mb-12 mt-0 md:mt-6 bg-gray-50">

            <!-- LAYOUT SECTION -->
            <div class="w-full flex flex-col space-x-1 lg:flex-row flex-wrap bg-white lg:flex-nowrap px-4 py-4">

                <!-- MAIN CONTENT -->
                <div>

                    <h1 class="text-lg  md:text-4xl font-serif font-bold mb-4">Tv Broadcast</h1>

                    <div class="w-fixed w-full flex-shrink flex-grow-0 border border-gray-200">

                        <!-- FIRST DIV SECTION -->
                        <div  class="">

                            <div class="w-full grid grid-cols-1 gap-32 border border-gray-200 mb-12">
                                @foreach ($tvshows as $tvshow)

                                <div class="py-6">

                                    <div>
                                        <video class="w-full h-96" muted controls>
                                            <source src="/video/{{$tvshow->Tvs}}"
                                                type="video/mp4">
                                        </video>
                                    </div>

                                    <div class="px-6 space-y-6">

                                        <div>
                                            <h3 class="text-gray-800 font-sans font-bold">
                                                {{ \Carbon\Carbon::parse($tvshow->date)->format('l jS \\of F Y h:i:s A')}}</h3>

                                            <p class="text-[rgba(0,51,102,.99)] font-sans text-sm md:text-lg font-semibold">
                                                {{ $tvshow->title }}
                                            </p>
                                        </div>

                                        <p class="text-gray-800 font-sans text-sm md:text-base md:font-semibold">
                                            {{ $tvshow->description }}
                                        </p>

                                    </div>
                                </div>

                                @endforeach

                            </div>

                        </div>
                    </div>


                </div>



                <!--  SIDE BAR RIGHT -->
                <div class="w-fixed w-full lg:w-5/12  flex-shrink  flex-grow-0 mt-12 md:px-4">

                    <div>
                        <div
                            class="bg-white border w-full lg:w-72 grid grid-cols-1 gap-24 md:gap-4  mt-12  border-gray-200  mb-6 py-3 px-2">

                            <div class="bg-[#d20f26] py-2 px-3 w-36 mb-3 rounded-r-full">
                                <h1 class="text-xl text-white font-serif font-medium">Recent News</h1>
                            </div>

                            <div>

                                @foreach ($shows as $show)
                                <!-- SUB DIV 1 -->
                                <div>

                                    <a href="blog/{{ $show->id }}{{ $show->categories }}"
                                        class="grid grid-cols-2 gap-4 h-52 md:grid md:justify-center md:items-center px-4 border-b border-b-gray-200 md:px-36 lg:px-0">

                                        <div class="mt-6 md:mt-0">
                                            <img src="/uploads/{{$show->image}}" class="w-full md:w-56 h-36 object-cover" />
                                        </div>

                                        <div class="mt-6 md:mt-0">

                                            <h2 class="text-[#d20f26]  text-xs md:text-lg lg:text-xs font-sans font-bold text-justify">
                                                {{ $show->categories }}
                                            </h2>

                                            <p class="text-[rgba(0,51,102,.99)] font-medium text-xs md:text-sm lg:text-xs">
                                                {{ $show->title }}
                                            </p>

                                        </div>

                                    </a>
                                </div>
                                @endforeach

                            </div>

                            <div class="bg-white px-2">

                                @foreach ($adverts as $advert)
                                <div class="mb-8">

                                    <img src="/banners/{{$advert->Ads}}"
                                        class="w-80 md:w-96 lg:w-72 mx-auto object-contain overflow-hidden" />

                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

</x-guest-layout>
