<x-app-layout>

    <div class="container mt-5">

        <div class="card shadow">
            <div class="card-header">
                <h2>Add Exposure</h2>
            </div>

            <div class="card-body">

                <form action="{{ route('exposures.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label>Exposure Name</label>

                        <input
                            type="text"
                            name="exposure_name"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Order</label>

                        <input
                            type="number"
                            name="order"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Final Round</label>

                        <select
                            name="is_final"
                            class="form-control">

                            <option value="0">No</option>
                            <option value="1">Yes</option>

                        </select>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-success">
                        Save Exposure
                    </button>

                </form>

            </div>
        </div>

    </div>

</x-app-layout>