<x-app-layout>
        <h1>{{$article->title}}</h1>
        @if ($article->img)
            <img src="{{$article->img}}">
        @else
            <img src="https://img.freepik.com/premium-photo/midsection-man-using-laptop-table_1048944-20486397.jpg" width="80px">
        @endif
        <p>{{$article->content}}</p>
        <form action="{{route('articles.destroy',$article->slug)}}" method="POST">
            <button type="submit">Eliminar Artículo</button>
            @csrf
            @method('delete')
        </form>
        {{$article}}
</x-app-layout>