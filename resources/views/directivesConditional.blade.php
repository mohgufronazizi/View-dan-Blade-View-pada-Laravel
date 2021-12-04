<!-- if statement -->


{{-- Kalian dapat membuat if statement dengan menggunakan @if,
@elseif, @else, dan @endif. --}}

<strong>---------------- masuk kondisi if ---------------</strong>

 @if ($name == "")
 	<h1>Maaf aku tidak punya nama</h1>
 @elseif ($name == "Jong Koding")
 	<h1>Halo, aku {{$name}}</h1>
 @else
 	<h1>Halo, aku bukan Jong Koding</h1>
 @endif

{{--  Selain itu ada juga tambahan seperti @isset … @endisset dan
@empty … @endempty. --}}
<strong>---------------- end kondisi if ---------------</strong>

{{-- @auth dan @guest dapat digunakan untuk menentukan dengan
cepat apakah pengguna saat ini diautentikasi atau guest. --}}
{{-- contoh --}}
{{-- @auth
    content
@endauth

@guest
    content
@endguest --}}
<br><br><strong>---------------- switch statement ---------------</strong>
{{-- Switch statement dapat kalian buat dengan menggunakan
@switch, @case, @break, @default, dan @endcase --}}
@switch($name)
	@case('Jong Koding')
        <h1>Halo aku {{$name}}</h1>
        @break;
    @case('')
 		<h1>Maaf aku tidak punya nama</h1>
        @break;

    @default
 		<h1>Halo, aku bukan Jong Koding</h1>
@endswitch

<strong>---------------- end switch statement ---------------</strong>