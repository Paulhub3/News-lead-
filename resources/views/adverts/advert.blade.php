<x-app-layout>

    <div>

        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
            class="relative z-0 grid justify-items-center   mt-14">
            @if (session()->has('status'))
            <div
                class="bg-green-600 text-white text-center drop-shadow-lg shadow-lg font-sans absolute -z-10  py-3 px-6 w-80">
                {{ session('status') }}
            </div>
            @endif

        </div>

        <div class="bg-white mt-6 px-4 md:px-6 lg:px-12 py-12">

            <button
                class="px-3 text-center md:px-6 py-2 font-semibold mb-4 text-white bg-sky-600 border-b-4 border-gray-800 rounded hover:border-gray-600">

                <a href="advert">
                    Create New Ad
                </a>

            </button>

            <!-- DISPLAYING POST TABLE -->
            <div class="mt-6">
                <div class="">
                    <h1 class="text-2xl text-gray-700 mb-4 font-serif font-medium">Showing All Post Table</h1>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created at
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    page
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    x
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($adverts) > 0)
                            @foreach ($adverts as $advert)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{$advert->id}}
                                </th>

                                <td class="px-6 py-4">
                                    {{$advert->title}}

                                </td>


                                <td class="px-6 py-4">
                                    {{$advert->created_at}}
                                </td>


                                <td class="px-6 py-4">
                                    {{$advert->Ads}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$advert->page}}
                                </td>

                                <td class="px-6 py-4">
                                    <a href="delete/{{ $advert->id }}"
                                        class="font-medium py-2 px-3 rounded-md bg-red-800 text-gray-300 font-sans text-lg no-underline">
                                        Delete
                                    </a>
                                </td>


                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="3" class="text-center">No data found</th>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
