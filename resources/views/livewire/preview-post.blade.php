<div>
    <div>
        <h4>Listado posts creados</h4>
        <table class="table">
            <tr class="bg-indigo-400 bg-opacity-100 text-black">
                    <th scope="col" class="text-left">Id</th>
                    <th scope="col" class="text-left">Nombre</th>
                    <th scope="col" class="text-left">Estado</th>
                    <th scope="col" colspan="2" class="text-left">Acción</th>
    
            </tr>
            <tbody>
                @forelse ($posts as $item)
                    <tr class="p-2 border-b-2">
                        <td scope="row">  {{$item->id}}   </td>
                        <td scope="row">  {{$item->name}}   </td>
                        @if( $item->status == 1)
                            <td scope="row">  <span class="label label-primary">🔘</span></td>
                        @else
                            <td scope="row"><span class="label label-primary">✅</span></td>
                        @endif
                        <td scope="row">   
                            <button wire:click="viewModal({{$item->id}})" data-toggle="modal" data-target="#exampleModal" class="rounded primary">
                                Visualizar
                            </button>  
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   @if($this->post)
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row">
                <div class="col-8">
                    <h5 class="modal-title" id="exampleModalLabel">Previsualización Post </h5>
                </div>
                <div class="col-6">
                    <a href="{{route('admin.posts.edit', ['post' => $post])}}">ir a editar post</a>
                </div>
            </div>    
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class=" mx-auto w-auto px-4 xl:px-0">
                <section class="bg-contain lg:bg-cover" style="background-image: url({{ Storage::url($post->image->url) }});
                    background-position:center;background-repeat:no-repeat;">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">     
                    </div>
                </section>
                <div class=" ">
                        <hr>
                        <div class="w-auto grid justify-start p-2 mt-2 md:flex justify-between  ">
                            <div class="md:ml-5">
                                Categoria
                                <a href="#">{{ $post->category->name }}</a>
                            </div>
                            <div class="mr-5">
                                <p> Publicado por <strong> {{ $post->user->name }} </strong> el {{ $post->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                        <hr>
    
                        <div class="mt-5 mb-8">
                            <h1 class="font-fold text-6xl text-center font-bold mt-11" style="color:#303a52">{{ $post->name }}</h1>
                        </div>
                        <hr>
                        <div class="panel-body">
                            <div class="mt-2">
                                {!! $post->excerpt !!}
                            </div>
                            <hr>
                            <div class="flex flex-wrap">
                                <div class="w-5/6 mt-2">
                                    {!! $post->body !!}
                                </div>
                                <div class="w-1/6 mt-2 text-center">
                                </div>
                            </div>                   
                            <hr>
                            Etiquetas
                            <i class="fas fa-tags"></i>
                            @foreach ($post->tags as $tag)
                                <a href="#">
                                    {{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                </div>
                <hr>
            </div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="$set('open', false)">Close</button>
          </div>
        </div>
      </div>
    </div>
    @endif
</div>
