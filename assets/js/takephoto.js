
    

function capturar_foto(){
    document.addEventListener("DOMContentLoaded", function () {
    context.drawImage(video, 0,0, 300, 300);
});
    document.getElementById("canvas").style.display = 'block';
    document.getElementById("video").style.display = 'none';
    document.getElementById("btn_guardar").style.display = 'block';
}
function guardar_foto(){
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    var dataUrl = canvas.toDataURL();
    var formData = new FormData();

    formData.append("captura", dataUrl);

    $.ajax({
        url: "guardarimg.php",
        type: "POST",
        data: formData,
        cache: false,
        contentType: false,
        proccessData: false,
        success: function(resp){
            //var msj=JSON.parse(resp);
            var msj=resp;
            if(msj.error == 0){
                $("#mensaje").html(msj.mensaje);
                alert(msj.mensaje);
            }else{
                $("#mensaje").html(msj.mensaje);
                alert(msj.mensaje);
            }
        }
    });
}