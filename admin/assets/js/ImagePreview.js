function showImagePreview(e){
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();
    let input = e.currentTarget;
    let file = input.files[0];
           
    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(file);
    
      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function(){
          
        let preview = input.parentElement.querySelector('.image-preview'),
                image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
      };
}

let inputs_imagen = document.querySelectorAll('.inputfile');

inputs_imagen.forEach(input => {
    input.addEventListener('change', showImagePreview);
})