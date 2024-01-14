<h1>About Page</h1>
@foreach ($item as $value)
    @if ($value % 2 == 0)
        <p>{{ $value }}</p> 
    @endif
@endforeach