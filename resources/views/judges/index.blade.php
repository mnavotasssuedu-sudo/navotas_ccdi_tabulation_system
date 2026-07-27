<x-app-layout>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            ⚖️ Judges Management
        </h2>

       @if(auth()->user()->role == 'tabulator')
<a href="{{ route('judges.create') }}"
   class="btn btn-success">
    Add Judge
</a>
@endif
    </div>

    <div class="card shadow border-0">
        <div class="card-body">

            <table class="table table-hover table-bordered align-middle">

                <thead class="table-dark">
                    <tr>
                        <th width="10%">ID</th>
                        <th width="40%">Judge Name</th>
                        <th width="25%">Position</th>
                        <th width="25%">Actions</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($judges as $judge)

                    <tr>

                        <td>
                            {{ $judge->id }}
                        </td>

                        <td>
                            <strong>
                                {{ $judge->judge_name }}
                            </strong>
                        </td>

                        <td>
                            <span class="badge bg-primary">
                                {{ $judge->position }}
                            </span>
                        </td>

                        <td>

                          @if(auth()->user()->role == 'tabulator')

<a href="{{ route('judges.edit', $judge->id) }}"
   class="btn btn-warning">
     <i class="bi bi-pencil-square"></i>
    Edit
</a>

<form action="{{ route('judges.destroy', $judge->id) }}"
      method="POST"
      style="display:inline;">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger">
        Delete
    </button>
</form>

@endif
                        </td>

                    </tr>

                @empty

                    <tr>
                      <td colspan="4" class="text-center">
                            No judges found.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

</x-app-layout>