<div>
    <form>
        @csrf
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Create Room Information</h3>
                </div>
                <div class="grid grid-cols-1 mt-3 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="type"
                            class="block text-sm font-medium text-gray-700"> Room Type </label>
                        <div class="mt-1">
                            <select id="type"
                                wire:model.defer="type"
                                name="type"
                                autocomplete="type-name"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Select Room Type</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="no_of_units"
                            class="block text-sm font-medium text-gray-700">Number of Units</label>
                        <div class="mt-1">
                            <input type="number"
                                wire:model.defer="number_of_units"
                                name="no_of_units"
                                id="no_of_units"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="e.g 200">
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="desc"
                            class="block text-sm font-medium text-gray-700"> Description </label>
                        <div class="mt-1">
                            <textarea id="desc"
                                wire:model.defer="description"
                                name="desc"
                                rows="3"
                                class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            A description of the rooms.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button wire:click="show"
                    type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                <button wire:click.prevent="createRoom"
                    type="button"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Save</button>
            </div>
        </div>
    </form>

</div>
