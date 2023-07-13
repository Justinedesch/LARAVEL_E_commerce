<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Création d'un nouveau produit.") }}
                </div>
            </div>
        </div>
    </div>

    @include('includes._backoffice._display_errors_form')

    <div class="py-12">
        @include('includes._backoffice._products._form_create_product')
    </div>
</x-app-layout>
