<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    @foreach ($postingan as $post)
        <article class="py-8 max-w-sm border-b border-gray-300">
            <a href="blog/{{ $post['slug'] }}" class="hover:underline">
                <h3 class="mb-1 text-3xl tracking-tight font-bold text-blue-700">{{ $post['judul'] }}</h3>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['penulis'] }}</a> 11 Mei 2026
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['isi_postingan'], 35) }}
            </p>
            <a href="blog/{{ $post['slug'] }}" class="font-medium text-blue-600">Readmore &raquo;</a>
        </article>
    @endforeach

</x-layout>
