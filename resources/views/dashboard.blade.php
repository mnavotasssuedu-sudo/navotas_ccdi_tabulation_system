<x-app-layout>

<div class="pageant-banner">

    <div class="d-flex justify-content-center align-items-center gap-4">

        <img src="{{ asset('images/crown.avif') }}"
             width="120"
             class="rounded-circle shadow">

        <div>
            <h1 class="pageant-title">
                CCDI PAGEANT TABULATION SYSTEM
            </h1>

            <p class="pageant-subtitle">
                Welcome, {{ auth()->user()->name }}
                ({{ ucfirst(auth()->user()->role) }})
            </p>
        </div>

    </div>

</div>



<div class="row g-4">


    {{-- TABULATOR DASHBOARD --}}

    <!-- Contest -->
<div class="col-md-6">
        <div class="card pageant-card h-100">
        <div class="card-body">
            <h4>🏆 Contest</h4>
            <p>Manage contests and contest information.</p>

            <a href="{{ route('contests.index') }}"
               class="btn btn-warning">
                Manage Contest
            </a>
        </div>
    </div>
</div>

    @if(auth()->user()->role == 'tabulator')

    <!-- Contestants -->
    <div class="col-md-6">
        <div class="card pageant-card h-100">
            <div class="card-body">
                <h4>👥 Contestants</h4>
                <p>Manage all contestants participating in the contest.</p>
                <a href="{{ route('contestants.index') }}"
                   class="btn btn-primary">
                    View Contestants
                </a>
            </div>
        </div>
    </div>

    <!-- Exposure -->
    <div class="col-md-6">
        <div class="card pageant-card h-100">
            <div class="card-body">
                <h4>🎯 Exposure Management</h4>
                <p>Create and manage contest exposures and rounds.</p>
                <a href="{{ route('exposures.index') }}"
                   class="btn btn-danger">
                    Manage Exposure
                </a>
            </div>
        </div>
    </div>

    <!-- Judges -->
    <div class="col-md-6">
       <div class="card pageant-card h-100">
            <div class="card-body">
                <h4>⚖️ Judges</h4>
                <p>Manage judges assigned to the contest.</p>
                <a href="{{ route('judges.index') }}"
                   class="btn btn-success">
                    Manage Judges
                </a>
            </div>
        </div>
    </div>

    <!-- Criteria -->
    <div class="col-md-6">
       <div class="card pageant-card h-100">
            <div class="card-body">
                <h4>📋 Criteria</h4>
                <p>Configure scoring criteria and percentages.</p>
                <a href="{{ route('criteria.index') }}"
                   class="btn btn-success">
                    Manage Criteria
                </a>
            </div>
        </div>
    </div>
    @if(auth()->user()->role == 'judge')
    <!-- Score Entry -->
    <div class="col-md-6">
       <div class="card pageant-card h-100">
            <div class="card-body">
                <h5>📝 Score Entry</h5>
                <p>Allow judges to submit contestant scores.</p>

                <a href="{{ route('scores.create') }}"
                   class="btn btn-primary">
                    Enter Score
                </a>
            </div>
        </div>
    </div>
@endif

    <!-- View Scores -->
    <div class="col-md-6">
        <div class="card pageant-card h-100">
            <div class="card-body">
                <h4>📊 View Scores</h4>
                <p>See all submitted scores.</p>

                <a href="{{ route('scores.index') }}"
                   class="btn btn-info">
                    View Scores
                </a>
            </div>
        </div>
    </div>

    <!-- Ranking -->
    <div class="col-md-6">
        <div class="card pageant-card h-100">
            <div class="card-body">
                <h4>🏆 Ranking</h4>
                <p>View the ranking of contestants in real time.</p>

                <a href="{{ route('results.index') }}"
                   class="btn btn-success">
                    View Results
                </a>
            </div>
        </div>
    </div>

    @endif


    {{-- JUDGE DASHBOARD --}}
    @if(auth()->user()->role == 'judge')
    


    <div class="col-md-6">
    <div class="card pageant-card h-100">
        <div class="card-body">
            <h4>👥 Contestants</h4>
            <p>View all contestants.</p>

            <a href="{{ route('contestants.index') }}"
               class="btn btn-primary">
                View Contestants
            </a>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card pageant-card h-100">
        <div class="card-body">
            <h4>⚖️ Judges</h4>
            <p>View judges.</p>

            <a href="{{ route('judges.index') }}"
               class="btn btn-success">
                View Judges
            </a>
        </div>
    </div>
</div>

<div class="col-md-6">
   <div class="card pageant-card h-100">
        <div class="card-body">
            <h4>🎯 Exposures</h4>
            <p>View contest exposures.</p>

            <a href="{{ route('exposures.index') }}"
               class="btn btn-danger">
                View Exposures
            </a>
        </div>
    </div>
</div>

<div class="col-md-6">
       <div class="card pageant-card h-100">
        <div class="card-body">
            <h4>📋 Criteria</h4>
            <p>View scoring criteria.</p>

            <a href="{{ route('criteria.index') }}"
               class="btn btn-warning">
                View Criteria
            </a>
        </div>
    </div>
</div>

    <!-- Score Entry -->
    <div class="col-md-6">
<div class="card pageant-card h-100">
            <div class="card-body">
                <h4>📝 Score Entry</h4>
                <p>Submit scores for contestants.</p>

                <a href="{{ route('scores.create') }}"
                   class="btn btn-primary">
                    Enter Score
                </a>
            </div>
        </div>
    </div>

    <!-- View Scores -->
    <div class="col-md-6">
<div class="card pageant-card h-100">
            <div class="card-body">
                <h4>📊 View Scores</h4>
                <p>View submitted scores.</p>

                <a href="{{ route('scores.index') }}"
                   class="btn btn-info">
                    View Scores
                </a>
            </div>
        </div>
    </div>

    <!-- Ranking -->
    <div class="col-md-6">
<div class="card pageant-card h-100">
            <div class="card-body">
                <h4>🏆 Ranking</h4>
                <p>View contest results.</p>

                <a href="{{ route('results.index') }}"
                   class="btn btn-success">
                    View Results
                </a>
            </div>
        </div>
    </div>

    @endif

</div>

</x-app-layout>