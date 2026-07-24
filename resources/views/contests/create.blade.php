<x-app-layout>
    <div class="p-6">
        <h1>Add Contest</h1>

        <form method="POST" action="{{ route('contests.store') }}">
            @csrf

            <input type="text"
                   name="contest_name"
                   placeholder="Contest Name"
                   class="form-control mb-2">

            <input type="text"
                   name="contest_type"
                   placeholder="Contest Type"
                   class="form-control mb-2">

            <input type="number"
                   name="number_of_judges"
                   placeholder="Number of Judges"
                   class="form-control mb-2">

            <input type="number"
                   name="number_of_contestants"
                   placeholder="Number of Contestants"
                   class="form-control mb-2">

            <input type="text"
                   name="tabulator_name"
                   placeholder="Tabulator Name"
                   class="form-control mb-2">

            <button class="btn btn-success">
                Save Contest
            </button>
        </form>
    </div>
</x-app-layout>