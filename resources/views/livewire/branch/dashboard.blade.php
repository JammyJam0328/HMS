<x-b.page-layout header="Dashboard">
    <div>
        <h2 class="text-lg font-medium leading-6 text-gray-900">Overview</h2>
        <div class="grid grid-cols-1 gap-5 mt-2 sm:grid-cols-2 lg:grid-cols-4">
            <div class="overflow-hidden bg-white border rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                class="w-8 h-8">
                                <path fill="none"
                                    d="M0 0h24v24H0z" />
                                <path class="fill-gray-700"
                                    d="M22 11v9h-2v-3H4v3H2V4h2v10h8V7h6a4 4 0 0 1 4 4zM8 13a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <div class="flex-1 w-0 ml-5">
                            <dl>
                                <dt class="font-medium text-gray-500 truncate ">Available Room</dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        {{ \App\Models\Room::where('branch_id', auth()->user()->branch_id)->sum('number_of_units') }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>

            </div>

            <!-- More items... -->
        </div>
    </div>

</x-b.page-layout>
