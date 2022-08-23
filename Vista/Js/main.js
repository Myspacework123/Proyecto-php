$(document).ready(function () {

    $("#btnRegistro").click(function () {

        var nombre = $("#txtNombre").val();
        var apellido = $("#txtApellido").val();
        var direccion = $("#txtDireccion").val();

        var objData = new FormData();
        objData.append("nombres",nombre,"apellidos", apellido,"direccion", direccion);

        $.ajax({
            url: "Control/usuariosControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function (respuesta) {
            
        }) 

    })

})