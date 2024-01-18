<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($companies as $company)
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
           <a href="{{ route('company.details', $company) }}" class="text-blue-500 hover:underline"> 
				<h2 class=" font-semibold mb-2">{{ $company->name }}</h2>
			</a>
        </div>
    @endforeach
</div>