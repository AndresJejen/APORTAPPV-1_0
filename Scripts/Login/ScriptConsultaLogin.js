jQuery(document).on('submit','#formulario',function(event){
event.preventDefault();
jQuery.ajax({
    url:'Sistema/Select.php',
    type:'POST',
    dataType: 'json',
    data: $(this).serialize(),
    beforeSend: function(){
    }
})
.done(function(respuesta){
        if(!respuesta.error) 
        {
            console.log(respuesta);
            alertify.success("Bienvenido "+$('#nombre').val()+".",3,function(){location.href ='GUI/';});
        }
        else
        {
            alertify.error("Usuario o Contraseña No Válidos");
            $('#passw').val("");
            $('#nombre').val("");
            console.log(respuesta);
        }
})
.fail(function(resp){
    console.log(resp);   
}) 
.always(function(){
    console.log("complete");   
});
});
