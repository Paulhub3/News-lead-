<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <!-- GRID 1 FOR Tv Post-->
    <div class="container mx-auto px-12 md:px-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 gap-4 md:grid md:grid-cols-2 md:gap-6 lg:grid lg:grid-cols-4 lg:grid-2">


            <a  href="/posts"
                class="flex space-x-12 cursor-pointer bg-white  py-12 px-8 lg:px-6 drop-shadow-lg  shadow-lg rounded border-l-8  border-[#011427f1]">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-12 h-12 stroke-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                    </svg>

                </div>

                <div>
                    <h2 class="text-2xl text-gray-700 font-serif font-medium">Posts</h2>

                    <h2 class="text-2xl text-gray-700 font-serif font-medium text-center">
                        {{ $posts }}
                    </h2>

                </div>
            </a>

            <!-- GRID 2 FOR Tv Videos-->
            <a href="/adverts"
                class="flex space-x-12 cursor-pointer bg-white  py-12 px-8 lg:px-6 drop-shadow-lg  shadow-lg rounded border-l-8  border-[#011427f1]">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-12 h-12 stroke-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                    </svg>

                </div>

                <div>
                    <h2 class="text-2xl text-gray-700 font-serif font-medium">Advert</h2>
                    <h2  class="text-2xl text-gray-700 font-serif font-medium text-center">
                        {{ $adverts }}
                    </h2>
                </div>
            </a>

            <!-- GRID 3 FOR ADVERT-->
            <a href=""
                class="flex space-x-12 animate-pulse cursor-pointer bg-white  py-12 px-8 lg:px-6 drop-shadow-lg  shadow-lg rounded border-l-8  border-[#011427f1]">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-12 h-12 stroke-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>

                </div>

                <div>
                    <h2 class="text-2xl text-gray-700 font-serif font-medium"> New's api</h2>
                </div>
            </a>

            <!-- GRID 4 FOR Tv -->
            <a href="/tvshows"
                class="flex space-x-12 cursor-pointer bg-white  py-12 px-8 lg:px-6 drop-shadow-lg  shadow-lg rounded border-l-8  border-[#011427f1]">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-12 h-12  stroke-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />
                    </svg>


                </div>

                <div>
                    <h2 class="text-2xl text-gray-700 font-serif font-medium">Tv Videos</h2>
                    <h2 class="text-2xl text-gray-700 font-serif font-medium text-center">
                       {{ $tvshows }}
                    </h2>
                </div>
            </a>

        </div>
    </div>



<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <table class="table-auto">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Visitors</th>
                <th>Page Title</th>
                <th>Page Views</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 0;
            @endphp
            @foreach ($analyticsData as $data)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $data['date'] }}</td>
                <td>{{ $data['visitors'] }}</td>
                <td>{{ $data['pageTitle'] }}</td>
                <td>{{ $data['pageViews'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



</x-app-layout>
