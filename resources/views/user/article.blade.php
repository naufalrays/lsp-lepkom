<x-app-layout>
    <img class="w-full h-auto" src="images/school_header_2.jpg" alt="">
    <h1 class="px-6 pt-6 text-2xl font-bold dark:text-white">List Articles :</h1>
    {{-- Article Card --}}
    <div class="bg-red"></div>
    @foreach ($dataArticles as $data)
    <div class="m-6 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex">
            <div class="mr-4 text-center justify-center rounded-lg bg-green-300 dark:bg-green-500">
                <div class="divide-y">
                    <div class="p-2 text-3xl flex font-bold">
                        <div class="text-3xl font-bold dark:text-white">{{ $data->created_at->format('d')}}</div>
                        <div class="self-center dark:text-white text-sm">{{ $data->created_at->format('M')}}</div>
                    </div>
                    <div class="px-3 py-2 text-xl font-bold dark:text-white">{{ $data->created_at->format('Y')}}</div>
                </div>
            </div>
            <div class="self-center">
                <a href="{{ route('article.show', $data->id) }}" class="text-2xl line-clamp-2 font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}</a>
                <div class="flex items-center">
                    <svg class="h-4 w-4 text-gray-800 mr-2 dark:text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <h1 class="dark:text-gray-300">{{ $data->user->name }}</h1>
                </div>
            </div>
        </div>
        <p class="pt-3 mb-3 font-normal line-clamp-4 text-gray-700 dark:text-gray-400">{{ $data->content }}</p>
        <div class="flex justify-between">
            <a href="{{ route('user.show', $data->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <div class="dark:text-white flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                </svg>
                <h1 class="pl-2">{{ App\Models\Comment::where('article_id', $data->id)->count() }}</h1>
            </div>
        </div>

    </div>
    @endforeach
    <br>
</x-app-layout>
