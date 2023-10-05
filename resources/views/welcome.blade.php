<h1>Hello World</h1>
<p>Go to
<a href="/getMethod">Get</a> Page
</p>

<p>Go to about us: <a href={{ route('about') }}> Here</a></p>
<p><a href={{ route('group') }}>Group</a></p>


{{-- printing number --}}
{{ 5+1 }}
<br><br>

{{ "Hello World" }}
<br><br>

{{-- There cannot be any spaces between the curly bracket and !! "{!! "<></>" !!}" --}}
{!! "<h1>Hello World</h1>" !!}


{{-- For javaScript Code --}}

{{-- {!! "<script>alert('Alert Box')</script>" !!} --}}


{{-- Writing php code in blade and declaring variable --}}

{{-- @php
    $user = "Akib Raihan";
@endphp

{{ $user }} --}}


@php
    $names = ["Akib", "Dorothi", "Himel", "Sigda"]
@endphp

<ul>
    @foreach ($names as $name)
        <li>{{ $name }}</li>
    @endforeach
</ul>


{{-- Some properties of foreach loops --}}
{{-- $loop->index, $loop->count, $loop->iteration, $loop->first,$loop->last, $loop->even, $loop->odd and many more--}}

<ul>
    @foreach ($names as $name )
        <li> {{ $loop->index }} -- {{ $name }}</li>
    @endforeach
</ul>


<ul>
    @foreach ($names as $name )
        @if ($loop->first)
            <li style="color:rgb(4, 0, 255)"> {{ $loop->index }} -- {{ $name }}</li>
        @else
            <li> {{ $loop->index }} -- {{ $name }}</li>
        @endif

    @endforeach
</ul>



{{-- @include directives are used here --}}
{{-- Sending values to second page --}}

@include('pages.first', ['name' => 'Akib Raihan'])
<h1>Look up and down</h1>
@include('pages.second')


{{-- Sending array of names --}}

@php
    $names = ["Akib", "Dorothi", "Himel", "Sigda"]
@endphp

@include('pages.first', ['names' => $names])

{{-- use "@includeif() if there is a possibility that the page is not present" --}}
{{-- use "@includeWhen(condition Value,'viewfile', ['status'=> 'Hello'])" if there is a conditon, like if the condition is fulfilled then they will include the viewfile --}}
