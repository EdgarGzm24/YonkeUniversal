const inputFile = document.getElementById('file-1'),
      vistaText = document.getElementById('image-preview__txt');
let vistaPrevia = document.getElementById('image-preview-1');

function showImagePreview(e, vistaId){
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    if(reader.readAsDataURL(e.target.files[0])){

      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function(){
        let preview = document.getElementById(vistaId),
                image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
      };
    } else {
        
    }
}

inputFile.addEventListener("change", showImagePreview(vistaPrevia));