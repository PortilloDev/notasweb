    <form class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
        <div class="relative max-w-lg">
            <input wire:model="search" aria-label="Search articles" type="text"
                placeholder="buscar entradas"
                class="block w-full rounded-md border border-gray-300 bg-white px-4 py-2 text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-900 dark:bg-gray-800 dark:text-gray-100"><svg
                class="absolute right-3 top-3 h-5 w-5 text-gray-400 dark:text-gray-300"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
             </svg>
        </div>
        @if ($search)
            <ul class="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
                @forelse ($this->results as $result)
                    <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                        <a href="{{ route('post', $result->slug) }}">{{ $result->name }}</a>
                    </li>
                @empty
                    <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                        No hay ninguna coincidencia :(
                    </li>
                @endforelse
            </ul>
        @endif
    </form>




