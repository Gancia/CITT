document.addEventListener('DOMContentLoaded', function () {
    const esMultimediaCheckbox = document.querySelector('#id_es_multimedia');
    const archivosMultimediaField = document.querySelector('.field-archivos_multimedia');
    const archivoField = document.querySelector('.field-archivo');

    function toggleFields() {
        if (esMultimediaCheckbox.checked) {
            archivosMultimediaField.style.display = '';
            archivoField.style.display = 'none';
        } else {
            archivosMultimediaField.style.display = 'none';
            archivoField.style.display = '';
        }
    }

    // Inicializar la visibilidad de los campos
    toggleFields();

    // Escuchar cambios en el checkbox
    esMultimediaCheckbox.addEventListener('change', toggleFields);
});
