function previewImage(event, input) {
    const file = event.target.files[0]; 
    const label = input.previousElementSibling; 

    if (file) {
        const reader = new FileReader(); 

        reader.onload = function(e) {
            const preview = document.createElement('img');
            preview.src = e.target.result; 

            label.innerHTML = ''; 
            label.style.height = 'auto';
            label.style.maxHeight = '20rem'
            label.style.background = 'none'
            label.appendChild(preview);
        };

        reader.readAsDataURL(file); 
    }
}