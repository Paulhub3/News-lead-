<x-app-layout>
    <div>

        <!-- Post Adverts -->
        <div class="bg-gray-100 w-96 px-4  md:w-8/12 py-12 md:px-6 drop-shadow-md rounded-md md:container mt-6 md:mx-auto">

            <form method="POST" action="{{ route('advert.create-advert') }}" enctype="multipart/form-data">

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

                <div class="mb-4">
                    <div class="w-full p-12 cursor-pointer bg-white border-dotted border-2 border-gray-800">
                        <input type="file" name="Ads" class="cursor-pointer overflow-hidden  absolute" required>

                        <label class="block cursor-pointer ml-52 mt-1">
                            <div>
                                Or image
                            </div>
                        </label>
                    </div>

                    <div>
                        @error('Ads')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">

                    <select
                        class="border-2 border-gray-600 py-2 px-6 w-full  rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-sm focus:ring-0"
                            name="page" required>
                        <option value="">Select a Page</option>
                        <option value="Reading-page">Reading Page</option>
                        <option value="Home-page">Home Page</option>
                    </select>

                    <div>
                        @error('page')
                        <span class="text-red-700 text-lg font-sans">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="flex justify-center">

                    <button  type="submit" class="py-2 w-28 px-3 border-2 text-white font-sans bg-sky-800 rounded">
                        Create Ads
                    </button>

                </div>
            </form>

        </div>

    </div>
</x-app-layout>
