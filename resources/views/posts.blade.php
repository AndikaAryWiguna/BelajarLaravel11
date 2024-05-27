<x-layout>
    {{-- Component (X-slot) ini adalah Variable untuk title yang akan digunakan pada saat mengambil nilai pada route  --}}
    {{-- Dan title ini (:slot) akan menjadi variable untuk digunakan pada view (home.blade.php atau about.blade.php, dst) --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-4 mt-3">
                        <div class="p-3 border shadow-sm rounded">
                            {{-- Header --}}
                            <div class="d-flex justify-content-between mb-4">
                                <a href="" class="btn btn-light">Kategori</a>
                                {{ $post->created_at->diffForHumans() }}
                            </div>

                            {{-- Body --}}
                            <h3 class="card-title text-3xl fw-bold hover:underline">{{ $post['title'] }}</h3>
                            <p class="card-text">{{ Str::limit($post['body'], '300') }}</p>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="/authors/{{ $post->author->id }}"
                                    class="hover:underline content-center">{{ $post->author->name }}</a>
                                <a href="/posts/{{ $post['slug'] }}" class="btn btn-primary">Read More &raquo;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
