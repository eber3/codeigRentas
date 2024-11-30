document.getElementById('imagen').addEventListener('change', handleImageUpload);

function handleImageUpload(e) {
    const previewContainer = document.getElementById('preview');
    previewContainer.innerHTML = ''; // Limpiar el contenedor de vista previa

    const files = e.target.files;

    // Si no hay archivos, no hacer nada
    if (!files.length) return;

    // Convertir los archivos en un array
    Array.from(files).forEach(file => {
        const reader = new FileReader();
        reader.onload = function (event) {
            createImagePreview(event.target.result, file);
        };
        reader.readAsDataURL(file);
    });
}

function createImagePreview(imageSrc, file) {
    const previewContainer = document.getElementById('preview');
    const imagePreview = document.createElement('div');
    imagePreview.classList.add('image-preview');

    imagePreview.innerHTML = `
        <img src="${imageSrc}" alt="Vista previa" style="max-width: 200px; max-height: 200px;">
        <button type="button" class="delete-btn">Eliminar</button>
    `;

    previewContainer.appendChild(imagePreview);

    const deleteButton = imagePreview.querySelector('.delete-btn');
    deleteButton.addEventListener('click', () => {
        
        imagePreview.remove();

        
        const fileList = Array.from(document.getElementById('imagen').files);
        const index = fileList.indexOf(file);

        if (index !== -1) {
        
            const dataTransfer = new DataTransfer();
            for (let i = 0; i < fileList.length; i++) {
                if (i !== index) {
                    dataTransfer.items.add(fileList[i]);
                }
            }

            
            document.getElementById('imagen').files = dataTransfer.files;
        }
    });
}
