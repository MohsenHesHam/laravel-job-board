<div>
    <h1>Job board</h1>
    
    @foreach ($jobs as $job)
        <div>
            <strong>Title:</strong> {{ $job['title'] }} | 
            <strong>Salary:</strong> {{ $job['salary'] }}
        </div>
    @endforeach
</div>