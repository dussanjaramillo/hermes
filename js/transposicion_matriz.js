$(document).ready(function(){
    $('#matriz2').click(function(e){
        e.preventDefault();
        var datos = $.trim($("#entrada").val());
        $.ajax({
            data: {entrada: datos},
            url: 'back/transposicion_matriz.php',
            type: 'post',
            success: function(response){
                alert(response);
            }
        });
    });
});
