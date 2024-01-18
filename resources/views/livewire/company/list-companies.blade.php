<div>
    @foreach ($companies as $company)
        <div>
            <h2>{{ $company->name }}</h2>
            <a href="{{ route('company.show', $company) }}">View Details</a>
        </div>
    @endforeach
</div>