@php
$isActive = false;
$hasError = true;
@endphp

<span @class([
	'p-4','font-bold' => $isActive,
	'text-gray-500' => ! $isActive,
	'bg-red' => $hasError,
	])> Halo Saya coba class</span>

<span class="p-4 text-gray-500 bg-red">Halo saya coba class</span>