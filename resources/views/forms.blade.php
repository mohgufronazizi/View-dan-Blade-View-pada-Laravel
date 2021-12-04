{{-- CSRF field --}}

<html>
	<body>
		<form method="POST" action="/users">
			@csrf
			{{-- isi form disini --}}
		</form>
	</body>
</html>


{{-- method field --}}
<form method="POST" action="/users">
	@csrf
	@method('PUT')
	{{-- isi form disini --}}
</form>


{{-- Validarion Error --}}
<html>
	<body>
		<form method="POST" action="/users">
			@csrf
			
			<label for="name">Name</label>
			<input id="name" type="text" class="@error('name') is-invalid @enderror">

			@error('name')
			<div class="alert alert-danger">{{$message}}</div>
			@enderror
		</form>
	</body>
</html>