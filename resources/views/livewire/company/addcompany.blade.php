<div class="row">
@section('content')

    <form wire:submit.prevent="addCompany">
        <div>
            <label for="logo">Logo</label>
            <input wire:model="logo" type="text" id="logo" name="logo" required>
            @error('logo') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="name">Name</label>
            <input wire:model="name" type="text" id="name" name="name" required>
            @error('name') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea wire:model="description" id="description" name="description" required></textarea>
            @error('description') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="address">Address</label>
            <input wire:model="address" type="text" id="address" name="address" required>
            @error('address') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit">Add Company</button>
        </div>
    </form>

@endsection
</div>