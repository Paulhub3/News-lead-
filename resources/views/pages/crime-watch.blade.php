<x-guest-layout>

    <div class="mb-12 mt-0 md:mt-6 bg-gray-50">

        <!-- LAYOUT SECTION -->
        <div class="w-full flex flex-col space-x-1 lg:flex-row flex-wrap bg-white lg:flex-nowrap px-4 py-4">

            <!-- MAIN CONTENT -->
            <div>

                <h1 class="text-lg  md:text-4xl font-serif font-bold mb-4">Crime Watch</h1>

                <div class="w-fixed w-full flex-shrink flex-grow-0 border border-gray-200">

                    <!-- FIRST DIV SECTION  -->
                    <div class="w-full grid grid-cols-1 gap-6 md:gap-4 mb-12">

                        @foreach ($posts as $post)
                        <a href="blog/{{ $post->id }}{{ $post->title }}">

                            <div class="relative h-72 md:h-96 w-full">

                                <div>
                                    <img src="/uploads/{{$post->image}}"
                                        class="w-full h-72  md:h-96 absolute overflow-hidden bg-no-repeat object-cover" />
                                </div>

                                <div class="z-10 absolute bottom-0">
                                    <button type="button"
                                        class="bg-[rgba(0,51,102,.99)] text-white font-medium font-sans text-lg px-5 py-2 uppercase">
                                        {{$post->categories}}
                                    </button>
                                </div>

                            </div>

                            <div class="px-6 space-y-2">
                                <h3 class="text-lg text-gray-500 font-sans font-bold text-justify">
                                    {{ \Carbon\Carbon::parse($post->date)->format('l jS \\of F Y h:i:s A')}}
                                </h3>


                                <h4
                                    class="text-[rgba(0,51,102,.99)] font-sans text-base md:text-xl text-center font-bold hover:underline">
                                    {{$post->title}}
                                </h4>

                                <p class="text-gray-600 font-sans hidden md:flex md:text-sm font-semibold">
                                    {{$post->description}}
                                </p>

                            </div>
                        </a>
                        @endforeach

                    </div>
                </div>

                <!-- SECOND GRID DIV SECTION -->
                <div class="grid grid-cols-1 gap-8 mt-24 md:gap-7 md:grid md:grid-cols-2  mb-12">

                    <!-- GRID BOX  -->
                    @foreach ($shows as $show)
                    <div class="grid grid-cols-1 gap-5 px-4">

                        <a href="blog/{{ $show->id }}{{ $show->title }}">

                            <div class="relative h-40">

                                <div>
                                    <img src="/uploads/{{$show->image}}"
                                        class="h-40 w-80 absolute overflow-hidden bg-no-repeat object-cover" />
                                </div>

                                <div class="z-10 absolute bottom-0 ">
                                    <button type="button"
                                        class="bg-[rgba(0,51,102,.99)] text-white font-medium font-sans text-lg px-5 py-2 uppercase">
                                        {{ $show->categories }}
                                    </button>
                                </div>

                            </div>

                            <div class="space-y-2">
                                <h3 class="text-lg text-gray-500 font-sans font-bold "></h3>

                                <h4
                                    class="text-[rgba(0,51,102,.99)] text-justify font-sans text-sm font-bold hover:underline">
                                    {{ $show->title }}
                                </h4>

                                <p class="text-gray-600 font-sans hidden md:flex md:text-sm font-semibold">
                                    {{ $show->description }}
                                </p>
                            </div>

                        </a>

                    </div>
                    @endforeach

                </div>


                <!-- THIRD DIV SECTION -->
                <div class="grid grid-cols-1 gap-2">

                    <!-- FLEX DIV 1 -->
                    @foreach ($renders as $render)
                    <div>

                        <a href="blog/{{ $render->id }}{{ $render->title }}"
                            class="grid grid-cols-1 gap-8 px-2 md:flex md:space-x-3 md:px-6  border-b border-b-gray-200 py-4 md:h-52 mb-6">

                            <div class="md:mt-2">
                                <img src="/uploads/{{$render->image}}" class="w-96  h-36 object-cover" />
                            </div>

                            <div class="flex flex-col mx-auto mt-2 md:mx-0">

                                <div class="md:inline-flex md:space-x-2">

                                    <h2
                                        class="text-[#477baffc] text-xs hover:underline uppercase font-sans font-bold text-justify">
                                        {{ $render->title }}
                                    </h2>

                                    <h3 class="text-xs text-gray-500 font-sans font-bold text-justify">
                                       {{ \Carbon\Carbon::parse($render->date)->format('l jS \\of F Y h:i:s A')}}
                                    </h3>

                                </div>

                                <div>

                                    <p
                                        class="text-[rgba(0,51,102,.99)] font-medium md:font-bold hover:underline text-xs md:text-base">
                                        {{ $render->title }}
                                    </p>

                                    <p class="text-gray-600 font-sans hidden md:flex md:text-sm font-semibold">
                                        {{ $render->description }}
                                    </p>

                                </div>


                            </div>
                        </a>

                    </div>
                    @endforeach

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

                                <a href="blog/{{ $show->id }}{{ $show->title }}"
                                    class="grid grid-cols-2 gap-4 h-52 md:grid md:justify-center md:items-center px-4 border-b border-b-gray-200 md:px-36 lg:px-0">

                                    <div class="mt-6 md:mt-0">
                                        <img src="/uploads/{{$show->image}}" class="w-full md:w-56 h-36 object-cover" />
                                    </div>

                                    <div class="mt-6 md:mt-0">

                                        <h2
                                            class="text-[#d20f26]  text-xs md:text-lg lg:text-xs font-sans font-bold text-justify">
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
