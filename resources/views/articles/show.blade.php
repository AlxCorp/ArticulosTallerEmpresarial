<x-app-layout>
    <main class="flex flex-col items-center my-4 px-6">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl text-center">{{$article->title}}</h1>
        <div class="w-40">
            @if ($article->img)
                <img class="h-auto max-w-full" src="/storage/images/{{$article->img}}">
            @else
                <img class="h-auto max-w-full" src="https://img.freepik.com/premium-photo/midsection-man-using-laptop-table_1048944-20486397.jpg">
            @endif
        </div>
        <p class="my-2">{{$article->content}}</p>
    </main>
</x-app-layout>