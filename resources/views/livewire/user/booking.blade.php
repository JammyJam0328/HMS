<div>
    <div class="mx-4 lg:mx-auto mt-5 bg-white bg-opacity-80 border-2 p-4 border-gray-300 rounded-xl max-w-7xl ">
        <div class="bg-blue-300 rounded-md h-64 lg:h-96 relative">
            <img src="{{ $this->branch->cover? $this->branch->cover: ' https://images.unsplash.com/photo-1517840901100-8179e982acb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80' }}"
                class="absolute top-0 h-full rounded-md w-full object-cover" alt="">
        </div>
        <div class="bg-white shadow rounded-b-xl p-2">
            <h1 class="text-3xl font-extrabold uppercase">{{$this->branch->name}}</h1>
            <h1 class="text-sm">{{$this->branch->address}}</h1>
            <h1 class="mt-3 text-gray-600 text-sm">Fully Air Conditioned Rooms with Own CR, 40" Flat Screen Television,
                Free 24 Hours WiFi Access, with Parking Area, NetFlix and Youtube.</h1>
        </div>
    </div>

    <div class="mt-5 mx-auto p-2 px-4  bg-white border border-gray-300  max-w-7xl ">
        <div class="flex overflow-x-auto space-x-4 w-full">
           @foreach ($this->branch->rooms as $room)
           <li class="col-span-1 h-40  flex text-center bg-white border rounded-lg shadow ">
            <div class="bg-gray-600 rounded-l-xl w-24 relative">
                <img src="{{ asset('images/roombg.png') }}"
                    class="h-full rounded-l-xl opacity-50 w-full object-cover" alt="">
            </div>
            <div class="bg-white w-56 flex relative flex-col items-start px-1 rounded-r-xl">
                <h1 class="font-bold mt-7">{{$room->name}}</h1>
                <span class="text-xs">This is lorem ipsum</span>

                <div class="absolute bottom-2 right-2">
                    <button class="bg-gray-700 px-2 py-1 rounded-xl uppercase text-white font-bold">get
                        room</button>
                </div>
            </div>
        </li>
           @endforeach
            
        </div>
    </div>

    {{-- <div class="mt-6 mx-auto p-4  bg-white border border-gray-300 rounded-md max-w-7xl ">
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
    </div> --}}
</div>
