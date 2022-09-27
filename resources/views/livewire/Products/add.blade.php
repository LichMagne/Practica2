<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabelTitle">{{$title1}}  </h5>
                <button type="button"  class="btn-close btn-close-whit" data-bs-dismiss="modal"  aria-label="Close"> </button>
            </div>
           <div class="modal-body">
                <form wire:submit.prevent="storeProduct">
                    <div class="form-group">
                        <input hidden type="text" class="form-control" id="id_producto"  wire:model="id_producto">
                    </div>
                    <div class="form-group">
                        <label for="product_name">Nombre del Producto</label>
                        <input type="text" class="form-control" id="product_name" placeholder="Ingresar Nombre" wire:model="product_name">
                        @error('product_name') <span id="errorMessage" class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="type_product">Tipo de Producto</label>
                        <input type="text" class="form-control" id="type_product" wire:model="type_product" placeholder="Ingresar Tipo">
                        @error('type_product') <span id="errorMessage" class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" wire:model="stock" placeholder="Ingresar Stock">
                        @error('stock') <span id="errorMessage" class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="cost">Precio</label>
                        <input type="number" class="form-control" id="cost" wire:model="cost" placeholder="Ingresar Precio">
                        @error('cost') <span id="errorMessage"class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </p>
@if ($id_producto<1)
<button type="submit"   data-bs-target="#messageModal"  id="btnAdd" class="btn btn-primary close-modal">Crear Producto</button>
@else
<button type="submit"   data-bs-target="#messageModal"  id="btnAdd" class="btn btn-primary close-modal">Editar Producto</button>
@endif
                </form>
            </div>
        </div>
    </div>
</div>


