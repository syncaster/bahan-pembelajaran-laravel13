<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <h3 class="text-xl">
        Ini adalah halaman About
    </h3>
    <p>Nama Developer: {{ $nama }}</p>
    <p>NIDN : {{ $nidn }}</p>
    <p>Matakuliah: {{ $matakuliah }}</p>
    <p>Framework: {{ $framework }}</p>

    <img src="img/laravel-logo.png" alt="laravel-13" style="width:400px; height:200px;" />
</x-layout>
