//validacion del login 
$(document).ready(function () {
    var validacion = new Array();
    $("input.login").each(function () {
        validacion.push($(this))
    })
    $("#BtnLogin").on("click", function (e) {
        for (var i = 0; i < validacion.length; i++) {
            if (validacion[i].val().trim() == "") {
                e.preventDefault()
                validacion[i].removeClass("valido").addClass("invalido");
            } else {
                validacion[i].removeClass("invalido");
            }
        }
    })
});

