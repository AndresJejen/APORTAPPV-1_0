jQuery(document).on('submit','#formolvido',function(event){
event.preventDefault();     
    jQuery.ajax({
    url:'Sistema/Select.php',
    type:'POST',
    dataType: 'json',
    data: {'Respuesta': $('#UsOlvido').val()},
    beforeSend: function(){
    }
})
.done(function(respuesta){
        if(!respuesta.error && $('#UsOlvido').val()!="") 
        {
            console.log(respuesta);
            location.href ="forgot.php?Olvido="+respuesta.admin;   
        }
        else
        {
            alertify.error("Usuario No Válido");
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

function actualizar(pass)
{
    
}
