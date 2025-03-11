<x-app-layout>
    @foreach ($articles as $article)
    <article>
        <p>{{$article->title}}</p>
        @if ($article->img)
            <img src="{{$article->img}}">
        @else
            <img src="https://img.freepik.com/premium-photo/midsection-man-using-laptop-table_1048944-20486397.jpg" width="80px">
        @endif
        <a href="{{route('articles.show',$article->slug)}}"><button>Leer Artículo Completo</button></a>
    </article>
        {{$article}}
        <hr>
    @endforeach
</x-app-layout>