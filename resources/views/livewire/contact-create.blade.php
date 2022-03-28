<div class="m-4">
    <form wire:submit.prevent="store">

        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="text">
            @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone">
            @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
