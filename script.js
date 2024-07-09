// script.js
document.addEventListener('DOMContentLoaded', function() {
    const juegos = document.querySelectorAll('.juego');

    juegos.forEach(juego => {
        juego.addEventListener('click', function() {
            alert('Has hecho clic en ' + this.querySelector('h3').innerText);
        });
    });
});
