<form class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
    <div class="content-end">
        <input wire:model="search"
            class="w-2/5 border-2 content-end border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
            type="search" name="search" placeholder="Buscador">
    </div>
    
    @if ($search)
        <ul class="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
            @forelse ($this->results as $result)
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    <a href="{{ $result->url }}" target="_blank">{{ $result->title }}</a>
                </li>
            @empty
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    No hay ninguna coincidencia :(
                </li>
            @endforelse
        </ul>
    @endif
</form>

