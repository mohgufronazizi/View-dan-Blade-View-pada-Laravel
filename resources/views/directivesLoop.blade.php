{{-- <br><br><strong>================== LOOPS ==================</strong> --}}
{{-- Untuk loops, blade menyediakan directive untuk for loop,
foreach, while loop, dan forelse. --}}

{{-- for loop --}}
@for ($i = 0; $i < 10; $i++)
	the current value is {{$i}}
@endfor

{{-- for each --}}
@foreach ($users as $user)
	<p>This is user {{$user->id}}</p>
@endforeach

{{-- for else --}}
@forelse ($users as $user)
	<li>{{$user->name}}</li>
@empty
	<p>No Users</p>
@endforelse

{{-- while loop --}}
@while (true)
	<p>I'm looping forever.</p>
@endwhile

{{-- for each  dengan pengkondisi--}}
@foreach ($users as $user)
	@if ($loop->first)
		ini adalah index pertama
	@endif

	@if ($loop->last)
		ini adalah index terakhir
	@endif
		<p>This is user {{$user->id}}</p>
@endforeach
