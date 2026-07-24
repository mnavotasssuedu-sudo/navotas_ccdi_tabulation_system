<x-app-layout>

    <div class="container mt-5">

        <div class="card shadow">
            <div class="card-header">
                <h2>Add Judge</h2>
            </div>

            <div class="card-body">

                <form action="{{ route('judges.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label>Judge Name</label>
                        <input type="text"
                               name="judge_name"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Position</label>
                        <input type="text"
                               name="position"
                               class="form-control">
                    </div>

                    <div class="mb-3">
    <label>Email</label>

    <input
        type="email"
        name="email"
        class="form-control"
        placeholder="Enter judge email">
</div>

                    <button type="submit" class="btn btn-success">
                        Save Judge
                    </button>

                </form>

            </div>
        </div>

    </div>

</x-app-layout>