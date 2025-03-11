<x-app-layout>
    <h1>CREACIÓN ARTÍCULO</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="/articles" method="post">
        <input type="text" name="title" placeholder="Título" id="title" value="{{old('title')}}">
        <br><br>
        <textarea name="content" id="content" placeholder="Contenido del post...">{{old('content')}}</textarea>
        <br><br>
        <select name="genres[]" id="genres" multiple>
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Crear Artículo</button>
        @csrf
    </form>
</x-app-layout>