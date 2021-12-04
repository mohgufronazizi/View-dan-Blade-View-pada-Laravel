{{-- Blade directive memungkinkan kalian untuk memasukkan Blade
view ke view yang lain. Semua variabel yang ada pada parent view juga
dapat diakses pada child view. --}}
{{-- teknik ini persis sepertsi teknik skeleton --}}
<html>
	<body>
		{{-- @include('directivesLoop') --}}
		@include('directivesConditional',['name' => 'Jong Koding'])
		@include('conditionalClasses')
		{{-- Jika kalian memberikan view yang mana view tersebut tidak ada,
		maka secara default, Laravel akan memberikan error. Untuk
		menyertakan view yang mungkin ada atau tidak, kalian akan
		menggunakan @includeIf.
		Jika kalian ingin @include view bergantung dengan ekspresi
		boolean yang diberikan bernilai true atau false, kalian dapat
		menggunakan directive @includeWhen dan @includeUnless --}}

		{{-- include if --}}
		{{-- @includeIf('directives.conditional') --}}

		{{-- include dengan ekspresi boolean --}}
		{{-- @includeWhen($boolean, 'directives.conditional')
		@includeUnless($boolean, 'directives.conditional') --}}

		{{-- Apabila kalian memiliki array dari view, kalian bisa menggunakan
		@includeFirst untuk mengambil view pertama dari array tersebut. --}}

		{{-- include mengambil view pertama dari array --}}
		{{-- @includeFirst(['view.name','variable'],['data' => 'additional']) --}}

	</body>
</html>



