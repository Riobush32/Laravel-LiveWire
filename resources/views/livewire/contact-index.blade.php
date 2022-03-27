<div>
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
                        <button class="btn btn-sm btn-info text-white">Edit</button>
                        <button class="btn btn-sm btn-danger text-white">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
