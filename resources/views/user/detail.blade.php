<x-app-layout>
    <div class="m-8 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                <h1 href="#" class="text-2xl line-clamp-2 font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}</h1>
                <div class="flex items-center">
                    <svg class="h-4 w-4 text-gray-800 mr-2 dark:text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <h1 class="dark:text-gray-300">{{ $data->user->name }}</h1>
                </div>
            </div>
        </div>
        <img class="pt-6 h-auto w-full mb-2 object-cover" src="{{ url('images/articles/'.$data->image) }}">
        <p class="pt-3 mb-3 font-normal line-clamp-4 text-gray-700 dark:text-gray-400">{{ $data->content }}</p>
    </div>
</x-app-layout>
