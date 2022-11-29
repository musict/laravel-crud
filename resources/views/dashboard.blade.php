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
                    Celem aplikacji jest umożliwienie przesłania przez użytkownika informacji odnośnie <br><br>
                    firmy(nazwa, NIP, adres, miasto, kod pocztowy) <br>
                    oraz jej pracowników(imię, nazwisko, email, numer telefonu(opcjonalne)) <br>
                    <br><br>
                    Wszystkie pola są obowiązkowe poza tym które jest oznaczone jako opcjonalne. <br>
                    Uzupełnij endpointy do pełnego CRUDa dla powyższych dwóch. <br>
                    Zapisz dane w bazie danych.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
