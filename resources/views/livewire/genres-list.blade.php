<div class="max-w-2xl mx-auto">
    @foreach($genres as $genre)
        <button wire:click="showArticles({{ $genre->id }})" 
                class="w-full text-left bg-blue-800 p-4 my-2 text-white font-bold rounded-lg">
            {{ $genre->name }}
        </button>

        @if($selectedGenre === $genre->id)
            <div class="p-4 bg-gray-100">
                <p class="text-sm text-gray-700">{{ $genre->description }}</p>
                
                <ul class="mt-3 space-y-2">
                    @forelse($articles as $article)
                        <li class="p-2 bg-white shadow rounded-lg border border-gray-300">
                            <a href="{{ route('articles.show', $article->slug) }}" class="text-blue-600 hover:underline">
                                {{ $article->title }}
                            </a>
                        </li>
                    @empty
                        <li class="text-gray-500">No hay artículos en este género.</li>
                    @endforelse
                </ul>
            </div>
        @endif
    @endforeach
</div>
