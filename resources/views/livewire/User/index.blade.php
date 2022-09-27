@extends('layouts.index')
@section('content')
<div>
    
@can('admin_menu')
<h4>Bienvenido Administrador {{Auth::user()->name}}</h4>
@endcan

@can('user_menu')
<h4>Bienvenido {{Auth::user()->name}} , eres un Usuario</h4>
@endcan


@push('js')
<script>
    Echo.channel('orders')
        .listen('OrderShipped', (e) => {
            console.log(e.order.name);
        });
    
    </script> 
@endpush






</div>
@endsection


