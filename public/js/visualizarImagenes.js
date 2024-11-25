document.getElementById('imagen').addEventListener('change', handleImageUpload);

function handleImageUpload(e) {
    const previewContainer = document.getElementById('preview');
    previewContainer.innerHTML = ''; 

    const files = e.target.files;

    
    Array.from(files).forEach(file => {
        const reader = new FileReader();
        reader.onload = function (event) {
            createImagePreview(event.target.result);
        };
        reader.readAsDataURL(file);
    });
}

function createImagePreview(imageSrc) {
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
    });
}

