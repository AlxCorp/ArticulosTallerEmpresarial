<main class="article-list grid grid-cols-3 gap-6 px-8">
    @foreach($articles as $article)
        <article class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('articles.show', $article->slug) }}">
                @if ($article->img != "")
                    <img class="rounded-t-lg" src="/storage/images/{{ $article->img }}"/>
                @else
                    <img class="rounded-t-lg" src="https://tallerempresarial.es/wp-content/uploads/2020/04/foto_entrada.jpg"/>
                @endif
            </a>
            <div class="p-5">
                <a href="{{ route('articles.show', $article->slug) }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $article->summary }}</p>
                <div class="flex flex-row gap-4">
                    <a href="{{ route('articles.show', $article->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Leer noticia completa
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    @php
                        $ids = $favorites->pluck('id')->toArray();

                        if (in_array($article->id, $ids)) {
                            $fav_fill = "white";
                        } else {
                            $fav_fill = "none";
                        }
                    @endphp
                    <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $fav_fill }}" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-8 cursor-pointer" wire:click="toggleFavorite({{ $article->id }})">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                </div>
                <br>
                @foreach ($article->genres()->get() as $genre)
                    <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">{{ $genre->name }}</span>
                @endforeach
            </div>
        </article>
    @endforeach
</main>
