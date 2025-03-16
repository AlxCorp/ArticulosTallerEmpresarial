<div>
    <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="me-2">
                <button wire:click="selectTab('noticias')" class="cursor-pointer inline-flex items-center justify-center p-4 border-b-2 {{ $selectedTab === 'noticias' ? 'border-blue-600 text-blue-600' : 'border-transparent hover:text-gray-900 hover:border-gray-300 dark:hover:text-gray-800' }}">
                    <svg class="w-4 h-4 me-2 {{ $selectedTab === 'noticias' ? 'text-blue-600' : 'text-gray-400' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg> Noticias
                </button>
            </li>
            <li class="me-2">
                <button wire:click="selectTab('generos')" class="cursor-pointer inline-flex items-center justify-center p-4 border-b-2 {{ $selectedTab === 'generos' ? 'border-blue-600 text-blue-600' : 'border-transparent hover:text-gray-900 hover:border-gray-300 dark:hover:text-gray-800' }}">
                    <svg class="w-4 h-4 me-2 {{ $selectedTab === 'generos' ? 'text-blue-600' : 'text-gray-400' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.227 3.227 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076Zm-6-9A3.243 3.243 0 0 0 11 2.424V1a1 1 0 0 0-2 0v1.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0V8.576A3.243 3.243 0 0 0 13.25 5.5Z"/>
                    </svg> Géneros
                </button>
            </li>
            <li class="me-2">
                <button wire:click="selectTab('lectores')" class="cursor-pointer inline-flex items-center justify-center p-4 border-b-2 {{ $selectedTab === 'lectores' ? 'border-blue-600 text-blue-600' : 'border-transparent hover:text-gray-900 hover:border-gray-300 dark:hover:text-gray-800' }}">
                    <svg class="w-4 h-4 me-2 {{ $selectedTab === 'lectores' ? 'text-blue-600' : 'text-gray-400' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                    </svg> Lectores
                </button>
            </li>
        </ul>
    </div>

    <div class="mt-6">
        @if ($selectedTab === 'noticias')
            @livewire('editor-noticias')
        @elseif ($selectedTab === 'generos')
            @livewire('editor-generos')
        @elseif ($selectedTab === 'lectores')
            @livewire('editor-lectores')
        @endif
    </div>
</div>
