<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-md rounded-lg p-6">

                <!-- Header -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">
                        🏆 Contest Management
                    </h1>

                    <a href="{{ route('contests.create') }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                        + Add Contest
                    </a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-3 border">ID</th>
                                <th class="px-4 py-3 border">Contest Name</th>
                                <th class="px-4 py-3 border">Type</th>
                                <th class="px-4 py-3 border">Judges</th>
                                <th class="px-4 py-3 border">Contestants</th>
                                <th class="px-4 py-3 border">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($contests as $contest)
                                <tr class="text-center hover:bg-gray-50">
                                    <td class="border px-4 py-2">
                                        {{ $contest->id }}
                                    </td>

                                    <td class="border px-4 py-2">
                                        {{ $contest->contest_name }}
                                    </td>

                                    <td class="border px-4 py-2">
                                        {{ $contest->contest_type }}
                                    </td>

                                    <td class="border px-4 py-2">
                                        {{ $contest->number_of_judges }}
                                    </td>

                                    <td class="border px-4 py-2">
                                        {{ $contest->number_of_contestants }}
                                    </td>

                                    <td class="border px-4 py-2">
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                            {{ $contest->status }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"
                                        class="text-center py-5 text-gray-500">
                                        No contests found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>