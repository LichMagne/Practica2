
//#region ALERTAS

Livewire.on('deletedP', dId =>{
    Swal.fire({
    title: 'Estas seguro que quieres continuar?',
    text: "Acuerdate que esto borrara permanentemente los datos",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, borralo!'
    }).then((result) => {
    if (result.isConfirmed) {
    Livewire.emit('destroy',dId);
    Swal.fire(
      'Eliminado!',
      'El dato seleccionado ha sido eliminado',
      'success'
    )
    }
    })
    });

    Livewire.on('deletedAll',d=>{
        Swal.fire({
        title: 'Estas seguro que quieres continuar?',
        text: "Acuerdate que esto borrara permanentemente todos los Datos",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo!'
        }).then((result) => {
        if (result.isConfirmed) {
        Livewire.emit('dropall');
        Swal.fire(
          'Eliminado!',
          'Todos los Datos fueron eliminados',
          'success'
        )
        }
        })
        });




    window.addEventListener('close_modal',event=>{
        $('#createModal').modal('hide');
        });


    window.addEventListener('deleted_product',event=>{

         Swal.fire({
    title: 'Estas seguro que quieres continuar?',
    text: "Acuerdate que esto borrara permanentemente los datos",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, borralo!'
        }).then((result) => {
        if (result.isConfirmed) {

        Livewire.emit('destroy',event.detail.idDeleted);


        Swal.fire(
            'Eliminado!',
            'El dato seleccionado ha sido eliminado',
            'success'
        )
        }
        })

        });

   
    window.addEventListener('create_product',event=>{

        Swal.fire({
      icon: event.detail.logo,
      title: event.detail.title_alert,
      text: event.detail.text_alert,

    })
    });
    //#endregion






