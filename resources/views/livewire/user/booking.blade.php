<div>
    <div class="mx-4 lg:mx-auto mt-5 bg-white bg-opacity-80 border-2 p-4 border-gray-300 rounded-xl max-w-7xl ">
        <div class="bg-blue-300 rounded-md h-64 lg:h-96 relative">
            <img src="{{ $this->branch->cover? $this->branch->cover: ' https://images.unsplash.com/photo-1517840901100-8179e982acb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80' }}"
                class="absolute top-0 h-full rounded-md w-full object-cover" alt="">
        </div>
        <div class="bg-white shadow rounded-b-xl p-2">
            <h1 class="text-3xl font-extrabold font-poppins uppercase">{{$this->branch->name}}</h1>
            <h1 class="text-sm">{{$this->branch->address}}</h1>
            <h1 class="mt-3 text-gray-600 text-sm">Fully Air Conditioned Rooms with Own CR, 40" Flat Screen Television,
                Free 24 Hours WiFi Access, with Parking Area, NetFlix and Youtube.</h1>
        </div>
    </div>

    <div class="mt-5 mx-auto p-2 px-4  bg-white bg-opacity-80 border-2 lg:rounded-xl border-gray-300  max-w-7xl ">
        <div class="flex overflow-x-auto space-x-4 w-full">
           @foreach ($this->branch->rooms as $room)
           <li class="col-span-1 h-40  flex text-center bg-white border rounded-xl shadow ">
            <div class="bg-gray-600 rounded-l-xl w-24 relative">
                <img src="{{ asset('images/roombg.png') }}"
                    class="h-full rounded-l-xl opacity-50 w-full object-cover" alt="">
            </div>
            <div class="bg-white w-56 flex relative flex-col items-start px-2 rounded-r-xl">
                <h1 class="font-bold mt-7 text-gray-800 uppercase">{{$room->type->description}} BED SIZED</h1>
                <span class="text-xs text-gray-600">{{$room->description}}</span>

                <div class="absolute bottom-2 right-2">
                    <button class="bg-gray-700 px-2 py-1 rounded-xl uppercase text-white font-bold">get
                        room</button>
                </div>
            </div>
        </li>
           @endforeach
            
        </div>
    </div>

    <div class="mt-6 mx-auto p-4  bg-white border-2 border-gray-300 lg:rounded-xl max-w-7xl ">
        <h1 class="font-bold text-xl text-gray-800">BOOKED INFORMATION</h1>

        <div class="mt-3 grid grid-cols-1 lg:grid-cols-4 gap-3">
            <div class="bg-gradient-to-tr from-gray-500 to-gray-200  rounded-xl p-1">
                <div class="bg-white rounded-xl relative p-2">
                   <div class="flex items-center space-x-2">
                    <div class="text-sm text-gray-700">ROOM:</div>
                    <h1 class="uppercase font-bold text-gray-800">Singler size bed</h1>
                   </div>
                <div>
                    <label for="location" class="block text-sm font-medium uppercase text-gray-700">Price</label>
                    <select id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                      <option>United States</option>
                      <option selected>Canada</option>
                      <option>Mexico</option>
                    </select>
                  </div>
                  <div class="absolute top-1 right-1">
                      <button class="p-0.5 shadow rounded-full bg-red-200 text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg></button>
                  </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="mt-6 mx-auto p-4  bg-white border-2 border-gray-300 lg:rounded-xl max-w-7xl ">
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
          
        </div>
    </div>
</div>
