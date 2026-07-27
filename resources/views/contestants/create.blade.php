<x-app-layout>
    <div class="py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white shadow-lg rounded-lg p-8">

                <h1 class="text-3xl font-bold mb-6">
                    👥 Add Contestant
                </h1>

                <form method="POST"
                      action="{{ route('contestants.store') }}">

                    @csrf

                    <!-- Contest -->
                  <div class="mb-5">
    <label class="block font-semibold mb-2">
        Contest
    </label>

    <input type="text"
           class="w-full border rounded-lg p-3"
           value="Test Contest">
</div>

                    <!-- Contestant Number -->
                    <div class="mb-5">
                        <label class="block font-semibold mb-2">
                            Contestant Number
                        </label>

                        <input
                            type="number"
                            name="contestant_no"
                            class="w-full border rounded-lg p-3"
                            placeholder="Enter contestant number">
                    </div>

                    <!-- Contestant Name -->
                    <div class="mb-5">
    <label class="block font-semibold mb-2">
        First Name
    </label>

    <input
        type="text"
        name="first_name"
        class="w-full border rounded-lg p-3"
        placeholder="Enter first name">
</div>

<div class="mb-5">
    <label class="block font-semibold mb-2">
        Last Name
    </label>

    <input
        type="text"
        name="last_name"
        class="w-full border rounded-lg p-3"
        placeholder="Enter last name">
</div>

                    <!-- Gender -->
                    <div class="mb-5">
                        <label class="block font-semibold mb-2">
                            Gender
                        </label>

                        <select
                            name="gender"
                            class="w-full border rounded-lg p-3">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <!-- Team -->
                  <input type="text"
                    name="course"
                  class="w-full border rounded-lg p-3"
                   placeholder="Enter course">

                    <!-- Button -->
                    <div class="mt-6">
                        <button
                            type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
                            Save Contestant
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>