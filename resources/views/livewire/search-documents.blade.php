<div>
    {{-- Be like water. --}}
    <form class="pt-2 relative mx-auto text-gray-600 mb-3" autocomplete="off">
        <div class="content-end">
            <input wire:model="search"
                class="w-2/5 border-2 content-end border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                type="search" name="search" placeholder="Buscador">
        </div>
    </form>

      <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">			 				
				<table id="users" class="stripe hover border-b-2" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>
                        <tr class="bg-indigo-400 bg-opacity-100 text-white">
                            <th class="text-left">Titulo</th>
                                <th></th>
                                <th class="text-left">Descripción</th>
                                <th class="text-left">Enlace</th>

                        </tr>
					</thead>
					<tbody class="mt-2">
                        @if ($search)
                            @forelse ($this->documentations as $documentation)
                                <tr class="p-2 border-b-2">
                                <td class="p-2"> {{$documentation->title  }}</td>
                                <td class="p-2"> <img class="w-1/2 h-1/2" src="{{ Storage::url($documentation->image) }}" alt="{{$documentation->title  }}"></td>
                                <td class="p-2"> {!!  $documentation->description  !!}</td>
                                <td class="p-2"> <a href="{{ $documentation->url  }} " target="_blank">{{ __('acceder')  }}</a> </td>
                            </tr>
                            @endforeach
                        @else
                            @foreach ($documentations as $documentation)
                            <tr class="p-2 border-b-2">
                                <td class="p-2"> {{$documentation->title  }}</td>
                                <td class="p-2"> <img class="w-1/2 h-1/2" src="{{ Storage::url($documentation->image) }}" alt="{{$documentation->title  }}"></td>
                                <td class="p-2"> {!!  $documentation->description  !!}</td>
                                <td class="p-2"> <a href="{{ $documentation->url  }} " target="_blank">{{ __('acceder')  }}</a> </td>
                            </tr>
                            @endforeach
                        @endif
					</tbody>					
				</table>				
			</div>	
</div>
