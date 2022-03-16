<div class="space-y-4">
    <div>
        <h1 class="text-lg text-gray-600">Create new pricing</h1>
    </div>
    <form class="space-y-4">
        @csrf
        <div>
            <label for="hours"
                class="block text-sm font-medium text-gray-700">Hours</label>
            <div class="flex items-center mt-1 space-x-2">
                <input type="number"
                    wire:model.defer="hours"
                    name="hours"
                    id="hours"
                    class="block border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="e.g 12">
                <span class="font-bold">Hrs</span>
            </div>
            @error('hours')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="price"
                class="block text-sm font-medium text-gray-700">Price</label>
            <div class="flex items-center mt-1 space-x-2">
                <input type="number"
                    wire:model.defer="price"
                    name="price"
                    id="price"
                    class="block border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="e.g 100">
                <span class="font-bold">PHP</span>
            </div>
            @error('price')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="pt-5">
            <div class="flex justify-end">
                <button wire:click="show"
                    type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                <button wire:click.prevent="createPricing"
                    type="button"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Save</button>
            </div>
        </div>
    </form>
</div>
