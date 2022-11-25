<x-app-layout>

    <div>

        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
            class="relative z-0 grid justify-items-center   mt-14">
            @if (session()->has('status'))
            <div class="bg-green-600 text-white text-center drop-shadow-lg shadow-lg font-sans absolute -z-10  py-3 px-6 w-80">
                {{ session('status') }}
            </div>
            @endif

            @if (session()->has('message'))
            <div class="bg-sky-600 text-white text-center drop-shadow-lg shadow-lg font-sans absolute -z-10  py-3 px-6 w-80">
                {{ session('message') }}
            </div>
            @endif


            @if (session()->has('delete'))
            <div class="bg-red-700 text-white text-center drop-shadow-lg shadow-lg font-sans absolute -z-10  py-3 px-6 w-80">
                {{ session('delete') }}
            </div>
            @endif
        </div>

        <div class="bg-white mt-6 px-4 md:px-6 lg:px-12 py-12">

            <button
                class="px-3 text-center md:px-6 py-2 font-semibold mb-4 text-white bg-sky-500 border-b-4 border-gray-800 rounded hover:border-gray-600">

                <a href="/show-post">
                    Create Post
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
                                    Categories
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Author
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Image
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    >
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    x
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($posts) > 0)
                            @foreach ($posts as $post)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{$post->id}}
                                </th>

                                <td class="px-6 py-4">
                                    {{$post->title}}

                                </td>

                                <td class="px-6 py-4">

                                    {{$post->categories}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$post->author}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$post->created_at}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$post->date}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$post->description}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$post->image}}
                                </td>

                                <td class="px-6 py-4">
                                    <a href="edit-post/{{ $post->id }}" class="px-4 py-2 text-white bg-sky-700 rounded">Edit</a>
                                </td>

                                <td class="px-6 py-4">
                                    <form action="{{ route('post.destroy',$post->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('are You Sure ? ') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="px-4 py-2 text-white bg-red-700 rounded" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <th colspan="3" class="">
                                      <h1 class="text-center text-4xl font-medium">
                                            No data found
                                      </h1>
                                    </th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
