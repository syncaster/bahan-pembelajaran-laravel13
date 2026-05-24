<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <article class="py-8 max-w-sm border-b border-gray-300">
        <h3 class="mb-1 text-3xl tracking-tight font-bold text-blue-700">{{ $post['judul'] }}</h3>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['penulis'] }}</a> 11 Mei 2026
        </div>
        <p class="my-4 font-light">
            {{ $post['isi_postingan'] }}
        </p>
        <a href="/blog" class="font-medium text-blue-600">Back &laquo;</a>
    </article>
</x-layout>
