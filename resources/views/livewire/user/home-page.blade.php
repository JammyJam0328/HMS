<div>
    <div>
        <div id="default-carousel"
            data-carousel="slide"
            class="relative">
            <div class="relative h-56 overflow-hidden sm:h-96">
                <div class="absolute inset-0 transition-all duration-700 ease-in-out transform translate-x-0"
                    data-carousel-item="active">
                    <img src="{{ asset('images/carousel/c-image-1.jpg') }}"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <div class="absolute inset-0 transition-all duration-700 ease-in-out transform translate-x-full"
                    data-carousel-item="">
                    <img src="{{ asset('images/carousel/c-image-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <div class="absolute inset-0 hidden transition-all duration-700 ease-in-out transform"
                    data-carousel-item="">
                    <img src="{{ asset('images/carousel/c-image-3.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>

            </div>
            <div class="absolute flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button"
                    class="w-3 h-3 bg-white rounded-full dark:bg-gray-800"
                    aria-current="true"
                    aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false"
                    aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false"
                    aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>

            </div>

            <button type="button"
                class="absolute top-0 left-0 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
    </div>

    <div class="mx-auto mt-5 max-w-7xl sm:px-6 lg:px-8">
        <div class="py-2">
            <div class="p-2 bg-white border border-gray-300 rounded-md">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        class="w-7 h-7 fill-gray-700">
                        <path fill="none"
                            d="M0 0h24v24H0z" />
                        <path
                            d="M17 19h2v-8h-6v8h2v-6h2v6zM3 19V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v5h2v10h1v2H2v-2h1zm4-8v2h2v-2H7zm0 4v2h2v-2H7zm0-8v2h2V7H7z" />
                    </svg>
                    <h1 class="text-2xl font-semibold text-gray-700">Branches</h1>
                </div>

            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach (\App\Models\Branch::get() as $branch)
                <div class="relative flex justify-center">
                    <div class="max-w-sm bg-white rounded-md shadow-lg">
                        <a href="#!">
                            <img class="rounded-t-lg"
                                src="{{ $branch->cover? $branch->cover: ' https://images.unsplash.com/photo-1517840901100-8179e982acb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80' }}"
                                alt="..." />
                        </a>
                        <div class="px-6 pt-2 pb-6 ">
                            <h5 class="mb-2 font-medium text-gray-900">{{ $branch->name }}</h5>
                            <p class="mb-4 text-sm text-gray-700">
                                {{ $branch->address }}
                            </p>
                        </div>
                        <div class="absolute bottom-0 w-full ">
                            <a href="{{ route('booking', [
                                'branch_id' => $branch->id,
                            ]) }}"
                                type="button"
                                class=" inline-block text-center px-6 py-2.5 w-full bg-gray-700 text-white font-medium text-xs leading-tight uppercase rounded-b-md shadow-md hover:bg-gray-600 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Book
                                Now
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
