<!-- component -->
@props(['post'])

<div class="md:flex-shrink-0">
    <a href="{{ route('post', $post->slug) }}">
        <img src="{{ Storage::url($post->image->url) }}" alt="{{ $post->name }}" title="{{ $post->name }} }}"
            class="w-full h-64 rounded-lg rounded-b-none p-4">
    </a>
</div>
<div class="p-4">
    <div>
        <p>
            <i class="fas fa-tags"></i>
            @foreach ($post->tags as $tag)
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                    <a href="{{ route('tag', $tag->slug) }}">
                        #{{ $tag->name }}
                    </a>
                </span>
            @endforeach
        </p>
    </div>
    <div class="w-auto grid justify-start p-2 mt-2 md:flex justify-between ">
        <p class="font-semibold text-xl py-2"> <a href="{{ route('post', $post->slug) }}"> {{ $post->name }} </a></p>
        <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                </path>
            </svg>
            <span>{{ $post->visits }}</span>
        </div>
    </div>

    <p class="font-light text-gray-700 text-justify line-clamp-3">{!! Str::limit($post->excerpt, 150, '....') !!}</p>
    <div class="flex items-center justify-between mt-2 mx-6">
        <a href="{{ route('post', $post->slug) }}" class="text-blue-500 text-lg bold -ml-3 "> Leer más</a>

    </div>
    <hr>
    <div class="author flex items-center -ml-3 my-3">
        <div class="user-logo">
            <img class="w-12 h-12 object-cover rounded-full mx-4  shadow"
                src="{{ asset('storage/blog/profile.jpg') }}" alt="avatar">
        </div>
        <h2 class="text-sm tracking-tighter text-gray-900">
            By <a href="{{ route('perfil') }}"> {{ $post->user->name }}</a> <span
                class="text-gray-600">{{ $post->created_at->format('d/m/Y') }}.</span>
        </h2>
    </div>
</div>
