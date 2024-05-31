a<x-layout>
    {{-- Component (X-slot) ini adalah Variable untuk title yang akan digunakan pada saat mengambil nilai pada route  --}}
    {{-- Dan title ini (:slot) akan menjadi variable untuk digunakan pada view (home.blade.php atau about.blade.php, dst) --}}
    <x-slot:title>{{ $title }}</x-slot:title>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-4 mt-3">
                        <div class="card h-100">
                            {{-- Image --}}
                            <img src="https://picsum.photos/id/12/500/400" class="card-img-top" alt="...">

                            {{-- Header with absolute position --}}
                            <div class="header position-absolute w-100 d-flex justify-content-between p-2"
                                style="top: 0; left: 0; z-index: 10;">
                                <a href="/kategoris/{{ $post->kategori->slug }}"
                                    class="btn btn-{{ $post->kategori->color }}">
                                    {{ $post->kategori->name }}
                                </a>
                                <a class="px-2 text-white" href="#">
                                    {{ $post->created_at->diffForHumans() }}
                                </a>
                            </div>

                            {{-- Body --}}
                            <div class="card-body">
                                <h3 class="card-title text-3xl fw-bold hover:underline">{{ $post['title'] }}</h3>
                                <p class="card-text">{{ Str::limit($post['body'], '300') }}</p>
                            </div>

                            {{-- Footer --}}
                            <div class="card-footer border-top-0 bg-white py-3">
                                <div class="d-flex justify-content-between">
                                    <img src="https://picsum.photos/40/30" class="rounded-circle" alt="...">
                                    <a href="/authors/{{ $post->author->username }}"
                                        class="hover:underline content-center text-decoration-none">{{ $post->author->name }}</a>
                                    <a href="/posts/{{ $post['slug'] }}" class="btn btn-primary">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
