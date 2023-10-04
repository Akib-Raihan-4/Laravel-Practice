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
