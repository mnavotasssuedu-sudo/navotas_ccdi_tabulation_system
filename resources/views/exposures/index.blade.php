<x-app-layout>

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
           <h1 class="fw-bold text-danger">
    🎯 Exposure Management
</h1>

            <a href="{{ route('exposures.create') }}"
               class="btn btn-success">
                <i class="bi bi-plus-circle"></i>
                Add Exposure
            </a>
        </div>

        <div class="card shadow border-0">

            <div class="card-body">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Exposure Name</th>
                            <th>Order</th>
                            <th>Final Round</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($exposures as $exposure)

                            <tr>
                                <td>{{ $exposure->id }}</td>

                             <td>
                             <strong>{{ $exposure->exposure_name }}</strong>
                                </td>

                                <td>
                                    {{ $exposure->order }}
                                </td>

                                <td>
                                    @if($exposure->is_final)
                                     <span class="badge bg-success">
    🏆 Final Round
</span>
                                    @else
                                       <span class="badge bg-secondary">
    Regular Round
</span>
                                    @endif
                                </td>

                                <td>

                                    <a href="{{ route('exposures.edit', $exposure->id) }}"
                                       class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                        Edit
                                    </a>

                                   <form action="{{ route('exposures.destroy', $exposure->id) }}"
      method="POST"
      class="d-inline">

    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="btn btn-danger btn-sm"
        onclick="return confirm('Are you sure you want to delete this exposure?')">

        <i class="bi bi-trash"></i>
        Delete

    </button>

</form>

                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="text-center">
                                    No exposures found.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-app-layout>