 <div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="createLabelTitle">{{ $title1 }} </h5>
                 <button type="button" class="btn-close btn-close-whit" data-bs-dismiss="modal" aria-label="Close">
                 </button>
             </div>
             <div class="modal-body">
                 <form wire:submit.prevent="store" method="POST">
                     <div class="form-group">
                         <input hidden type="text" class="form-control" id="id_empresa" wire:model="id_empresa">
                     </div>
                     <div class="form-group">
                         <label for="empresa_name">Nombre de la Empresa</label>
                         <input type="text" class="form-control" id="empresa_name" placeholder="Ingresar Nombre"
                             wire:model="empresa_name">
                         @error('empresa_name')
                             <span id="errorMessage" class="text-danger error">{{ $message }}</span>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label for="pais_id">Pais</label>

                         <select id="pais_id" class="form-control" wire:model="country">
                             <option selected value="">Seleccionar</option>
                             @foreach ($paisesA as $pais)
                                 <option value="{{ $pais->id }}">{{ $pais->pais_nombre }}</option>
                             @endforeach
                         </select>


                         @error('pais_id')
                             <span id="errorMessage"  class="text-danger error">{{ $message }}</span>
                         @enderror
                     </div>



                     @if (!is_null($ciudadesA))
                         <div class="form-group">
                             <label for="ciudad_id">Ciudades</label>

                             <select id="ciudad_id" class="form-control" wire:model="city">
                                 <option selected value="">Seleccionar</option>
                                 @foreach ($ciudadesA as $ciudades)
                                     <option value="{{ $ciudades->id }}">{{ $ciudades->ciudad_nombre }}</option>
                                 @endforeach
                             </select>

                             @error('ciudad_id')
                                 <span id="errorMessage"  class="text-danger error">{{ $message }}</span>
                             @enderror
                         </div>
                     @endif
                     </p>
                     @if ($id_empresa < 1)
                         <button type="submit"  id="btnAdd"
                             class="btn btn-primary close-modal">Crear Producto</button>
                     @else
                         <button type="submit" id="btnAdd"
                             class="btn btn-primary close-modal">Editar Producto</button>
                     @endif
                 </form>
             </div>
         </div>
     </div>
 
 </div>

