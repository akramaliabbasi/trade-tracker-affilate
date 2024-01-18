@extends('layouts.app')

@section('content')
    <h1>Companies</h1>

    @foreach ($companies as $company)
        <div>
            <h2>{{ $company->name }}</h2>
            <a href="{{ route('company.show', $company) }}">View Details</a>
        </div>
    @endforeach
@endsection