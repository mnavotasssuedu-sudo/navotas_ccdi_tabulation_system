<x-app-layout>

    <div class="container mt-5">

        <div class="card shadow">
            <div class="card-header">
                <h2>Edit Exposure</h2>
            </div>

            <div class="card-body">

                <form action="{{ route('exposures.update', $exposure->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Exposure Name</label>

                        <input type="text"
                               name="exposure_name"
                               value="{{ $exposure->exposure_name }}"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Display Order</label>

                        <input type="number"
                               name="display_order"
                               value="{{ $exposure->order }}"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Final Round</label>

                        <select name="is_final" class="form-control">

                            <option value="0"
                                {{ $exposure->is_final == 0 ? 'selected' : '' }}>
                                No
                            </option>

                            <option value="1"
                                {{ $exposure->is_final == 1 ? 'selected' : '' }}>
                                Yes
                            </option>

                        </select>
                    </div>

                    <button class="btn btn-primary">
                        Update Exposure
                    </button>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>