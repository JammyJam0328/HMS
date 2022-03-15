@props(['header'])
<div>
    <div class="py-6">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <div class="p-3 text-white bg-gray-700 border rounded-lg">
                <h1 class="text-2xl font-semibold ">{{ $header }}</h1>
            </div>
        </div>
        <div class="px-4 mx-auto mt-4 max-w-7xl sm:px-6 md:px-8">
            <div class="relative p-4 bg-white border rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
