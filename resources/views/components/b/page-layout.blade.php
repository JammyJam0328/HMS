@props(['header'])
<div>
    <div class="py-6">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">{{ $header }}</h1>
        </div>
        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <div class="py-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
