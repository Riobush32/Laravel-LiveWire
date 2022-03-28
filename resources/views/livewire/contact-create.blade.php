<div class="m-4">
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="text">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input wire:model="phone" type="text" class="form-control" id="phone">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
