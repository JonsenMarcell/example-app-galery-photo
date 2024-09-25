<x-app-layout>
    <title> {{$pageTitle }} | {{ config('app.name', 'Laravel') }} </title>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gry-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="{{ route('admin-create-galeri-photo') }}">
                            Tambah Galeri Photo
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

