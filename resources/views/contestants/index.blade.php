<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto">

            <div class="bg-white shadow-md rounded-lg p-6">

                <div class="flex justify-between mb-6">
                    <h1 class="text-3xl font-bold">
                        👥 Contestants
                    </h1>

                    <a href="{{ route('contestants.create') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                        + Add Contestant
                    </a>
                </div>

                <table class="min-w-full border">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-3">Contestant No.</th>
                            <th class="border p-3">Name</th>
                            <th class="border p-3">Gender</th>
                            <th class="border p-3">Course</th>
                            <th class="border p-3">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($contestants as $contestant)
                            <tr>
                               <td class="border p-3">
                                      {{ $contestant->contestant_no }}
                                        </td>

                                        <td class="border p-3">
                                         {{ $contestant->first_name }}
                                         {{ $contestant->last_name }}
                                            </td>

                                        <td class="border p-3">
                                          {{ $contestant->gender }}
                                            </td>

                                            <td class="border p-3">
                                               {{ $contestant->course }}
                                                </td>

                                                <td class="border p-3">

    <a href="{{ route('contestants.edit', $contestant->id) }}"
       class="bg-yellow-500 text-white px-3 py-1 rounded">
        ✏️ Edit
    </a>

    <form action="{{ route('contestants.destroy', $contestant->id) }}"
          method="POST"
          style="display:inline;">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-600 text-white px-3 py-1 rounded"
                onclick="return confirm('Delete this contestant?')">
            🗑️ Delete
        </button>

    </form>

</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center p-5">
                                    No contestants found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</x-app-layout>