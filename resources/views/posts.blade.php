<x-layout>
    {{-- Component (X-slot) ini adalah Variable untuk title yang akan digunakan pada saat mengambil nilai pada route  --}}
    {{-- Dan title ini (:slot) akan menjadi variable untuk digunakan pada view (home.blade.php atau about.blade.php, dst) --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    <section>
        <div class="container px-4 rounded">
            @foreach ($posts as $post)
                <div class="row mt-3 shadow-lg rounded">
                    <div class="col-md-4">
                        <img src="{{ $post['img'] }}" class="card-img-top" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title text-3xl fw-bold hover:underline">{{ $post['title'] }}</h3>
                            <p class="card-text">{{ Str::limit($post['body'], '300') }}</p>
                            <div class="mt-2">
                                <a href="#" class="fst-italic">{{ $post['author'] }}</a> |
                                {{ $post->created_at->diffForHumans() }}
                            </div>
                            <a href="/posts/{{ $post['slug'] }}" class="btn btn-primary mt-2">Read More &raquo;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
