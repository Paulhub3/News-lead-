<x-guest-layout>

    <div class="mb-12 mt-0 md:mt-6">

    <!-- HOME FIRST LAYOUT -->
    <div class="w-full flex flex-col space-x-1 lg:flex-row flex-wrap lg:flex-nowrap py-4">

      <!-- HOME SIDE BAR LEFT -->
      <div class="w-fixed w-full lg:w-5/12 flex-shrink flex-grow-0 px-4 mt-12 lg:mt-o">

        <div class="p-4 bg-white border border-gray-200 w-full">

            <h1 class="text-gray-800 mb-3 text-lg font-semibold font-sans">Exclusive News</h1>

            <!-- GRID DIV -->

            <div
                class="grid grid-cols-1 px-2 gap-2 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:grid-cols-1 lg:gap-2 overflow-hidden content-center justify-center md:px-14 lg:px-0">

                <!-- SUB DIV 1 -->
                @foreach ($exclusiveNews as $exclusiveNew)

                    <a href="blog/{{ $exclusiveNew->id }}{{$exclusiveNew->categories}}" class="grid grid-cols-2 overflow-hidden gap-2 border-y border-y-gray-200 py-4 mb-6">
                        <div class="">
                            <img src="/uploads/{{$exclusiveNew->image}}" loading="lazy" class="w-full md:w-56 h-36 object-cover" />
                        </div>

                        <div class="">

                            <h2 class="text-[#d20f26] text-sm  font-sans font-bold text-justify">
                                {{$exclusiveNew->categories}}
                            </h2>

                            <p class="text-[rgba(0,51,102,.99)] font-medium text-sm">
                                {{ $exclusiveNew->title }}
                            </p>

                        </div>
                    </a>

                @endforeach
