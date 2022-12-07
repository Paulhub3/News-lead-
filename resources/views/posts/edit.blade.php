<x-app-layout>

    <div class="container mx-auto px-2 md:px-0 md:flex md:justify-center md:items-center">
        <div class="bg-white mt-12  px-6  md:mt-20 w-full  md:w-8/12 py-12 md:px-6 drop-shadow-md rounded-md">
            <form action="{{ url('update-post/'.$post->id) }}" method="POST">

                @csrf
                @method('PUT')

                <!--- Title Input --->
                <div class="mb-4">
                    <textarea name="title" placeholder="Enter the Title of your post"
                       class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                        cols="20" rows="4"  required autocomplete="title">
                        {{ $post->title }}
                    </textarea>

                    <div>
                        @error('title')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--- description Input --->
                <div class="mb-8">
                    <textarea name="description"  placeholder="Enter the First Paragraph of your post"
                       class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                        cols="20" rows="4"  required autocomplete="description">
                        {{ $post->description }}
                    </textarea>

                    <div>
                        @error('description')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-8 border-2 border-gray-600">
                    <div class="p-3">

                        <!-- Artical 1 -->
                        <textarea name="artical_one" value="{{ old('artical_one') }}" id="" placeholder="Write Post First Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="1o" rows="8" required  autocomplete="artical_one">{{ $post->artical_one }}</textarea>

                        <!-- Artical 2 -->
                        <textarea name="artical_two" value="{{ old('artical_two') }}" id="" placeholder="Write Post Second Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="10" rows="8"  autocomplete="artical_two">{{ $post->artical_two }}</textarea>

                        <!-- Artical 3 -->
                        <textarea name="artical_three" value="{{ old('artical_three') }}" id="" placeholder="Write Post Third Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="10" rows="8"  autocomplete="artical_three">{{ $post->artical_three }}</textarea>


                        <!-- Artical 4 -->
                        <textarea name="artical_four" value="{{ old('artical_four') }}" id=""
                            placeholder="Write Post Fourth Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="10" rows="8" autocomplete="artical_four">{{ $post->artical_four }}</textarea>


                        <!-- Artical 5 -->
                        <textarea name="artical_five" value="{{ old('artical_five') }}" id="" placeholder="Write Post fifth Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="10" rows="8" autocomplete="artical_five">{{ $post->artical_five }}</textarea>

                        <div x-data="{ show: false }">

                            <a @click="show = !show" :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }">
                                <p class="py-2 w-48 px-3 border-2 text-white font-sans bg-sky-800 rounded"
                                    @click="open = true; event.target.style.display='none';" x-text="'Add More Paragraph'">
                                </p>
                            </a>

                            <div x-show="show" class="mt-4 space-y-4 md:space-y-2">
                                <!-- Artical 6 -->
                                <textarea name="artical_six" value="{{ old('artical_six') }}" id=""
                                    placeholder="Write Post on sixth Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_six">{{ $post->artical_six }}</textarea>

                                <!-- Artical 7 -->
                                <textarea name="artical_seven" value="{{ old('artical_seven') }}" id=""
                                    placeholder="Write Post on seventh Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_seven">{{ $post->artical_seven }}</textarea>

                                <!-- Artical 8 -->
                                <textarea name="artical_eight" value="{{ old('artical_eight') }}" id=""
                                    placeholder="Write Post on eight Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_eight">{{ $post->artical_eight }}</textarea>

                                <!-- Artical 9 -->
                                <textarea name="artical_nine" value="{{ old('artical_nine') }}" id=""
                                    placeholder="Write Post on ninth Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_nine">{{ $post->artical_nine }}</textarea>

                                <!-- Artical 10 -->
                                <textarea name="artical_ten" value="{{ old('artical_ten') }}" id=""
                                    placeholder="Write Post on last Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_ten">{{ $post->artical_ten }}</textarea>
                            </div>
                        </div>

                    </div>

                    <div>
                        @error('artical_one')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--- Date input --->
                <div class="mb-4">
                    <input type="date" name="date" id="date"  value="{{ $post->date }}" placeholder="Select Post Date"
                        class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0" required autocomplete="date">

                    <div>
                        @error('date')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--- Category Input Select--->
                <div class="mb-4">

                    <select
                        class="border-2 border-gray-600 py-2 px-6 w-80 md:w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0"
                        name="categories" id="categories" value="{{ $post->categories }}" required autocomplete="categories" >
                       <option value="">Select a Category</option>
                        <option value="Imo Politics">Imo Politics</option>
                        <option value="Foreign news">Foreign news</option>
                        <option value="Politics">Politics</option>
                        <option value="Economy">Economy</option>
                        <option value="News">News</option>
                        <option value="Health">Health</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Sports">Sports</option>
                        <option value="Crime watch">Crime watch</option>
                        <option value="Insecurity">Insecurity</option>
                        <option value="Opinion">Opinion</option>
                    </select>

                    <div>
                        @error('categories')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--- Also Read Input --->
                <div class="mb-4">

                    <input name="read_link" id="read_link" value="{{ $post->read_link }}" placeholder="Enter Also Read Link"
                        class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                         >

                    <div>
                        @error('read_link')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--- Also Read Text Input --->
                <div class="mb-4">

                    <input name="link_text" id="link_text" value="{{ $post->link_text }}" placeholder="Enter Also Read Link Text"
                        class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                         >

                    <div>
                        @error('link_text')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="flex space-x-12 md:flex md:justify-between">

                    <a href="{{ route('posts.post') }}"
                        class="bg-red-700 py-2  px-3 border-2 text-white font-sans rounded hover:bg-red-900">
                        Cancel
                    </a>

                    <button type="submit" class="py-2 px-3 border-2 text-white font-sans bg-sky-800 rounded">
                        Update post
                    </button>
                </div>


            </form>
        </div>
    </div>

</x-app-layout>
