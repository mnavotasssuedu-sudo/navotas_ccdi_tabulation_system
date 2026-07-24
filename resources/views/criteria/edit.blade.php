<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800">
        ✏️ Edit Criteria
    </h2>
</x-slot>


<div class="py-6">

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<div class="bg-white shadow rounded-lg p-6">


<form action="{{ route('criteria.update', $criteria->id) }}"
      method="POST">

@csrf
@method('PUT')


<div class="mb-3">

<label>
Criteria Name
</label>

<input type="text"
name="name"
class="form-control"
value="{{ $criteria->name }}">

</div>


<div class="mb-3">

<label>
Percentage
</label>

<input type="number"
name="percentage"
class="form-control"
value="{{ $criteria->percentage }}">

</div>


<button class="btn btn-success">
Update
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