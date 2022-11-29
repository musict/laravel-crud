<x-app-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('companies.store') }}">
            @csrf

            <!-- Company name -->
            <div>
                <x-input-label for="name" :value="__('Company name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Company NIP -->
            <div>
                <x-input-label for="nip" :value="__('Company NIP')" />
                <x-text-input id="nip" class="block mt-1 w-full" type="text" name="nip" required />
                <x-input-error :messages="$errors->get('nip')" class="mt-2" />
            </div>

            <!-- Company address -->
            <div>
                <x-input-label for="address" :value="__('Company address')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" required />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Company city -->
            <div>
                <x-input-label for="city" :value="__('Company city')" />
                <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" required />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>

            <!-- Company postal code -->
            <div>
                <x-input-label for="postal_code" :value="__('Company post code')" />
                <x-text-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" required />
                <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
            </div>

            <div class="div mt-3">
                <button type="submit" class="btn btn-success btn-sm mx-2">Add</button>
                <a href="{{route('companies.index')}}"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>

            </div>

        </form>
    </x-auth-card>
</x-app-layout>
