<x-app-layout>

<div class="container">

<h2>✏️ Edit Contestant</h2>

<form action="{{ route('contestants.update', $contestant->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Contestant No</label>
        <input type="number"
               name="contestant_no"
               value="{{ $contestant->contestant_no }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>First Name</label>
        <input type="text"
               name="first_name"
               value="{{ $contestant->first_name }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Last Name</label>
        <input type="text"
               name="last_name"
               value="{{ $contestant->last_name }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Course</label>
        <input type="text"
               name="course"
               value="{{ $contestant->course }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Gender</label>

        <select name="gender"
                class="form-control">

            <option value="Male"
                {{ $contestant->gender == 'Male' ? 'selected' : '' }}>
                Male
            </option>

            <option value="Female"
                {{ $contestant->gender == 'Female' ? 'selected' : '' }}>
                Female
            </option>

        </select>
    </div>

    <button type="submit"
            class="btn btn-success">
        Update Contestant
    </button>

</form>

</div>

</x-app-layout>