`
            </div>
        </div>

      </div>

      <!-- HOME CONTENT SECTION IMPORTED -->
      <div class="hidden md:flex mt-12 lg:hidden">
        <div class="grid grid-cols-1 gap-2">

            <!-- FLEX DIV 1 -->
            @foreach ($renders as $render)
            <div>

                <a href="blog/{{ $render->id }}{{$render->categories}}"
                    class="grid grid-cols-1 gap-8 px-2 md:flex md:space-x-3 md:px-6  border-b border-b-gray-200 py-4 md:h-52 mb-6">

                    <div class="mx-auto md:mx-0">
                        <img src="/uploads/{{$render->image}}" class="w-96  h-36 object-cover" />
                    </div>

                    <div class="mt-1 mx-auto md:mx-0">


                        <h2 class="text-[#477baffc] text-xs hover:underline uppercase font-sans font-bold text-justify">
                            {{$render->categories}}
                        </h2>

                        <p class="text-[rgba(0,51,102,.99)] font-bold hover:underline text-xl md:text-lg">
                            {{$render->title}}
                        </p>

                    </div>
                </a>
            </div>
            @endforeach
        </div>
      </div>

      <!-- HOME MAIN CONTENT -->
      <main class="w-full order-first lg:order-none bg-white border border-gray-200">

        <!-- First Div -->
        <div class="w-full grid grid-cols-1 gap-6 md:gap-4 mb-12">
            @foreach ($posts as $post)

            <a href="blog/{{ $post->$post }}">
                <div class="relative h-72 md:h-96 w-full">

                    <div>
                        <img src="/uploads/{{$post->image}}"
                            class="w-full h-72 md:h-96 absolute overflow-hidden bg-no-repeat object-cover" />
                    </div>

                    <div class="z-10 absolute bottom-0">
                        <button type="button"
                            class="bg-[rgba(0,51,102,.99)] text-white font-medium font-sans text-lg px-5 py-2 uppercase">
                            {{$post->categories}}
                        </button>
                    </div>

                </div>

                <div class="px-6">
                    <h4 class="text-[rgba(0,51,102,.99)] font-sans text-base md:text-xl text-center font-bold hover:underline">
                        {{$post->title}}
                    </h4>
                </div>
            </a>
            @endforeach

        </div>


        <!-- SECOND DIV SECTION WITH GRID -->
        <div class="grid grid-cols-1 gap-8 md:gap-7 md:grid md:grid-cols-2  mb-12">

            <!-- GRID BOX  -->

            @foreach ($shows as $show)
            <div class="grid grid-cols-1 gap-5 px-4">


                <a href="blog/{{ $show->id }}{{$show->categories}}">
                    <div class="relative h-40">

                        <div>
                            <img src="/uploads/{{$show->image}}" class=" h-40 w-80 absolute overflow-hidden bg-no-repeat object-cover" />
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

        <!-- AUTO IMPORTED THIRD DIV SECTION WITH GRID -->
        <div class="flex md:hidden lg:flex">


            <div class="grid grid-cols-1 gap-2">

                <!-- FLEX DIV 1 -->
                @foreach ($renders as $render)
                <div>

                    <a href="blog/{{ $render->id }}{{$render->categories}}"
                        class="grid grid-cols-1 gap-8 px-2 md:flex md:space-x-3 md:px-6  border-b border-b-gray-200 py-4 md:h-52 mb-6">

                        <div class="mx-auto md:mx-0">
                            <img src="/uploads/{{$render->image}}" class="w-96  h-36 object-cover" />
                        </div>

                        <div class="mt-1 mx-auto md:mx-0">


                            <h2 class="text-[#477baffc] text-xs hover:underline uppercase font-sans font-bold text-justify">
                                {{$render->categories}}
                            </h2>

                            <p class="text-[rgba(0,51,102,.99)] font-bold hover:underline text-xl md:text-lg">
                                {{$render->title}}
                            </p>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
      </main>

      <!-- HOME SIDE BAR RIGHT -->
      <div class="w-fixed w-full lg:w-5/12 flex-shrink flex-grow-0 mt-12 md:px-4">

        <div class="bg-white border  w-96 md:w-full lg:w-72 grid grid-cols-1 gap-4  mt-12  border-gray-200  mb-6 py-3 px-2">

            <div class="bg-[#d20f26] py-2 px-3 w-36 mb-3 rounded-r-full">
                <h1 class="text-lg text-white font-serif font-medium">BREAKING NEWS</h1>
            </div>

            <div>

                @foreach ($renders as $render)
                <!-- SUB DIV 1 -->
                <div>

                    <a href="blog/{{ $render->id }}{{$render->categories}}"
                        class="grid grid-cols-2 h-52 md:grid md:justify-center md:items-center  gap-3 px-4 border-b border-b-gray-200 md:px-36 lg:px-0">
                        <div>
                            <img src="/uploads/{{$render->image}}" class="w-full md:w-56 h-36 object-cover" />
                        </div>
                        <div>

                            <h2 class="text-[#d20f26]  text-xs md:text-lg lg:text-xs font-sans font-bold text-justify">
                                {{$render->categories}}
                            </h2>

                            <p class="text-[rgba(0,51,102,.99)] font-medium text-xs md:text-sm lg:text-xs">
                                {{$render->title}}
                            </p>

                        </div>
                    </a>

                </div>
                @endforeach

            </div>


            <div class="bg-white px-2">

                @foreach ($adverts as $advert)
                <div class="mb-8">
                    <img src="/banners/{{$advert->Ads}}" class="w-80 md:w-96 lg:w-72 mx-auto object-contain overflow-hidden" />
                </div>
                @endforeach

            </div>

        </div>
      </div>

    </div>

    <!-- BOTTOM LAYOUT  MAIN DIV-->
    <div>
        <!-- SECOND LAYOUT  MAIN DIV-->
        <div class="grid grid-cols-1 gap-8 mb-4 lg:mb-0">

            <!-- FIRST DIV -->
            <div>
                <!-- FLEX HEADING SECTION -->
                <div class="flex justify-between px-3">

                    <a href="/imo-politics">
                        <h2 class="text-[rgba(0,51,102,.99)] text-2xl font-bold font-sans">Imo Politics</h2>
                    </a>

                    <a href="/imo-politics">
                        <h2 class="text-[rgba(0,51,102,.99)] text-xl font-bold font-sans">View All</h2>
                    </a>

                </div>

                <!-- THE CONTENT DIV -->
                <div
                    class="px-2 lg:h-96 w-full flex flex-col space-y-3 lg:flex lg:flex-row lg:space-x-3  overflow-hidden border-y border-y-gray-200">

                    <!-- IMAGE DIV WITH TEXT -->
                    <div class="h-96 w-full lg:w-6/12 flex items-end justify-start text-left ">

                        @foreach ($imos as $imo)
                        <div class="relative h-72 md:h-96 w-full">

                            <a href="blog/{{ $imo->id }}{{ $imo->categories }}">
                                <div>
                                    <img src="/uploads/{{$imo->image}}"
                                        class="w-full h-72 md:h-96 absolute overflow-hidden bg-no-repeat object-cover" />
                                </div>

                                <div
                                    class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                                </div>

                                <div class="z-10 absolute bottom-0 md:bottom-6">

                                    <h2
                                        class="text-white text-xs px-2 py-2  mb-4 hover:underline uppercase font-sans font-bold text-justify">
                                        {{$imo->categories}}

                                    </h2>

                                    <h1 class="text-white text-2xl font-bold px-2 py-2 font-sans">
                                        {{$imo->title}}
                                    </h1>

                                </div>
                            </a>
                        </div>
                        @endforeach


                    </div>

                    <!-- TEXT BOX  DIV -->
                    <div class="grid grid-cols-1 gap-8 md:gap-4 lg:w-6/12 mt-2 py-8">

                        @foreach ($imosLists as $imosList)
                        <div class="border-b border-b-gray-200 h-32 md:h-24">

                            <a href="blog/{{ $imosList->id }}{{ $imosList->categories }}">
                                <h2
                                    class="text-[#477baffc] text-xs mb-4 hover:underline uppercase font-sans font-bold text-justify">
                                    {{$imosList->categories}}
                                </h2>

                                <h4 class="text-[rgba(0,51,102,.99)] font-sans text-sm text-justify font-bold hover:underline">
                                    {{$imosList->title}}

                                </h4>
                            </a>

                        </div>
                        @endforeach

                    </div>
                </div>

            </div>



            <!-- SECOND DIV -->
            <div>
                <!-- FLEX HEADING SECTION -->
                <div class="flex justify-between px-3">

                    <a to="/foreign-news">
                        <h2 class="text-[rgba(0,51,102,.99)] text-2xl font-bold font-sans">Foreign news</h2>
                    </a>

                    <a to="/foreign-news">
                        <h2 class="text-[rgba(0,51,102,.99)] text-xl font-bold font-sans">View All</h2>
                    </a>

                </div>

                <!-- THE CONTENT DIV -->
                <div
                    class="px-2 lg:h-96 w-full flex flex-col space-y-3 lg:flex lg:flex-row lg:space-x-3  overflow-hidden border-y border-y-gray-200">

                    <!-- IMAGE DIV WITH TEXT -->
                    <div class="h-96 w-full lg:w-6/12 flex items-end justify-start text-left ">

                        @foreach ($foreigns as $foreign)
                        <div class="relative h-72 md:h-96 w-full">

                            <a href="blog/{{ $foreign->id }}{{ $foreign->categories }}">
                                <div>
                                    <img src="/uploads/{{$foreign->image}}"
                                        class="w-full h-72 md:h-96 absolute overflow-hidden bg-no-repeat object-cover" />
                                </div>

                                <div
                                    class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                                </div>

                                <div class="z-10 absolute bottom-0 md:bottom-6">

                                    <h2
                                        class="text-white text-xs px-2 py-2  mb-4 hover:underline uppercase font-sans font-bold text-justify">
                                        {{$foreign->categories}}

                                    </h2>

                                    <h1 class="text-white text-2xl font-bold px-2 py-2 font-sans">
                                        {{$foreign->title}}
                                    </h1>

                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>

                    <!-- TEXT BOX  DIV -->
                    <div class="grid grid-cols-1 gap-8 md:gap-4 lg:w-6/12 mt-2 py-8">

                        @foreach ($foreignsLists as $foreignsList)
                        <div class="border-b border-b-gray-200 h-32 md:h-24">
                            <a href="blog/{{ $foreignsList->id }}{{ $foreignsList->categories }}">
                                <h2
                                    class="text-[#477baffc] text-xs mb-4 hover:underline uppercase font-sans font-bold text-justify">
                                    {{$foreignsList->categories}}
                                </h2>

                                <h4 class="text-[rgba(0,51,102,.99)] font-sans text-sm text-justify font-bold hover:underline">
                                    {{$foreignsList->title}}

                                </h4>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>



            <!-- THIRD DIV -->
            <div>
                <!-- FLEX HEADING SECTION -->
                <div class="flex justify-between px-3">

                    <a to="/sports">
                        <h2 class="text-[rgba(0,51,102,.99)] text-2xl font-bold font-sans">Sport</h2>
                    </a>

                    <a to="/sports">
                        <h2 class="text-[rgba(0,51,102,.99)] text-xl font-bold font-sans">View All</h2>
                    </a>

                </div>

                <!-- THE CONTENT DIV -->
                <div
                    class="px-2 lg:h-96 w-full flex flex-col space-y-3 lg:flex lg:flex-row lg:space-x-3  overflow-hidden border-y border-y-gray-200">

                    <!-- IMAGE DIV WITH TEXT -->
                    <div class="h-96 w-full lg:w-6/12 flex items-end justify-start text-left ">

                        @foreach ($sports as $sport)
                        <div class="relative h-72 md:h-96 w-full">

                            <a href="blog/{{ $sport->id }}{{ $sport->categories }}">
                                <div>
                                    <img src="/uploads/{{$sport->image}}"
                                        class="w-full h-72 md:h-96 absolute overflow-hidden bg-no-repeat object-cover" />
                                </div>

                                <div
                                    class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                                </div>

                                <div class="z-10 absolute bottom-0 md:bottom-6">

                                    <h2
                                        class="text-white text-xs px-2 py-2  mb-4 hover:underline uppercase font-sans font-bold text-justify">
                                        {{$sport->categories}}

                                    </h2>

                                    <h1 class="text-white text-2xl font-bold px-2 py-2 font-sans">
                                        {{$sport->title}}
                                    </h1>

                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>

                    <!-- TEXT BOX  DIV -->
                    <div class="grid grid-cols-1 gap-8 md:gap-4 lg:w-6/12 mt-2 py-8">

                        @foreach ($sportsLists as $sportsList)
                        <div class="border-b border-b-gray-200 h-32 md:h-24">

                            <a href="blog/{{ $sportsList->id }}{{ $sportsList->categories }}">
                                <h2
                                    class="text-[#477baffc] text-xs mb-4 hover:underline uppercase font-sans font-bold text-justify">
                                    {{$sportsList->categories}}
                                </h2>

                                <h4 class="text-[rgba(0,51,102,.99)] font-sans text-sm text-justify font-bold hover:underline">
                                    {{$sportsList->title}}

                                </h4>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>


            <!-- FOURTH DIV -->
            <div>
                <!-- FLEX HEADING SECTION -->
                <div class="flex justify-between px-3">

                    <a to="/crime-watch">
                        <h2 class="text-[rgba(0,51,102,.99)] text-2xl font-bold font-sans">Crime Watch</h2>
                    </a>

                    <a to="/crime-watch">
                        <h2 class="text-[rgba(0,51,102,.99)] text-xl font-bold font-sans">View All</h2>
                    </a>

                </div>

                <!-- THE CONTENT DIV -->
                <div
                    class="px-2 lg:h-96 w-full flex flex-col space-y-3 lg:flex lg:flex-row lg:space-x-3  overflow-hidden border-y border-y-gray-200">

                    <!-- IMAGE DIV WITH TEXT -->
                    <div class="h-96 w-full lg:w-6/12 flex items-end justify-start text-left ">

                        @foreach ($crimes as $crime)
                        <div class="relative h-72 md:h-96 w-full">

                            <a href="blog/{{ $crime->id }}{{ $crime->categories }}">
                                <div>
                                    <img src="/uploads/{{$crime->image}}"
                                        class="w-full h-72 md:h-96 absolute overflow-hidden bg-no-repeat object-cover" />
                                </div>

                                <div
                                    class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                                </div>

                                <div class="z-10 absolute bottom-0 md:bottom-6">

                                    <h2
                                        class="text-white text-xs px-2 py-2  mb-4 hover:underline uppercase font-sans font-bold text-justify">
                                        {{$crime->categories}}

                                    </h2>

                                    <h1 class="text-white text-2xl font-bold px-2 py-2 font-sans">
                                        {{$crime->title}}
                                    </h1>

                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>

                    <!-- TEXT BOX  DIV -->
                    <div class="grid grid-cols-1 gap-8 md:gap-4 lg:w-6/12 mt-2 py-8">

                        @foreach ($crimesLists as $crimesList)
                        <div class="border-b border-b-gray-200 h-32 md:h-24">

                            <a href="blog/{{ $crimesList->id }}{{ $crimesList->categories }}">
                                <h2
                                    class="text-[#477baffc] text-xs mb-4 hover:underline uppercase font-sans font-bold text-justify">
                                    {{$crimesList->categories}}
                                </h2>

                                <h4 class="text-[rgba(0,51,102,.99)] font-sans text-sm text-justify font-bold hover:underline">
                                    {{$crimesList->title}}

                                </h4>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>



        </div>
    </div>

</x-guest-layout>
