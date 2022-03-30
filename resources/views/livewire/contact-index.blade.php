<div>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>

    @endif

    @if ($statusUpdate)
    <livewire:contact-update />
    @else
    <livewire:contact-create />
    @endif


    <hr>

    <div class="row">
        <div class="col-2">
            <select wire:model="paginate" class="form-select">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
    </div>

    <hr>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($contacts as $contact)
            <?php $no++; ?>
            <tr>
                <th scope="row">{{ $no }}</th>
                <th>{{ $contact->name }}</th>
                <td>{{ $contact->phone }}</td>
                <td>
                    <button wire:click="getContact({{ $contact->id }})"
                        class="btn btn-sm btn-info text-white">Edit</button>
                    <button wire:click="destroy({{ $contact->id }})"
                        class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $contacts->links('vendor.pagination.bootstrap-5') }}
</div>
