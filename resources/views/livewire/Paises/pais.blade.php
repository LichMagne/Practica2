<div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-success">
                            Importar</button>
                            @if (!$pais->isEmpty())
                            @can('admin_menu')
                            <button type="button"  wire:click="$emit('deletedAll')" class="float-end btn btn-danger">
                                Eliminar Todo <i class="bi bi-trash"></i></button>
                            @endcan
                            @endif
                 
                        @include('livewire.Paises.import')
                        

                    </div>
                    <div class="card-body">
                        <table wire:poll.5s class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Pais</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            @foreach ($pais as $p)
                                <tbody>
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td> {{ $p->pais_nombre }}</td>
                                        <td>
                                            <button type="button" wire:click="$emit('deletedP',{{ $p->id }})'"
                                                class="btn btn-danger btn-md"><i class="bi bi-trash"></i></button>

                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach


                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
