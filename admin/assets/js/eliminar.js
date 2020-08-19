function AlertaEliminacion(id) {
    
    Swal.fire({
        title: 'Estas seguro que deseas eliminar el auto?',
        text: 'El auto sera eliminado permanentemente',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminalo',
        background: '#2B2B2B' 
    }).then((result) => {
          if(result.value) {
            eliminarDatos(id);
          }
    })
}

function eliminarDatos(id) {

        $.ajax({
            type: 'POST' ,
            url: 'eliminarProductos.php' ,
            dataType: 'html',
            data: {id: id},
            beforeSend: function(){},
            success: function(){
                Swal.fire({
                    icon: 'success',
                    title: 'El auto ha sido eliminado exitosamente!',
                    showConfirmButton: false,
                    timer: 5000,
                    background: '#2B2B2B' 
                })
            }
        });
}