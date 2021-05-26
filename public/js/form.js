document.querySelector('#submit').addEventListener('click', function() {


    let nombre = document.querySelector('#nombre').value;
    let artista = document.querySelector('#artista').value;
    let tema = document.querySelector('#tema').value;

    if (nombre == "" || artista == "" || tema == "") {
        alert("llene todos los campos requeridos");
    } else {
        let url = "https://api.whatsapp.com/send?phone=59171835694&text=*_Solicitudes_de_Canción_*%0A*¿Cual es tu nombre?*%0A" + nombre + "%0A*Artista*%0A" + artista + "%0A*Tema o canción*%0A" + tema;
        window.open(url);
    }


});
