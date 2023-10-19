$("#consultaDNI").click(function(){
    var dni = $("#dni").val();
    if (dni.length === 8) {
        $("#mensajeError").text("");
        $.ajax({
            type: "POST",
            url: "consulta-dni-ajax.php", // Ruta al archivo PHP
            data: 'dni=' + dni,
            dataType: 'json',
            success: function(data) {
                if (data.error) {
                    $("#mensajeError").text(data.error);
                    $(".card").addClass("d-none");
                } else {
                    $("#nombre").html(data.nombres);
                    $("#apellidop").html(data.apellidoPaterno);
                    $("#apellidom").html(data.apellidoMaterno);
                    $(".card").removeClass("d-none");
                }
            },
            error: function() {
                $("#mensajeError").text("Error en la solicitud.");
                $(".card").addClass("d-none");
            }
        });
    } else {
        $("#mensajeError").text("Por favor, ingrese 8 dígitos.");
    }
});