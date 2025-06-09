
const dropArea = document.getElementById('drop-area');
const fileInput = document.getElementById('fileInput');

function preventDefaults(e) {
e.preventDefault();
e.stopPropagation();
}

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
dropArea.addEventListener(event, preventDefaults);
});

dropArea.addEventListener('dragover', () => {
dropArea.classList.add('drag-over');
});

dropArea.addEventListener('dragleave', () => {
dropArea.classList.remove('drag-over');
});

dropArea.addEventListener('drop', handleDrop);

function handleDrop(e) {
const files = e.dataTransfer.files;
if (files.length > 0) {
    fileInput.files = files; // optional: show in <input>
    alert(`Dropped ${files.length} file(s).`);
}
dropArea.classList.remove('drag-over');
}

