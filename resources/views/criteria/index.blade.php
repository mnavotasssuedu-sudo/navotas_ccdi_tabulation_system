<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            📋 Manage Criteria
        </h2>
    </x-slot>

    @if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif


@if(session('error'))

<div class="alert alert-danger">
    {{ session('error') }}
</div>

@endif

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <a href="{{ route('criteria.create') }}" 
                       class="btn btn-success mb-3">
                        + Add Criteria
                    </a>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                              <th>Criteria Name</th>
                                <th>Percentage</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($criteria as $item)
                            <tr>
    <td>{{ $item->name }}</td>

    <td>
        {{ $item->percentage }}%
    </td>

    <td>

        <a href="{{ route('criteria.edit', $item->id) }}"
           class="btn btn-warning btn-sm">
            Edit
        </a>


        <form action="{{ route('criteria.destroy', $item->id) }}"
              method="POST"
              style="display:inline;">

            @csrf
            @method('DELETE')

            <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Delete this criteria?')">
                Delete
            </button>

        </form>

    </td>
</tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-3">
    <strong>
        Total Percentage:
        {{ $criteria->sum('percentage') }}%
    </strong>
</div>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>