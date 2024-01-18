<div class="row">
	
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
    
	
    @if($registerForm)
     <form>
		<div class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
			<div class="mb-4">
				<label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
				<input type="text" wire:model="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
				@error('name') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
			</div>

			<div class="mb-4">
				<label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
				<input type="text" wire:model="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
				@error('email') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
			</div>

			<div class="mb-4">
				<label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
				<input type="password" wire:model="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
				@error('password') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
			</div>

			<div class="mb-4 text-center">
				<button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="registerStore">Register</button>
			</div>

			<div class="col-md-12">
					<p class="text-center text-sm">Do have an account? <a href='/login' class="text-blue-500 hover:underline" wire:click="login"><strong>Login Here</strong></a></p>
				</div>

		</div>
	</form>

    @else
		<form>
			<div class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
				<div class="mb-4">
					<label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
					<input wire:model="email" type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
					@error('email') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
				</div>

				<div class="mb-4">
					<label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
					<input wire:model="password" type="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
					@error('password') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
				</div>

				<div class="mb-4">
					<label for="remember" class="flex items-center">
						<input wire:model="remember" type="checkbox" id="remember" class="mr-2 leading-tight">
						<span class="text-sm">Remember Me</span>
					</label>
				</div>

				<div class="mb-4">
					<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="login">Login</button>
				</div>

				<div class="col-md-12">
					<p class="text-center text-sm">Don't have an account? <a class="text-blue-500 hover:underline" wire:click.prevent="register"><strong>Register Here</strong></a></p>
				</div>
			</div>
		</form>
    @endif
</div>