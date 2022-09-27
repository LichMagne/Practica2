<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Productos extends Component
{
    public $title_alert,$text;
public $productos,$id_producto,$product_name,$type_product,$stock,$cost,$title1,$one;
protected $listeners = ['refreshComponent' => '$refresh', 'destroy'];
protected $rules =
[
  'product_name' => 'required|string|max:255',
  'type_product' => 'required|string|max:255',
  'stock' => 'required|integer|max:255',
  'cost' => 'required|integer',
];


    public function render()
    {
        $this->productos = Products::all();
        return view('livewire.Products.productos');
    }



    public function create()
    {
    $this->title1 ='Crear';
    $this->title_alert="Creado";
    $this->text="El Producto ha sido Creado";
    $this->limpiar();
    }

     public function editar($id)
     {
       $producto = Products::findOrFail($id);
       $this->id_producto = $producto->id;
       $this->product_name = $producto->product_name;
       $this->type_product = $producto->type_product;
       $this->stock = $producto->stock;
       $this->cost = $producto->cost;
       $this->title1 ='Editar';
       $this->title_alert="Editado";
       $this->text="El Producto ha sido Editado";
     }




    public function deleted($id){

       $this->dispatchBrowserEvent('deleted_product',['idDeleted'=> $id]);

    }

    public function destroy($id)
    {
         Products::findOrFail($id)->delete();
    }



    public function storeProduct()
    {
     $this->validate();

     Products::updateOrCreate(['id'=>$this->id_producto],
     [
         'product_name' => $this->product_name,
         'type_product' => $this->type_product,
         'stock' => $this->stock,
         'cost' => $this->cost,
     ]);



     $this->dispatchBrowserEvent('create_product',[     'logo'       => 'success',
      'title_alert' => $this->title_alert,
      'text_alert' => $this->text,]);
      $this->dispatchBrowserEvent('close_modal');
     $this->limpiar();
    }

    public function limpiar(){

     $this->product_name='';
     $this->type_product='';
     $this->stock='';
     $this->cost='';
     $this->id_producto= null;
    }


}
