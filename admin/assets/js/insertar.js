$(document).ready(function(){
    $('#frmAjax').submit(function(e){
       e.preventDefault();
        
        let datos = new FormData(this);
        $.ajax({
            type: 'POST' ,
            url: 'validarProducto.php' ,
            dataType: 'html',
            data: datos, 
            cache: false,
            contentType: false,
            processData: false,
            success: function(){
                location.reload();
                Swal.fire({
                    icon: 'success',
                    title: 'Datos subidos exitosamente!',
                    showConfirmButton: false,
                    timer: 4000,
                    background: '#2B2B2B' 
                });
            }
        })
   });
});