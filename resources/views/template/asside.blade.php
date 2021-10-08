
@if(isset($similar_posts))
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h1>Lista de Posts</h1>
                    @foreach ($similar_posts as $post )
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{$post->name}}

                        </div>
                        <div class="panel-body">

                            @if($post->image)
                            <img src="{{Storage::url($post->image->url)}}" class="img-responsive">
                            @endif
                            {!! $post->excerpt !!}
                            <a href="{{route('post', $post->slug)}}" class="pull-right">Leer más</a>
                        </div>
                    </div>
                    @endforeach
                </div>
         </div>
@endif
