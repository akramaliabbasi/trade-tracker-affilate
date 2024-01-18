<div class="row">
@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6 bg-gray-100">
                <a href="/" class="text-blue-500 hover:underline">Back</a>
            </div>
            
            <div class="p-6">
                <h1 class="text-2xl font-semibold">{{ $company->name }}</h1>
                <img src="{{ $company->logo }}" alt="{{ $company->name }} Logo" class="mt-4 w-full">
                <p class="mt-4">{{ $company->description }}</p>
                <p class="mt-2"><strong>Address:</strong> {{ $company->address }}</p>

                @if($stockDetails)
                    <div class="mt-4">
                        <p><strong>Stock Symbol:</strong> {{ $stockDetails['01. symbol'] }}</p>
                        <p><strong>Stock Price:</strong> ${{ $stockDetails['05. price'] }}</p>
                        <p><strong>Stock Change:</strong> {{ $stockDetails['09. change'] }}</p>
                    </div>
                @else
                    <p class="mt-4">No stock details available</p>
                @endif
            </div>
        </div>
    </div>
@endsection
</div>