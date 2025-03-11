<x-app-layout>
    <h1>EDICIÓN ARTÍCULO</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('articles.update', $article)}}" method="post">
        <input type="text" name="title" placeholder="Título" id="title" value="{{old('title', $article->title)}}">
        <br><br>
        <textarea name="content" id="content" placeholder="Contenido del post...">{{old('content', $article->content)}}</textarea>
        <br><br>
        <select name="genres[]" id="genres" multiple>
            @foreach ($genres as $genre)
                @if (in_array($genre->id, $selectedGenres))
                    <option value="{{$genre->id}}" selected>{{$genre->name}}</option>
                @else
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                @endif
            @endforeach
        </select>
        <br><br>
        <button type="submit">Editar Artículo</button>
        @method('put')
        @csrf
    </form>
</x-app-layout>