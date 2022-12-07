<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">
        <a href="{{ route('companies.create') }}">
            <button class="btn btn-success btn-sm" >Add company</button>
        </a>
        <table class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">NIP</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Postal code</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->nip }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->city }}</td>
                        <td>{{ $company->postal_code }}</td>
                        <td>
                            <a href="{{route('companies.edit', $company->id)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                            <a href="{{route('companies.destroy', $company->id)}}"><button class="btn btn-danger btn-sm" data-id="{{ $company->id }}">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $companies->links() }}
    </div>

</x-app-layout>



