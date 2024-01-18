@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $company->name }}</h1>
        <img src="{{ $company->logo }}" alt="{{ $company->name }} Logo">
        <p>{{ $company->description }}</p>
        <p><strong>Address:</strong> {{ $company->address }}</p>
    </div>
@endsection