// Accede a 'puntuacion' y úsala en tu solicitud AJAX
fetch('../guardar-puntaje.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'id=' + encodeURIComponent(idDelUsuario) + '&puntaje=' + encodeURIComponent(window.puntuacion),
  })
  .then(response => response.json())
  .then(data => {
    // ...
  });