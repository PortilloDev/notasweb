@section('content')
        <div>
            <div class="row">
                <div class="col-md-9 ">
                    <div class="card mb-2 shadow-lg">
                        <div class="card-block shadow-lg p-4">
                            <h1 class="h2-responsive mb-2 p-2">Entradas por etiquetas</h1>
                            @foreach ($posts as $post)
                                <div class="section mt-1 mx-3 mx-md-5 mx-lg-1 shadow-lg" id="sectionArticles">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <a href="{{ route('post', $post->slug) }}">
                                                <div class="view overlay hm-white-slight mb-1">
                                                    <img src="{{ Storage::url($post->image->url) }}"
                                                        class="img-fluid" alt="" title="{{ $post->name }} }}">

                                                    <div class="mask waves-effect waves-light"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-7">
                                            <p class="teal-text mt-0 small" title="Fecha creación">
                                                {{ $post->created_at->format('d/m/Y') }}
                                            </p>

                                            <h4 class="h4-responsive mb-1 mt-1">
                                                <a href="{{ route('post', $post->slug) }}"
                                                    class="black-text-2 font-bold pb-3">
                                                    {{ $post->name }}
                                                </a>
                                            </h4>
                                            <p class="grey-text-3 font-thin">
                                                {!! Str::limit($post->excerpt, 150, '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-2">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-2">
                        <x-tags :tags="$tags" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection