document.querySelector('#enviarMP').addEventListener('click',function(){

    let nombre = document.querySelector('#nombre').value;
    let num_tel = document.querySelector('#telefono').value;
    let dire_evento = document.querySelector('#direccion').value;
    let tipo_evento = document.querySelector('#tipo_evento').value;
    let fecha_evento = document.querySelector('#fecha_evento').value;
    let decoracion_MP = document.querySelector('#decoracion_MP').value;
    let color_mobiliario = document.querySelector('#color_mobiliario').value;
    let cantidad_MP = document.querySelector('#cantidad_MP').value;

    let url = `https://api.whatsapp.com/send?phone=523221167064&text=
    *_ROSA APERLADO_*%0A
    *Mesa Postres*%0A%0A
    *Nombre*%0A
    ${nombre}%0A
    *Numero de telefono*%0A
    ${num_tel}%0A
    *Dirección del evento*%0A
    ${dire_evento}%0A
    *Tipo de evento*%0A
    ${tipo_evento}%0A
    *Fecha del evento*%0A
    ${fecha_evento}%0A
    *Decoración de la mesa*%0A
    ${decoracion_MP}%0A
    *Color mobiliario*%0A
    ${color_mobiliario}%0A
    *Cantidad de postres*%0A
    ${cantidad_MP}%0A`;

    window.open(url);

});