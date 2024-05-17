document.getElementById('terminosLabel').addEventListener('click', function() {
    var popup = document.getElementById('terminosPopup');
    popup.style.display = 'flex';
});

document.getElementById('cerrarPopup').addEventListener('click', function() {
    var popup = document.getElementById('terminosPopup');
    popup.style.display = 'none';
}); 