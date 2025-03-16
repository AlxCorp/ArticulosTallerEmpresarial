<x-app-layout>
    <h1 class="text-3xl antialiased font-black text-center my-6">Bienvenido, {{ Auth::user()->name }}</h1>
    @livewire('editor-tab-switcher')
</x-app-layout>
