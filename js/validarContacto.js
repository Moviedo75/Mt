//validacion del login 
$(document).ready(function () {
    var validacion = new Array();
    $("input.Contactos").each(function () {
        validacion.push($(this))
    })

    // variable mensajes
    var MCtextarea = $("#mensajeContactoTextArea");
    var MCnombre = $("#mensajeContactonombre");
    var MCemail = $("#mensajeContactocorreo");
    var MCdest = $("#mensajeContactodest");

    MCtextarea.hide();
    MCnombre.hide();
    MCemail.hide();
    MCdest.hide();

    $("#BtnoContactos").on("click", function (e) { 

        //Variables de validacion
        var Mensaje = $("#Cmensaje").val().trim();
        var nombre = $("#Cnombre").val().trim();
        var correo = $("#Ccorreo").val().trim();
        var Dest = $("#Cdestinatario").val().trim();

        // EXPRECION REGULAR
        var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;


        // ciclo de inputs vacios
        for (var i = 0; i < validacion.length; i++) {
            if (validacion[i].val().trim() == "" ) {
                e.preventDefault();
                validacion[i].removeClass("valido").addClass("invalido");
                
            } else {
                validacion[i].removeClass("invalido");
                
            }
        }

        //Validacion TextArea
        if ( Mensaje == "") {
            e.preventDefault();
            $("#Cmensaje").removeClass("valido").addClass("invalido");
            MCtextarea.slideDown();
        }else{
            $("#Cmensaje").removeClass("invalido");
            MCtextarea.hide();
        }

        //Validacion nombre 
        if (nombre == "") {
            MCnombre.slideDown();
        } else {
            MCnombre.hide();
        }

        //Validar correo
        if (!expr.test($("#Ccorreo").val().trim()) ||correo == "") {
            MCemail.slideDown();
        }else{
            MCemail.hide();
        }

        //Validar Destinatario
        if (!expr.test($("#Cdestinatario").val().trim()) ||Dest ==  "") {
            MCdest.slideDown();
        }else{
            MCdest.hide();
        }
    })
});

