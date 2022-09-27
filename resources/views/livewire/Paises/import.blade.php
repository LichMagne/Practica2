
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog">
     

        <form  wire:submit.prevent="storeFile" enctype="multipart/form-data" >
            @csrf
            
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" style="color:Black" id="createLabelTitle">Import  </h5>
                <button type="button"  class="btn-close btn-close-whit" data-bs-dismiss="modal"  aria-label="Close"> </button>
            </div>
           <div class="modal-body">

            <div wire:loading wire:target="file" class="mb-4 bg-red-100 border-red-400 text-red-700- px-4 py-3 rounded relative" role="alert">

                <strong class="font-bold">Cargando...</strong>
                <span class="block sm:inline">Espere el archivo esta cargando</span>
              </div>

                    <div class="form-group">
                        <label for="file">Subir Archivo</label>
                        <input type="file" name="file" class="form-control" wire:model="file">
                        <br>
                        @error('file') <span style="font-size: 18px;"class="text-danger error">Este archivo es necesario*</span>@enderror
                    </div>
                </p>

               <button type="submit" wire:loading.attr="disabled" wire:target="storeFile,file"   class="btn btn-primary close-modal">Importar</button>

                </form>
            </div>
        </div>
    </div>
</div>

