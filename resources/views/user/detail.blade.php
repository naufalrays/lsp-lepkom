<x-app-layout>
    @include('sweetalert::alert')
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
        <img style="max-height: 30em;" class="pt-6 w-full mb-2 object-cover" src="{{ url('images/articles/'.$data->image) }}">
        <p class="pt-3 mb-3 whitespace-pre-line font-normal text-gray-700 dark:text-gray-400">{{ $data->content }}</p>
    </div>

    <div class="m-8 p-6 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <h5 class="mb-6 text-xl font-bold leading-none text-gray-900 dark:text-white">Create Comment : </h5>
            <form action="{{ route('comment.storeUser') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Name..." required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Email..." required>
                </div>
                <div class="mb-6">
                    <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                    <textarea id="comment" name="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Comment..." required></textarea>
                </div>
                <input type="hidden" name="article_id" value="{{ $data->id }}" />
                <button type="submit" onclick="#" class="mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Create
                </button>
            </form>
        </div>

        <h5 class="mb-4 text-xl font-bold leading-none text-gray-900 dark:text-white">Comments : </h5>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($dataComment as $data)
                <li class="py-3 sm:py-4">
                    <div class="flex  space-x-4">
                        <div class="flex-shrink-0 items-stretch">
                            <img class="w-8 h-8 rounded-full self-start" src="{{ url('images/person.png') }}" alt="Neil image">
                        </div>
                        <div class="min-w-0">
                            <div class="flex">
                                <p class="text-sm mr-4 font-bold text-gray-900 truncate dark:text-white">
                                    {{ $data->name }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    {{ $data->created_at->format('M d, Y H:i')  }}
                                </p>
                            </div>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{ $data->email }}
                            </p>
                            <p class="pt-4 text-sm text-gray-500 truncate dark:text-gray-400 whitespace-normal">
                                {{ $data->content }}
                            </p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</x-app-layout>
