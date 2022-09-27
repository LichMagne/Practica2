<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabelTitle">Cambiar Imagen</h5>
                <button type="button" class="btn-close btn-close-whit" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class=" modal-body">

                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col">

                        <img src="storage\{{ $image1 }}" alt="avatar" class="rounded-circle img-fluid"
                            style="width: 150px;">


                        <h5>Imagen Actual</h5>
                    </div>
                    </p>
                    <div class="col">
                        <div wire:loading wire:target="file"
                            class="mb-4 bg-red-100 border-red-400 text-red-700- px-4 py-3 rounded relative"
                            role="alert">

                            <strong class="font-bold">Cargando</strong>
                            <span class="block sm:inline">Espere la imagen se esta cargando</span>
                        </div>
                        @if ($file)
                            <img src="{{ $file->temporaryUrl() }}" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                        @else
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        @endforelse
                        <h5>Imagen Nueva</h5>
                    </div>



                </div>
                <form wire:submit.prevent="storeFile" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input hidden type="text" class="form-control" id="iduser" wire:model="iduser">
                    </div>
                    <div class="form-group">
                        <input type="file" name="file" class="form-control" id={{ $idin }}
                            wire:model="file">
                        @error('file')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                    </p>


            </div>
            <button type="submit" wire:loading.attr="disabled" wire:target="storeFile,file"
                class="disabled:opacity-25 btn btn-primary close-modal">Cambiar Imagen</button>

            </form>
        </div>
    </div>
</div>
