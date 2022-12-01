<x-guest-layout>

    <div class="mb-12 mt-0 md:mt-6 bg-gray-50">

        <div class="w-full flex flex-col space-x-1 lg:flex-row flex-wrap bg-white lg:flex-nowrap px-4 py-4">

            <!-- MAIN CONTENT -->
            <div class="w-fixed w-full h-96 flex-shrink flex-grow-0 border border-gray-200 px-4 py-2">

                <h1 class="text-4xl font-serif font-bold mb-4">Contact us</h1>

                <div class="space-y-4">
                    <h2 class="text-xl md:text-2xl font-sans text-gray-700">
                        Email: <span class="font-serif">easternlead01@gmail.com</span>
                    </h2>

                    <h2 class="text-base md:text-2xl font-medium	font-sans text-gray-700">
                        Phone: <span>08038686387 or 08064281300</span>
                    </h2>

                    <h2 class="text-base md:text-2xl font-medium	font-sans text-gray-700">
                        Twitter: <span>@ leadexpres</span>
                    </h2>

                    <h2 class="text-base md:text-2xl font-medium	font-sans text-gray-700">
                        Instagram: <span>easternleadepressnewspapers</span>
                    </h2>

                    <h2 class="text-base md:text-2xl font-medium	font-sans text-gray-700">
                        Web: <a href="eastetnleadexpress.ng">eastetnleadexpress.ng</a>
                    </h2>

                    <h2 class="text-base md:text-2xl font-medium	font-sans text-gray-700">
                        Facebook: <span>easternlead express news</span>
                    </h2>
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

                            @foreach ($renders as $render)
                            <!-- SUB DIV 1 -->
                            <div>

                                <a href="blog/{{ $render->id }}{{ $render->categories }}"
                                    class="grid grid-cols-2 gap-4 h-52 md:grid md:justify-center md:items-center px-4 border-b border-b-gray-200 md:px-36 lg:px-0">

                                    <div class="mt-6 md:mt-0">
                                        <img src="/uploads/{{$render->image}}" class="w-full md:w-56 h-36 object-cover" />
                                    </div>

                                    <div class="mt-6 md:mt-0">

                                        <h2
                                            class="text-[#d20f26]  text-xs md:text-lg lg:text-xs font-sans font-bold text-justify">
                                            {{ $render->categories }}
                                        </h2>

                                        <p class="text-[rgba(0,51,102,.99)] font-medium text-xs md:text-sm lg:text-xs">
                                            {{ $render->title }}
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
