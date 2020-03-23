$(document).ready(function(){
    $('#encriptar').click(function(e){
        e.preventDefault();
        var datos = $.trim($("#entrada").val());
        var clave = $.trim($("#clave").val());
        $.ajax({
            data: {clave: clave, entrada: datos},
            url: 'back/transposicionclave_back.php',
            type: 'post',
            beforeSend: function(){
                $("#resultado").attr("placeholder", "Procesando ....");
            },
            success: function(response){
                $("#resultado").val(response);
            }
        });
    });
});
