<!-- component -->
@props(['post'])

<div
    class="relative grid grid-col w-full h-full md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
    <div class="w-full mb-4 md:w-full bg-white grid place-items-center">
        <a href="{{ route('post', $post->slug) }}">
            <img src="{{ Storage::url($post->image->url) }}" alt="{{ $post->name }}" title="{{ $post->name }} }}"
                class="rounded-xl" />
        </a>
    </div>
    <div class="w-full md:w-auto bg-white flex flex-col space-y-2 p-3">
        <div class="grid justify-between item-center gap-2">
            <p>
                <i class="fas fa-tags"></i>
                @foreach ($post->tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}">
                        {{ $tag->name.',' }}
                    </a>
                @endforeach
            </p>
            <div>
                <p class="text-xl font-black text-gray-800">
                    Publicado:
                    <span class="font-normal text-gray-600 text-base">{{ $post->created_at->format('d/m/Y') }}</span>
                </p>
            </div>
        </div>
        <a href="{{ route('post', $post->slug) }}">
            <h3 class="font-black text-gray-800 md:text-3xl text-xl">{{ $post->name }}</h3>
        
            <p class="md:text-lg text-gray-500 text-base"> {!! Str::limit($post->excerpt, 50, '<strong>... seguir leyendo </strong>👉') !!}</p>
           
        </a>
    </div>
</div>
