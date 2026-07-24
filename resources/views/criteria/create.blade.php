<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ➕ Add Criteria
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-lg p-6">

                <form action="{{ route('criteria.store') }}" method="POST">
                    @csrf

                    <!-- Criteria Name -->
                    <div class="mb-3">
                        <label class="form-label">
                            Criteria Name
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Example: Beauty">
                    </div>


                    <!-- Percentage -->
                    <div class="mb-3">
                        <label class="form-label">
                            Percentage
                        </label>

                        <input type="number"
                               name="percentage"
                               class="form-control"
                               placeholder="Example: 40">
                    </div>


                    <button type="submit" class="btn btn-success">
                        Save Criteria
                    </button>

                    <a href="{{ route('criteria.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>