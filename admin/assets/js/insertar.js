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
        })
            .done(function(res){
                document.getElementById('frmAjax').reset();
                Swal.fire({
                    icon: 'success',
                    title: 'Datos subidos exitosamente!',
                    showConfirmButton: false,
                    timer: 5000,
                    background: '#2B2B2B' 
                });
            });
   });
});