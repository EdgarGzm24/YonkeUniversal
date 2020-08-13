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
                alert("Datos subidos!");
            });
   });
});