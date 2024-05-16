document.getElementById('toggleServicios').addEventListener('click', function () {
    var serviciosContent = document.querySelectorAll('.serviciosContent');
    serviciosContent.forEach(function (content) {
        if (content.style.display === 'none') {
            content.style.display = 'block';
        } else {
            content.style.display = 'none';
        }
    });
});