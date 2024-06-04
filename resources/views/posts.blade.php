<x-layout>
    {{-- Component (X-slot) ini adalah Variable untuk title yang akan digunakan pada saat mengambil nilai pada route  --}}
    {{-- Dan title ini (:slot) akan menjadi variable untuk digunakan pada view (home.blade.php atau about.blade.php, dst) --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Search --}}
    <div class="row justify-content-center my-4">
        <div class="col-6">
            <form action="/posts">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-md-3 mt-4">
                        <div class="card h-100 shadow rounded">
                            {{-- Image --}}
                            <img src="https://picsum.photos/500/400" class="card-img-top" alt="{{ $post->title }}">

                            {{-- Header with absolute position --}}
                            <div class="header position-absolute w-100 d-flex justify-content-between align-items-center p-2"
                                style="top: 0; left: 0; z-index: 10;">
                                <a href="/kategoris/{{ $post->kategori->slug }}"
                                    class="btn btn-{{ $post->kategori->color }}">
                                    {{ $post->kategori->name }}
                                </a>
                                <span class="px-2 text-white">
                                    <i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }}
                                </span>
                            </div>

                            {{-- Body --}}
                            <div class="card-body">
                                <h3 class="card-title text-2xl fw-bold hover:underline">{{ $post['title'] }}</h3>
                                <p class="card-text">{{ Str::limit($post['body'], 100) }}</p>
                            </div>

                            {{-- Footer --}}
                            <div class="card-footer border-top-0 bg-white py-2">
                                {{-- Garis Pembatas --}}
                                <hr class="mx-auto my-2 w-100">
                                {{-- Content Footer --}}
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="https://picsum.photos/30/30" class="rounded-circle me-1"
                                            alt="{{ $post->author->name }}">
                                        <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                                            {{ Str::limit($post->author->name, 18) }}
                                        </a>
                                    </div>
                                    <a href="/posts/{{ $post['slug'] }}" class="btn btn-dark">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
