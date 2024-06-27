function log() {
    let cedula = $('#reg-cedula').val();
    let fecha = $('#reg-fecha').val();


    $.ajax({
    type: 'POST',
    url: 'resources/back/validate.php',
    dataType: 'html',
    data: {
        cedula: cedula,
        fecha: fecha
    },
    cache: false,
    success: function(msg) {
        if (msg.trim() == 'true') {
            window.location.href = 'main/index.php';
        } else if (msg.trim() == 'false') {
            $('#informacion').show()
         $('#informacion').html('No tienes acceso a la ruta, comunicate con el administrador')
            
        }else if(msg.trim() == 'dispositivo'){
         $('#informacion').show()
         $('#informacion').html('No se reconoce el dispositivo, por favor contacte al administrador')
        } else{
            alert(msg)
        }

        //ocultar #informacion despues de 5 segundos
        setTimeout(function() {
            $('#informacion').hide()
        }, 5000);

    }
}).fail(function(jqXHR, textStatus, errorThrown) {
    alert('Ocurrió un error, inténtelo nuevamente: ' + errorThrown)
});
}

$('#submit').click(function() {
    log();
});