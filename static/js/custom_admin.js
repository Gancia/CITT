document.addEventListener('DOMContentLoaded', function () {
    const tipoField = document.querySelector('#id_tipo');
    const urlField = document.querySelector('#id_url');
    const archivoField = document.querySelector('#id_archivo');

    tipoField.addEventListener('change', function () {
        if (tipoField.value === 'otro') {
            urlField.parentElement.style.display = 'none';
            archivoField.parentElement.style.display = 'block';
        } else {
            urlField.parentElement.style.display = 'block';
            archivoField.parentElement.style.display = 'none';
        }
    });
});
