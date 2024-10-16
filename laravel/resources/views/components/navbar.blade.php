@props(['drawerId'])

<header class="antialiased">
    <nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-white">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex ">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">@ShoesHUB</span>
                </a>
                <form action="#" method="GET" class="max-w-md mx-auto hidden lg:block lg:pl-2">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative mt-1 lg:w-96 flex flex-col">
                        <input type="search" id="default-search" class="block w-full p-2 ps-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
                        <button type="submit" class="absolute top-0 end-0 p-2 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </form>
                <div class="text-center">
                    <button id="createProductButton" class="bg-indigo-600 text-white hover:bg-red-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800" 
                            type="button"
                            data-drawer-target="{{ $drawerId }}" 
                            data-drawer-show="{{ $drawerId }}" 
                            aria-controls="{{ $drawerId }}">
                        {{ $slot }}
                    </button>
                </div>
            </div>
    </nav>
</header>