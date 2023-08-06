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
                
                <span> <h3>You have comsumed all available short links. please click
                   <u><a style="color:blue;" href="{{route('membership.upgrade')}}">  here </a></u>
                to upgrade your membership.</h3> </span>

            </div>
        </div>
    </div>

</x-app-layout>
