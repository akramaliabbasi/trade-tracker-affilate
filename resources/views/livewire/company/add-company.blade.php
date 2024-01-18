<div class="row">
@section('content')

<div class="flex min-h-screen">

    <!-- Left Sidebar -->
    <aside class="w-64 bg-gray-800 text-white p-6 hidden sm:block">
        <ul>
            <li><a href="#" class="block py-2">Dashboard</a></li>
            <li><a href="{{ route('add.company') }}" class="block py-2">Add Company</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Navigation Bar -->
        <header class="bg-white border-b border-gray-200">
            <div class="flex items-center justify-between p-4">
                <div>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Affiliate marketing platform - TradeTracker" class="h-8 w-auto">
                </div>
                <div class="flex items-center">
                    <span class="mr-4">Welcome, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700">Logout</button>
                    </form>
                </div>
            </div>
        </header>
        <!-- Main Content Area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4">
		
		 <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
			<form  wire:click.prevent="add-company-store" method="POST" action="{{ route('add.company.store') }}">
                        @csrf
				<div class="mb-4">
				<label for="logo" class="block text-gray-700 text-sm font-bold mb-2">Logo</label>
				<input wire:model="logo" type="text" id="logo" name="logo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
				@error('logo') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
				</div>

				<div class="mb-4">
				<label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
				<input wire:model="name" type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
				@error('name') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
				</div>

				<div class="mb-4">
				<label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
				<textarea wire:model="description" id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
				@error('description') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
				</div>

				<div class="mb-4">
				<label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
				<input wire:model="address" type="text" id="address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
				@error('address') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
				</div>

				<div class="flex items-center justify-between">
				<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="add-company-store">Add Company</button>
				</div>
			</form>


        </main>

        <!-- Footer -->
      <footer class="bg-gray-200 py-4 text-center">
    <p>&copy; {{ date('Y') }} Trade Tracker. All rights reserved.</p>
</footer>
    </div>

</div>

@endsection
</div>