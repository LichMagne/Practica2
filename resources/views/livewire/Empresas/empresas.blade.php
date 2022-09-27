<div>
    <div class="container">
        <div class="row ">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="grid grid-col-3 gap-6">

                            <button type="button" data-bs-toggle="modal" wire:click='create' data-bs-target="#createModal"
                                class="btn btn-success"> Agregar Empresa</button>
                            @include('livewire.Empresas.add')
                            <hr noshade="noshade">
                            {{-- CARD EMPRESA --}}
                            <div class="row ">
                                @foreach ($empresa as $e)
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2" style="width: 15rem;">
                                            <div class="card-body">
                                                <div class="row ">
                                                    <div class="col mb-3">
                                                        <div
                                                            class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            {{ $e->id }}</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                            {{ $e->empresa_name }}</div>
                                                    </div>
                                                    <div class="col mb-1 text-center">
                                                        <i style="font-size: 60px;" class="bi bi-building text-black-300"></i>
                                                    </div>
                                                </div>
                                                <h5 class="card-title"></h5>
                                                <h6 class="card-subtitle mb-2 text-muted">{{ $e->pais->pais_nombre }}
                                                </h6>
                                                <h6 class="card-subtitle mb-2 text-muted">
                                                    {{ $e->ciudad->ciudad_nombre }}</h6>
                                                <button type="button" wire:click='deleted({{ $e->id }})'
                                                    class="btn btn-danger btn-md"><i class="bi bi-trash"></i></button>
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#createModal"
                                                    wire:click='editar({{ $e->id }})'
                                                    class="btn btn-info btn-md"><i
                                                        class="bi bi-pencil-square"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            {{-- <CARD EMPRESA> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 
</div>
