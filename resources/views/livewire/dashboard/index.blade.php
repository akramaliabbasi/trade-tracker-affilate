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
            <!-- Livewire Component Content Goes Here -->
            @yield('content')
        </main>

        <!-- Footer -->
      <footer class="bg-gray-200 py-4 text-center">
    <p>&copy; {{ date('Y') }} Trade Tracker. All rights reserved.</p>
</footer>
    </div>

</div>

@endsection
</div>