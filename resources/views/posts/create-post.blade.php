<x-app-layout>


    <div class="container mx-auto px-2 md:px-0 md:flex md:justify-center md:items-center">

        <div class="bg-white mt-12  px-6  md:mt-20 w-full  md:w-8/12 py-12 md:px-6 drop-shadow-md rounded-md">

            <form method="POST" action="{{ route('posts.create-post') }}" enctype="multipart/form-data">
                @csrf

                @method('post')

                <!--- Title Input --->
                <div class="mb-4">
                    <textarea name="title" value="{{ old('title') }}" placeholder="Enter the Title of your post"
                        class="border-2 border-gray-600 py-2 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                        cols="20" rows="4" required autofocus autocomplete="title"></textarea>

                    <div>
                        @error('title')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <!--- description Input --->
                <div class="mb-8">
                    <textarea name="description" value="{{ old('description') }}"  id="" placeholder="Enter the description of your post"
                        class="border-2 border-gray-600 py-2 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                        cols="20" rows="4" required autofocus autocomplete="description"></textarea>

                    <div>
                        @error('description')
                            <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="mb-8 border-2 border-gray-600">

                    <div class="space-y-4 md:space-y-2 p-3">

                        <!-- Artical 1 -->
                        <textarea name="artical_one" value="{{ old('artical_one') }}" id="" placeholder="Write Post First on Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="1o" rows="8" required autofocus autocomplete="artical_one"></textarea>

                        <!-- Artical 2 -->
                        <textarea name="artical_two" value="{{ old('artical_two') }}" id="" placeholder="Write Post on Second Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="10" rows="8"  autofocus autocomplete="artical_two"></textarea>

                            <!-- Artical 3 -->
                        <textarea name="artical_three" value="{{ old('artical_three') }}" id="" placeholder="Write Post on Third Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="10" rows="8" autofocus autocomplete="artical_three"></textarea>


                        <!-- Artical 4 -->
                        <textarea name="artical_four" value="{{ old('artical_four') }}" id="" placeholder="Write Post on Fourth Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="10" rows="8" autofocus autocomplete="artical_four"></textarea>


                        <!-- Artical 5 -->
                        <textarea name="artical_five" value="{{ old('artical_five') }}" id="" placeholder="Write Post on fifth Paragraph..."
                            class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                            cols="10" rows="8" autofocus autocomplete="artical_five"></textarea>

                        <div x-data="{ show: false }">

                            <a  @click="show = !show" :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }">
                                <p class="py-2 w-48 px-3 border-2 text-white font-sans bg-sky-800 rounded" @click="open = true; event.target.style.display='none';" x-text="'Add More Paragraph'">
                                </p>
                            </a>

                            <div x-show="show" class="mt-4 space-y-4 md:space-y-2">
                                <!-- Artical 6 -->
                                <textarea name="artical_six" value="{{ old('artical_six') }}" id="" placeholder="Write Post on sixth Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_six"></textarea>

                                <!-- Artical 7 -->
                                <textarea name="artical_seven" value="{{ old('artical_seven') }}" id="" placeholder="Write Post on seventh Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_seven"></textarea>

                                <!-- Artical 8 -->
                                <textarea name="artical_eight" value="{{ old('artical_eight') }}" id="" placeholder="Write Post on eight Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_eight"></textarea>

                                <!-- Artical 9 -->
                                <textarea name="artical_nine" value="{{ old('artical_nine') }}" id="" placeholder="Write Post on ninth Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_nine"></textarea>

                                <!-- Artical 10 -->
                                <textarea name="artical_ten" value="{{ old('artical_ten') }}" id="" placeholder="Write Post on last Paragraph..."
                                    class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                                    cols="10" rows="8" autofocus autocomplete="artical_ten"></textarea>
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
                    <input type="date" name="date"  placeholder="Select Post Date"
                        class="border-2 border-gray-600 py-2 px-6 w-full rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0" required autocomplete="date">

                    <div>
                        @error('date')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--- Category Input Select--->
                <div class="mb-4">

                    <select
                        class="border-2 border-gray-600 py-2 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-sm focus:ring-0"
                        name="categories" required>
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

                <!--- Image Input --->
                <div class="mb-4">
                    <div class="w-full  p-12 cursor-pointer space-y-6 bg-white border-dotted border-2 border-gray-800">
                        <input type="file" name="image" id="image" accept="image/*" class="cursor-pointer overflow-hidden  absolute"
                            required>

                        <label class="block cursor-pointer ml-28 md:ml-52 mt-1">
                            <div>
                                Or image
                            </div>
                        </label>
                    </div>

                    <div>
                        @error('image')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--- Also Read Input --->
                <div class="mb-4">

                    <input name="read_link" value="{{ old('read_link') }}" placeholder="Enter Also Read Link" class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                     autofocus autocomplete="read_link">

                    <div>
                        @error('read_link')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--- Also Read Text Input --->
                <div class="mb-4">

                    <input name="link_text" value="{{ old('link_text') }}" placeholder="Enter Also Read  Text"
                        class="border-2 border-gray-600 py-3 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                         autofocus autocomplete="link_text">

                    <div>
                        @error('link_text')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="flex justify-center">

                    <button type="submit" class="py-2 w-28 px-3 border-2 text-white font-sans bg-sky-800 rounded">
                        create post
                    </button>

                </div>

            </form>

        </div>
    </div>

</x-app-layout>
