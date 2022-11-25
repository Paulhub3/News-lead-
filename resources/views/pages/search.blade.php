<x-guest-layout>

    <div class="mb-12 mt-0 md:mt-6 bg-gray-50">

        @if($posts->isNotEmpty())
        @foreach ($posts as $post)
        <div class="grid grid-cols-1 gap-4">

            <div class="mx-auto px-4 flex space-x-2 md:space-x-4 text-lg">

                <h3 class="text-[rgba(0,51,102,.99)] font-sans font-medium">{{ $post->categories }}</h3>

                <h1 class="text-gray-800 font-sans font-bold text-xl top-0">.</h1>

                <h3 class="text-gray-800 font-sans font-bold">Published <span class=" font-medium">{{ $post->date }}</span>
                </h3>

            </div>

            <h1 class="text-sm md:text-xl lg:text-3xl text-center font-serif font-bold mb-4 ">{{ $post->title }}</h1>
        </div>


        <div class="lg:w-9/12 flex justify-between px-6">

            <div class="">
                <h3 class="text-gray-800 font-sans font-bold">
                    By <span class=" text-[rgba(0,51,102,.99)]">{{ $post->author }}</span>
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
                        <a href="https://api.whatsapp.com/send?text=https://easternleadexpress.ng/blog" target="_blank">

                            <img src="/icons/icons8-whatsapp.png" class="w-12" alt="icons">

                        </a>

                    </button>

                </div>



            </div>

        </div>



        <!-- LAYOUT SECTION -->
        <div class="w-full flex flex-col  bg-white mt-12 mb-12  px-4 py-4">

            <!-- MAIN CONTENT -->
            <div class="w-fixed w-full lg:w-9/12  border border-gray-200">


                <!-- FIRST DIV SECTION -->
                <div class="">

                    <div class="w-full grid grid-cols-1 gap-32 md:gap-4 mb-12">

                        <div class="h-72 md:h-96">

                            <div>
                                <img src="/uploads/{{$post->image}}"
                                    class="w-full h-96  overflow-hidden bg-no-repeat object-cover" />
                            </div>

                        </div>

                        <div class="px-6 space-y-6">

                            <p class="text-[rgba(0,51,102,.99)] font-sans text-sm md:text-lg font-semibold">
                                {{ $post->description }}
                            </p>

                            <p class="text-gray-800 font-sans text-sm md:text-base md:font-semibold">
                                {{ $post->body }}
                            </p>

                        </div>
                    </div>
                </div>

            </div>



        </div>

    <div>
    @endforeach
    @else
    <div>
        <h2 class="text-2xl font-medium text-gray-700 text-center">No posts found</h2>
    </div>
    @endif

</x-guest-layout>
