

{{-- Reading file from the home page --}}

<h1>First Page, {{ $name }}</h1>


<ul>
    @foreach ($names as $oneName )
        <li> {{ $loop->index }} -- {{ $oneName }}</li>
    @endforeach
</ul>

{{-- use forelse if there is a moment that the array is empty and it should not return an error as there is an empty condition--}}

{{-- @forelse ($names as $item)

@empty

@endforelse --}}
