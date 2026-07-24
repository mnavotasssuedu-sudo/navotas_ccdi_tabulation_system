<x-app-layout>

<div class="container">

<h2>📝 Enter Score</h2>


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


<form action="{{ route('scores.store') }}" method="POST">

@csrf


<div class="mb-3">
    <label>Judge</label>

    <select name="judge_id" class="form-control">
        @foreach($judges as $judge)
        <option value="{{ $judge->id }}">
            {{ $judge->judge_name }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Contestant</label>

    <select name="contestant_id" class="form-control">
        @foreach($contestants as $contestant)
        <option value="{{ $contestant->id }}">
            {{ $contestant->first_name }} {{ $contestant->last_name }}
        </option>
        @endforeach
    </select>
</div>

<h4>Criteria Scores</h4>

@foreach($criteria as $item)

<div class="mb-3">
    <label>
        {{ $item->name }} ({{ $item->percentage }}%)
    </label>

    <input type="number"
           name="scores[{{ $item->id }}]"
           class="form-control"
           min="0"
           max="100"
           step="0.01"
           required>
</div>

@endforeach

    </select>
</div>


<button type="submit" class="btn btn-success">
    Submit Score
</button>


</form>

</div>

</x-app-layout>