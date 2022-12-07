<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Workers') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">
        <a href="{{ route('workers.create') }}">
            <button class="btn btn-success btn-sm" >Add worker</button>
        </a>
        <table class="table table-striped table-hover mt-3">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Company</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($workers as $worker)
                    <tr>
                        <td>{{ $worker->name }}</td>
                        <td>{{ $worker->surname }}</td>
                        <td>{{ $worker->email }}</td>
                        <td>{{ $worker->phone_number }}</td>
                        <td>{{ $worker->company->name }}</td>
                        <td>
                            <a href="{{route('workers.edit', $worker->id)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                            <a href="{{route('workers.destroy', $worker->id)}}"><button class="btn btn-danger btn-sm" data-id="{{ $worker->id }}">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $workers->links() }}
    </div>

</x-app-layout>



