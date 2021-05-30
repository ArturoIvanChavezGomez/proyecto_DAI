<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-t from-red-500 to-blue-300">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white bg-opacity-50 border-gray-900 shadow-2xl overflow-hidden sm:rounded-lg mb-10">
        {{ $slot }}
    </div>
</div>
