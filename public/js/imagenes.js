
 const imageInput = document.getElementById('imagen');
 const previewContainer = document.getElementById('preview');

 
 imageInput.addEventListener('change', function(event) {
     
     previewContainer.innerHTML = '';

     
     const files = event.target.files;

     for (let i = 0; i < files.length; i++) {
         const file = files[i];

        
         if (file.type.startsWith('image/')) {
        
             const reader = new FileReader();

        
             reader.onload = function(e) {
            
                 const imageContainer = document.createElement('div');
                 imageContainer.classList.add('image-container');
                 
                 
                 const img = document.createElement('img');
                 img.src = e.target.result;  
                 img.alt = file.name;  

                 
                 imageContainer.appendChild(img);
                 
                
                 previewContainer.appendChild(imageContainer);
             };

        
             reader.readAsDataURL(file);
         } else {
             alert('Por favor, selecciona solo imágenes.');
         }
     }
 });