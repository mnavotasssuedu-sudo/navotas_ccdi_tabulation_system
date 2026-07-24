<x-app-layout>
    <div class="container mt-4">

        <h2 class="mb-4">📊 View Scores</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                   <th>Judge</th>
<th>Contestant</th>
<th>Criteria</th>
<th>Score</th>
<th>Exposure</th>
                </tr>
            </thead>

            <tbody>
                @forelse($scores as $score)
                    <tr>
                       <td>{{ $score->judge->judge_name }}</td>

<td>
    {{ $score->contestant->first_name }}
    {{ $score->contestant->last_name }}
</td>

<td>
    {{ $score->criteria->name }}
</td>

<td>{{ $score->score }}</td>

                        <td>{{ $score->exposure->exposure_name ?? 'N/A' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            No scores found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>