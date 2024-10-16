@props(['products'])

<section class="py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $item)
                    <div class="hover:bg-orange-200 rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="h-56 w-full">
                            <div class="flex items-center justify-between gap-4">
                                <a href="#" class="text-lg font-bold leading-tight text-gray-900 hover:underline dark:text-white">
                                    {{ $item->brand->brand_name }}
                                </a>
                                <p class="text-sm font-medium {{ $item->stock_quantity <= 20 ? 'text-red-500' : 'text-gray-600' }}">
                                    Stock: {{ $item->stock_quantity }}
                                </p>
                            </div>
                            
                            <a href="#">
                                <img class="mx-auto h-full dark:hidden"  src="https://i.ibb.co.com/S5bHHhH/shoespng-parspng-com.png" alt="{{ $item->product_name }}"/>
                            </a>
                        </div>
                        <div class="pt-6">
                            
                           <div class="mt-4 flex items-center justify-between gap-4">
                            <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white"> {{ ucfirst($item->product_name)}}</a>
                            <span class="ml-auto bg-{{ $item->category->color }}-100 hover:underline text-orange-500 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                #{{ $item->category->category_name }}
                            </span>
                           </div>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">${{ $item->price }}</p>
                                <button type="button" class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium hover:bg-green-300 focus:outline-none focus:ring-4 bg-green-400">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                      </svg>
                                    Edit this item
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>