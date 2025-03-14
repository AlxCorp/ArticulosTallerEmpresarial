<x-app-layout>
    <h1 class="text-3xl antialiased font-black text-center my-6">Lee los últimos artículos</h1>
    <main class="grid grid-cols-3 my-4" style="justify-items: center;">
        @livewire('article-list')
    </main>
</x-app-layout>