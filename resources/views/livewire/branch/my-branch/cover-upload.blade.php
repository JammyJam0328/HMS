<div>
    <div class="space-y-2">
        <label class="block mb-2 text-xl font-medium text-gray-600 "
            for="user_avatar">Upload cover photo</label>
        <input
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="user_avatar_help"
            id="user_avatar"
            type="file">
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300"
            id="user_avatar_help">
            An image that represents your branch and will be displayed to the users.
        </div>

    </div>
    <div class="mt-4">
        <div class="my-2">
            <h1 class="text-xl text-gray-600">Preview</h1>
        </div>
        <div class="">
            <div class="relative max-w-sm bg-white border border-gray-400 rounded-md shadow-lg">
                <a href="#!">
                    <img class="rounded-t-lg"
                        src="{{ auth()->user()->branch->cover? auth()->user()->branch->cover: ' https://images.unsplash.com/photo-1517840901100-8179e982acb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80' }}"
                        alt="..." />
                </a>
                <div class="px-6 pt-2 pb-6 ">
                    <h5 class="mb-2 font-medium text-gray-900">{{ auth()->user()->branch->name }}</h5>
                    <p class="mb-4 text-sm text-gray-700">
                        {{ auth()->user()->branch->address }}
                    </p>
                </div>
                <div class="absolute bottom-0 w-full">
                    <a href="#"
                        type="button"
                        class=" inline-block text-center px-6 py-2.5 w-full bg-gray-700 text-white font-medium text-xs leading-tight uppercase rounded-b-md shadow-md hover:bg-gray-600 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Book
                        Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
