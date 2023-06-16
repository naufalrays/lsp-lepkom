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
                <a href="#" class="text-2xl line-clamp-2 font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}</a>
                <div class="flex items-center">
                    <svg class="h-4 w-4 text-gray-800 mr-2 dark:text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <h1 class="dark:text-gray-300">Rayhan</h1>
                </div>
            </div>
        </div>
        <p class="pt-3 mb-3 font-normal line-clamp-4 text-gray-700 dark:text-gray-400">{{ $data->content }}</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
    @endforeach
    <br>
    {{-- <div class="scale-90 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex">
            <div class="border mr-4 text-center justify-center rounded-lg bg-green-300">
                <div class="pt-2 text-3xl font-bold">22</div>
                <div class="divide-y">
                    <div class="pb-2">Mei</div>
                    <div class="px-3 py-2 font-bold">2023</div>
                </div>
            </div>
            <div class="self-center">
                <a href="#" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">HASIL SELEKSI CALON SATUAN TUGAS PENCEGAHAN DAN PENANGANANKEKERASAN SEKSUAL (CASATGAS PPKS) UNIVERSITAS GUNADARMA TAHAP KEDUA
                </a>
                <div class="flex items-center">
                    <svg class="h-4 w-4 text-gray-800 mr-2 dark:text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <h1 class="dark:text-gray-300">Rayhan</h1>
                </div>
            </div>
        </div>
        <p class="pt-2 mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div> --}}

</x-app-layout>
