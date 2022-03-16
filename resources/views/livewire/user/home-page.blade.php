<div>
    <div>
        <div id="default-carousel" data-carousel="slide" class="relative">
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
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="absolute inset-0 hidden transition-all duration-700 ease-in-out transform"
                    data-carousel-item="">
                    <img src="{{ asset('images/carousel/c-image-3.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

            </div>
            <div class="absolute flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 bg-white rounded-full dark:bg-gray-800" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>

            </div>

            <button type="button"
                class="absolute top-0 left-0 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-7 h-7 fill-gray-700">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M17 19h2v-8h-6v8h2v-6h2v6zM3 19V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v5h2v10h1v2H2v-2h1zm4-8v2h2v-2H7zm0 4v2h2v-2H7zm0-8v2h2V7H7z" />
                    </svg>
                    <h1 class="text-2xl font-semibold text-gray-700">Branches</h1>
                </div>

            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-4 lg:mx-0">
            @foreach (\App\Models\Branch::get() as $branch)
                {{-- <div class="relative flex justify-center">
                    <div class="max-w-sm bg-white rounded-md shadow-lg">
                        <a href="#!">
                            <img class="rounded-t-lg lg:h-80"
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
                </div> --}}
                <div class="relative flex justify-center">
                    <div class="max-w-sm relative bg-white bg-opacity-80 p-3 px-4 rounded-xl shadow-xl">
                        <img class="rounded-xl lg:h-64 shadow-xl"
                            src="{{ $branch->cover? $branch->cover: ' https://images.unsplash.com/photo-1517840901100-8179e982acb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80' }}"
                            alt="..." />
                        <div class="mt-2 mb-10">
                            <h1 class="font-bold text-gray-800">{{ $branch->name }}</h1>
                            <p class="text-xs text-gray-600"> {{ $branch->address }}</p>
                        </div>
                        <div class="mt-5 absolute bottom-3">
                           <a href="{{ route('booking', [
                            'branch_id' => $branch->id,
                        ]) }}" class="bg-gray-700 px-4 py-1 text-white rounded-xl shadow-md uppercase font-bold">book now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <!-- Logo Cloud -->


    <!-- Alternating Feature Sections -->

    {{-- <div class="">
        <div class="max-w-7xl mx-auto px-4 py-5 sm:px-6 lg:py-5 lg:px-8">
            <div
                class="py-10 px-6 bg-gradient-to-l from-gray-300 to-gray-500 opacity-80 rounded-3xl sm:py-16 sm:px-12 lg:p-20 lg:flex lg:items-center">
                <div class="lg:w-0 lg:flex-1">
                    <h2 class="text-3xl font-extrabold tracking-tight text-white">Sign up for our newsletter</h2>
                    <p class="mt-4 max-w-3xl text-lg text-indigo-100">Anim aute id magna aliqua ad ad non deserunt sunt.
                        Qui irure qui Lorem cupidatat commodo. Elit sunt amet fugiat.</p>
                </div>
                <div class="mt-12 sm:w-full sm:max-w-md lg:mt-0 lg:ml-8 lg:flex-1">
                    <form class="sm:flex">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email-address" type="email" autocomplete="email" required
                            class="w-full border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white rounded-md"
                            placeholder="Enter your email">
                        <button type="submit"
                            class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">Notify
                            me</button>
                    </form>
                    <p class="mt-3 text-sm text-indigo-100">
                        We care about the protection of your data. Read our
                        <a href="#" class="text-white font-medium underline"> Privacy Policy. </a>
                    </p>
                </div>
            </div>
        </div>
    </div>




    <!-- CTA Section -->
    <div class="bg-white bg-opacity-80 border-t-2">
        <div
            class="max-w-4xl mx-auto py-16 px-4 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Ready to get started?</span>
                <span
                    class="-mb-1 pb-1 block bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Get
                    in touch or create an account.</span>
            </h2>
            <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-5">
                <a href="#"
                    class="flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-purple-700 hover:to-indigo-700">
                    Learn more </a>
                <a href="#"
                    class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-800 bg-indigo-50 hover:bg-indigo-100">
                    Get started </a>
            </div>
        </div>
    </div> --}}
</div>
