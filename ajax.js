const formularios_ajax = document.querySelectorAll(".form__ajax");

function enviar_formulario_ajax(e) {
    e.preventDefault();
    let enviar = confirm("¿Estas seguro de enviar el archivo?");

    if (enviar === true) {
        let data = new FormData(this);
        let metodo = this.getAttribute('method');
        let accion = this.getAttribute('action');

        let encabezados = new Headers();
        let configuracion = {
            method: metodo,
            headers: encabezados,
            mode: 'cors',
            cache: 'no-cache',
            body: data
        };

        fetch(accion, configuracion)
            .then(respuesta => respuesta.text())
            .then(value => {
            alert(value)
        });
    }
}

formularios_ajax.forEach(
    formularios => {
        formularios.addEventListener("submit",
            enviar_formulario_ajax)
    }
);