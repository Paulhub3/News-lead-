<x-app-layout>


    <div class="container mx-auto px-2 md:px-0 md:flex md:justify-center md:items-center">

        <div class="bg-white mt-12  px-6  md:mt-20 w-full  md:w-8/12 py-12 md:px-6 drop-shadow-md rounded-md">

            <form method="POST" action="{{ route('posts.create-post') }}" enctype="multipart/form-data">
                @csrf

                @method('post')
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

                <div class="mb-8">
                    <textarea name="description" value="{{ old('description') }}"  id="" placeholder="Enter the First Paragraph of your post"
                        class="border-2 border-gray-600 py-2 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                        cols="20" rows="4" required autofocus autocomplete="description"></textarea>

                    <div>
                        @error('description')
                            <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="mb-8">
                    <textarea name="body" value="{{ old('body') }}" id="" placeholder="Write message..."
                        class="border-2 border-gray-600 py-2 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0"
                        cols="20" rows="8" required autofocus autocomplete="body"></textarea>

                    <div>
                        @error('body')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <input type="date" name="date"  placeholder="Select Post Date"
                        class="border-2 border-gray-600 py-2 px-6 w-full rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500  sm:text-sm focus:ring-0" required autocomplete="date">

                    <div>
                        @error('date')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">

                    <select
                        class="border-2 border-gray-600 py-2 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-sm focus:ring-0"
                        name="categories" required>
                        <option value="">Select a Category</option>
                        <option value="Imo Politics">Imo Politics</option>
                        <option value="Foreign news">Foreign news</option>
                        <option value="Politics">Politics</option>
                        <option value="Economy">Economy</option>
                        <option value="War">War</option>
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

                <div class="mb-4">
                    <div class="w-80 md:w-full p-12 cursor-pointer bg-white border-dotted border-2 border-gray-800">
                        <input type="file"  name="image" id="image" accept="image/*" class="cursor-pointer overflow-hidden  absolute" required>

                        <label class="block cursor-pointer ml-52 mt-1">
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



                <div class="flex justify-center">

                    <button type="submit" class="py-2 w-28 px-3 border-2 text-white font-sans bg-sky-800 rounded">
                        create post
                    </button>

                </div>

            </form>

        </div>
    </div>
</x-app-layout>
