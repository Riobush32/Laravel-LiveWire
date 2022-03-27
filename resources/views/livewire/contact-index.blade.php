<div>
    <ul>
        @foreach ($data as $Contact)
            <li>{{ $Contact->name }}</li>
            
        @endforeach
    </ul>
</div>
