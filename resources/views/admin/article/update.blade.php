<x-app-layout>
    <div class="py-24">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold pb-5">Create a new article</h1>
                    <form action="{{ route('article.update', $articleData->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write the title of the article here..." value="{{ $articleData->title }}">
                        </div>
                        <div class="mb-5">
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                            <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write the content of the article here...">{{ $articleData->content }}</textarea>
                        </div>
                        <div class=" mb-2">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{ __("Gambar") }} </label>
                            <label for="image" class="sr-only">Choose file</label>
                            <img src="{{ url('images/articles/'.$articleData->image) }}" id="img-view" style="" class="max-h-64 w-96 mb-2 object-cover">
                            <input type="file" accept=".jpg, .jpeg, .png" name="image" id="image" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-3 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-400" value="{{ url('images/articles/'.$articleData->image) }}">
                        </div>
                        {{-- Radio Button --}}
                        <div class="mt-5">
                            <label for="enable_comments" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Enable the comment feature</label>
                            <div class="flex items-center mb-4">
                                <input {{ $articleData->enable_comments == 1 ? 'checked' : '' }} id="enable_comments-radio-1" type="radio" value="true" name="enable_comments" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="enable_comments-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enable</label>
                            </div>
                            <div class="flex items-center">
                                <input {{ $articleData->enable_comments == 0 ? 'checked' : '' }} id="enable_comments-radio-2" type="radio" value="false" name="enable_comments" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="enable_comments-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Disable</label>
                            </div>
                        </div>
                        <button type="submit" onclick="#" class="my-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="{{ url('js/img_preview.js') }}"></script>
</x-app-layout>
