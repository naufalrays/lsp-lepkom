<x-admin-layout>
    {{-- Include 'sweetalert::alert' in master layout --}}
    @include('sweetalert::alert')
    <div class="m-5 p-6 bg-white dark:bg-gray-800 overflow-auto rounded-lg shadow">
        <div class="pb-4 bg-white block sm:flex items-center justify-between dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <h1 class="text-xl mb-4 font-semibold text-gray-900 sm:text-2xl dark:text-white">All articles</h1>
                <div class="items-center justify-between block sm:flex dark:divide-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <form class="sm:pr-3" action="#" method="GET">
                            <label for="products-search" class="sr-only">Search</label>
                            <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                                <input type="text" name="email" id="products-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for articles">
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('article.create') }}" id="createProductButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button">
                        Add new article
                    </a>
                </div>
            </div>
        </div>
        <div class="overflow-auto rounded-lg">
            <table class="w-full rounded-lg">
                <thead class="border-b-2 border-gray-100 dark:border-gray-700">
                    <tr class="bg-gray-200 dark:bg-gray-700 dark:text-white">
                        <th class="p-3 w-32 text-left text-sm font-semibold tracking-wide">ARTICLE</th>
                        <th class="p-3 w-32 text-left text-sm font-semibold tracking-wide">CONTENT</th>
                        <th class="p-3 w-24 text-left text-sm font-semibold tracking-wide">ENABLE COMMENTS</th>
                        <th class="p-3 w-24 text-left text-sm font-semibold tracking-wide">IMAGE</th>
                        <th class="p-3 w-24 text-left text-sm font-semibold tracking-wide">ACTION</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    {{-- ArrayList to Array --}}
                    @foreach ($dataArticles as $data )
                    <tr class="even:bg-white odd:bg-slate-50 dark:odd:bg-gray-800 dark:even:bg-gray-700 dark:text-white">
                        <td style="max-width: 15rem;" class=" p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400 truncate">
                            <div class="text-base text-sm text-gray-900 dark:text-white overflow-hidden truncate">{{ $data->title }}</div>
                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $data->user->name }}</div>
                        </td>
                        <td style="min-width: 15rem;" class="p-5 text-left text-sm dark:text-gray-400 overflow-ellipsis">
                            <h1 class="line-clamp-3">{{ $data->content }}</h1>
                        </td>
                        <td class="p-5 text-left text-sm dark:text-gray-400 overflow-ellipsis">
                            <h1 class="line-clamp-3">{{ $data->enable_comments == 1 ? 'true' : 'false' }}</h1>
                        </td>
                        <td class="p-3 text-left text-sm whitespace-nowrap"><img src="{{ url('images/articles/'.$data->image) }}" class="max-h-32 w-48 mb-2 object-cover"></td>
                        <td class="flex p-3 text-left text-sm whitespace-nowrap">
                            <button type="button" onclick="location.href='{{ route('article.edit', $data->id) }}'" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Edit
                            </button>
                            {{-- Form for method delete --}}
                            <form action="{{ route('article.destroy', $data->id)  }}" data-confirm="true" onclick="return confirm('Yakin ingin menghapus data?')" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
