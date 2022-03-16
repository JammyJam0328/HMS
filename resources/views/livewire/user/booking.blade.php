<div>
    <div class="mx-auto mt-5 bg-white border border-gray-300 rounded-md max-w-7xl ">
        <div class="bg-blue-300 rounded-md h-64 lg:h-96 relative">
            <img src="{{asset('images/carousel/c-image-1.jpg')}}" class="absolute top-0 h-full rounded-md w-full object-cover" alt="">
        </div>
        <div class="bg-white rounded-b-md p-2">
            <h1 class="text-3xl font-extrabold uppercase">D'Morvie Suites</h1>
            <h1 class="text-sm">Lapasan, Cagayan de Oro City</h1>
            <h1 class="mt-3 text-gray-600 text-sm">Fully Air Conditioned Rooms with Own CR, 40" Flat Screen Television, Free 24 Hours WiFi Access, with Parking Area, NetFlix and Youtube.</h1>
        </div>
    </div>
    <div class="mt-10 mx-auto p-4  bg-white border border-gray-300 rounded-md max-w-7xl ">
        <h1 class="font-bold">GUEST TO CHECK-IN</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 mt-3 gap-5">
            <div class="flex items-center mb-4">
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
                <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Check this box if the Guest is not you. </label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="email" name="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Complete Name of Guest</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="email" name="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contact Number</label>
            </div>
        </div>
    </div>
    <div class="mt-6 mx-auto p-4  bg-white border border-gray-300 rounded-md max-w-7xl ">
        <h1 class="font-bold">DATE & TIME OF CHECKIN</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 mt-5 gap-5">
            <div class="relative z-0 mb-6 w-full group">
                <input type="date" name="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="time" name="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Time</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>12 Hours</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                  </select>
                <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hours of Stay</label>
            </div>
        </div>
    </div>
</div>
