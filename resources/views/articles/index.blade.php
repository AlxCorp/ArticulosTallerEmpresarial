<x-app-layout>
    <h1 class="text-3xl antialiased font-black text-center my-6">Lee los últimos artículos</h1>
    <main class="grid grid-cols-3 my-4" style="justify-items: center;">
        @foreach ($articles as $article)
        <article>
            <x-article 
                slug="{{route('articles.show',$article->slug)}}"
                img="https://img.freepik.com/premium-photo/midsection-man-using-laptop-table_1048944-20486397.jpg"
                title="{{$article->title}}"
                summary="{{Str::limit($article->content, 100)}}"/>
        </article>
        @endforeach
    </main>
</x-app-layout>