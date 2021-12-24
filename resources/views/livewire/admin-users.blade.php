<div>
  <div class="card">
      <div class="card-header">
        <input wire:keydown="clear_page" wire:model="search" class="form-control w-100" placeholder="Escriba un nombre...">
      </div>
      @if($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px">
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card footer">
                {{ $users->links() }}
            </div>
      @else
        <div class="card-body">
            <strong>No hay registros..</strong>
        </div>
      @endif
  </div>
</div>
