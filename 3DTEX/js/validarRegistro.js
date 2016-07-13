//validacion del registro 
$(document).ready(function () {
    //Arreglo de inputs
    var validacion = new Array();
    $("input.registro").each(function () {
        validacion.push($(this))
    })

    //Variables de mensajes
    var MRCorreo = $("#mensajeRegistroCorreo");
    var MRContraseña = $("#mensajeRegistroContraseña");
    var MRigualdadCon = $('#mensajeRegistroIgualdadContraseña');
    var MRNombre = $("#mensajeRegistroNombre");
    var MRterminos = $("#mensajeRegistroterminos");

    MRContraseña.hide();
    MRNombre.hide();
    MRCorreo.hide();
    MRigualdadCon.hide();
    MRterminos.hide();

 // Inicion Evento Boton
$("#BtnRegistro").on("click", function (e) {
        
        //Variables de input
        var Nombre = $('#Rnombre').val().trim();
        var correo = $("#Rcorreo").val().trim();
        var contra = $("#Rcontrasena").val().trim();
        var veriContra = $("#RverificarContraseña").val().trim();
        var term = $("input[name='terminos']:checked").val();   
        
        // Exprecion regular 
        var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var expr2 = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/;
        var expr3 = /^[a-zA-Z0-9]+$/;
        
        //Ciclo para validar inputs
        for (var i = 0; i < validacion.length; i++) {
            if (validacion[i].val().trim() == "") {
                e.preventDefault()
                validacion[i].removeClass("valido").addClass("invalido");
            }else{
                validacion[i].removeClass("invalido").addClass("valido");
            } 
        }

        // Validar radio
        if (term == null || term == "no") {
            e.preventDefault()
            $("input[name='terminos']:checked").removeClass("valido").addClass("invalido");
            MRterminos.slideDown();
        }else{
            $("input[name='terminos']:checked").removeClass("invalido").addClass("valido");
            MRterminos.hide();
        }

        //Validar Nombre
            if (!expr3.test($('#Rnombre').val().trim()) || Nombre == "") {
                MRNombre.slideDown();
            } else {
                MRNombre.hide();
            }
        //validar Contraseña
            
            if (!expr2.test($("#Rcontrasena").val().trim()) || contra == "") {
                MRContraseña.slideDown();
            }else{
                MRContraseña.hide();
            }

        //Validar correo
            
            if (!expr.test($("#Rcorreo").val().trim()) || correo == "") {
                MRCorreo.slideDown();
            }else{
                MRCorreo.hide();
            }

        // Validar Igualdad de contraseña

            if (veriContra == "" || veriContra != contra) {
                MRigualdadCon.slideDown();
            }else{
                MRigualdadCon.hide();
            }    
    })  
    //Fin Evento Boton
});

//contraseña Segura
$(document).ready(function () {
$('#Rcontrasena').keyup(function () {
        // set password variable
        var pswd = $(this).val();
        $("#mensajeRegistroContraseña").hide();
        //validate the length
        if (pswd.length < 8) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');

        }

        //validate letter
        if (pswd.match(/[A-z]/)) {
            $('#letter').removeClass('invalid').addClass('valid');
        } else {
            $('#letter').removeClass('valid').addClass('invalid');
        }

        //validate capital letter
        if (pswd.match(/[A-Z]/)) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $('#capital').removeClass('valid').addClass('invalid');
        }

        //validate number
        if (pswd.match(/\d/)) {
            $('#number').removeClass('invalid').addClass('valid');
        } else {
            $('#number').removeClass('valid').addClass('invalid');
        }

    }).focus(function () {
        $('#pswd_info').show();
    }).blur(function () {
        $('#pswd_info').hide();
    });

});
// contraseñas iguales
$(document).ready(function () {
    $('#RverificarContraseña').keyup(function () {
        // set password variable
        var pswd = $(this).val();
        var pass = $("#Rcontrasena").val().trim();
        $('#mensajeRegistroIgualdadContraseña').hide();
        //validate the length
        if (pswd != pass) {
            $('#Validara').removeClass('valid').addClass('invalid');
            return false;
        } else {
            $('#Validara').removeClass('invalid').addClass('valid');

        }
    }).focus(function () {
        $('#Varpswd_info').show();
    }).blur(function () {
        $('#Varpswd_info').hide();
    });

});