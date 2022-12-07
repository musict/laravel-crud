<x-app-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('workers.store') }}">
            @csrf

            <!-- Worker name -->
            <div>
                <x-input-label for="name" :value="__('Worker name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Worker surname -->
            <div>
                <x-input-label for="surname" :value="__('Worker surname')" />
                <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" required />
                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
            </div>

            <!-- Worker email -->
            <div>
                <x-input-label for="email" :value="__('Worker email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Worker phone number -->
            <div>
                <x-input-label for="phone_number" :value="__('Worker phone number')" />
                <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" />
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
            </div>

            <!-- Worker company -->
            <div>
                <label for="company_id">Company name</label>
                <select class="form-select" name="company_id" id="company_id" class="mt-2">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="div mt-3">
                <button type="submit" class="btn btn-success btn-sm mx-2">Add</button>
                <a href="{{route('workers.index')}}"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>

            </div>

        </form>
    </x-auth-card>
</x-app-layout>
