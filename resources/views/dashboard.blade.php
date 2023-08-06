<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="{{ route('shortlink.create') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><u>Create New Short Url</u></a>
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><u>Upgrade</u></a>
        </h2>
    </x-slot>

        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>ShortLink Index</h3>
                </div><hr>
                <div class="p-6 ">
                    
                <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-center font-bold">
                            <td class="border px-6 py-4">Short Link</td>
                            <td class="border px-6 py-4">Link</td>
                            <td class="border px-6 py-4">Status</td>
                            <td class="border px-6 py-4">Action</td>
                        </tr>
                    </thead>
                        <tr>
                            <td class="border px-6 py-4">s link</td>
                            <td class="border px-6 py-4">big link </td>
                            <td class="border px-6 py-4">Active</td>
                            <td class="border px-6 py-4">Edit delete</td>
                        </tr>
                    
                </table>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
