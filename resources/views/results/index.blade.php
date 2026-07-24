<x-app-layout>

<div class="container">

<h2>🏆 Contest Results</h2>

@if($results->count() > 0)

<div class="row mb-4">

    <!-- Winner -->
    <div class="col-md-4">
        <div class="card border-success shadow">
            <div class="card-body text-center">
                <h3>🏆 Winner</h3>

                <h5>
                    {{ $results[0]->first_name }}
                    {{ $results[0]->last_name }}
                </h5>

                <strong>
                    {{ number_format($results[0]->total_score, 2) }}
                </strong>
            </div>
        </div>
    </div>

    <!-- 1st Runner-Up -->
    @if(isset($results[1]))
    <div class="col-md-4">
        <div class="card border-secondary shadow">
            <div class="card-body text-center">
                <h3>🥈 1st Runner-Up</h3>

                <h5>
                    {{ $results[1]->first_name }}
                    {{ $results[1]->last_name }}
                </h5>

                <strong>
                    {{ number_format($results[1]->total_score, 2) }}
                </strong>
            </div>
        </div>
    </div>
    @endif

    <!-- 2nd Runner-Up -->
    @if(isset($results[2]))
    <div class="col-md-4">
        <div class="card border-warning shadow">
            <div class="card-body text-center">
                <h3>🥉 2nd Runner-Up</h3>

                <h5>
                    {{ $results[2]->first_name }}
                    {{ $results[2]->last_name }}
                </h5>

                <strong>
                    {{ number_format($results[2]->total_score, 2) }}
                </strong>
            </div>
        </div>
    </div>
    @endif

</div>

@endif

<table class="table table-bordered">

<thead>
<tr>
    <th>Rank</th>
    <th>Contestant</th>
    <th>Total Score</th>
</tr>
</thead>

<tbody>

@foreach($results as $index => $result)

<tr>

<td>
    {{ $index + 1 }}
</td>

<td>
    {{ $result->first_name }}
    {{ $result->last_name }}
</td>

<td>
    {{ number_format($result->total_score, 2) }}
</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</x-app-layout>