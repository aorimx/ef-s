
function post(url,data,successCallback,failCallback)//QUITAR DE AQUÍ
{
    console.log(url);
    $.ajax({
        'url':url,
        type:'POST',
        'data':data,
        cache:false,
        contentType:false,
        processData:false,
         
        //dataType:"json"
        success:successCallback, 
        error: failCallback
    });
}

function contactoEnviarMensajeBtn_click()
{
	console.log("enviando mensaje");
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
    formData.append('empresa',   $("input[name='nombre-empresa']").val() );
    formData.append('puesto',   $("input[name='puesto-empresa']").val() );
    formData.append('tel',   $("input[name='telefono']").val() );
    formData.append('email',   $("input[name='email']").val() );
    formData.append('asunto',   $("input[name='asunto']").val() );
    formData.append('mensaje',   $("textarea[name='mensaje']").val() );

	post('send-form.php',formData,function(data){
        swal("¡Tu mensaje ha sido enviado exitosamente!", "Te responderemos lo antes posible", "success");
		console.log("Exito al enviar el corre");
		console.log(data);
	},function(data){
		console.log("Error al enviar el corre");
		console.log(data);
    });	
    return false;
}
function contactoEnviarMensajeBtnP_click()
{
	console.log("enviando mensaje");
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombrep']").val() );
    formData.append('profesion',   $("input[name='profesion']").val() );
    formData.append('tel',   $("input[name='telefonop']").val() );
    formData.append('email',   $("input[name='emailp']").val() );
    formData.append('asunto',   $("input[name='asuntoP']").val() );
    formData.append('mensaje',   $("textarea[name='mensajep']").val() );

	post('send-form.php',formData,function(data){
        swal("¡Tu mensaje ha sido enviado exitosamente!", "Te responderemos lo antes posible", "success");
		console.log("Exito al enviar el corre");
		console.log(data);
	},function(data){
		console.log("Error al enviar el corre");
		console.log(data);
    });	
    return false;
}