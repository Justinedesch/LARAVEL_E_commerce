<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-row justify-around">
                    <div class="m-2">
                        {{ __("Gestion des adresses utilisateurs.") }}
                    </div>
                    <div>
                        <a href="{{ route('addresses.create') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <button class="m-2 block text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
                                <i class="fa-solid fa-plus"></i> Ajouter une adresse
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="container mx-auto">
            <h2 class="text-xl font-semibold m-4"> Liste des adresses </h2>

            @include('includes._backoffice._message_flash')

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                @include('includes._backoffice._addresses._table_addresses')
            </div>
        </div>
    </div>
</x-app-layout>
