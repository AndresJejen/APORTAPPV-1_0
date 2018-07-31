jQuery(document).on('submit','#form',function(event){
event.preventDefault();
$('#UsOlvido').val($('#nombre').val());     
    jQuery.ajax({
    url:'Sistema/Select.php',
    type:'POST',
    dataType: 'json',
    data: {'Olvido': $('#UsOlvido').val()},
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