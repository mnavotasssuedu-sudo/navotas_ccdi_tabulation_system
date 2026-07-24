<x-app-layout>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header">
            <h2>Edit Judge</h2>
        </div>

        <div class="card-body">

            <form action="{{ route('judges.update', $judge->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Judge Name</label>

                    <input type="text"
                           name="judge_name"
                           class="form-control"
                           value="{{ $judge->judge_name }}">
                </div>

                <div class="mb-3">
                    <label>Position</label>

                    <input type="text"
                           name="position"
                           class="form-control"
                           value="{{ $judge->position }}">
                </div>

               
                <button class="btn btn-primary">
                    Update Judge
                </button>

            </form>

        </div>
    </div>

</div>

</x-app-layout>