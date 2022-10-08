<!-- component -->
@props(['post'])
<!-- component -->
<li class="p-4 mb-8" style="list-style:none">
    <article class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
        <dl>
            <dt class="sr-only">Published on</dt>
            <dd class="text-xl font-bold leading-6 text-gray-500 dark:text-gray-400">
                <time datetime="2021-08-07T15:32:14.000Z">{{ $post->created_at->format('d M   Y') }}</time>
            </dd>
        </dl>
        <div class="space-y-3 xl:col-span-3">
            <div>
                <h3 class="text-2xl font-bold leading-8 tracking-tight"><a class="text-gray-900 dark:text-gray-100"
                        href="{{ route('post', $post->slug) }}">{{ $post->name }}</a></h3>
                <div class="flex flex-wrap"><i class="fas fa-tags"></i>
                    @foreach ($post->tags as $tag)
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                            <a href="{{ route('tag', $tag->slug) }}">
                                #{{ $tag->name }}
                            </a>
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="prose text-base max-w-none text-gray-500 dark:text-gray-400">{!! Str::limit($post->excerpt, 150, '....') !!}</div>
            <div class="text-base font-medium leading-6"><a
                class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                aria-label="Read &quot;Top 3 BitBucket pull requests Slack Integration&quot;"
                href="{{ route('post', $post->slug) }}">Leer más →</a></div>
        </div>
    </article>
</li>
