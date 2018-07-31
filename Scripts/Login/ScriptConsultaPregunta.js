/*$(document).ready(function(){
    alert($('#RecuUsuario').val());
    
    jQuery.ajax({
    url:'Sistema/Select.php',
    type:'POST',
    dataType: 'json',
    data: {'PUser': "Admin2"},
    beforeSend: function(){
    }
    })
    .done(function(respuesta){
        if(!respuesta.error) 
        {
            console.log(respuesta);
            $('#RecuPregunta').val(respuesta.Padmin);
        }
        else
        {
            alertify.error("Usuario No Válido");
            console.log(respuesta);
        }
    })
    .fail(function(resp){
        console.log(resp);
        //location.href ="index.php";
    }) 
    .always(function(){
        console.log("complete");   
    }); 
});
*/
function pregunta(admin){
    
    jQuery.ajax({
    url:'Sistema/Select.php',
    type:'POST',
    dataType: 'json',
    data: {'PUser': admin},
    beforeSend: function(){
    }
    })
    .done(function(respuesta){
        if(!respuesta.error) 
        {
            console.log(respuesta);
            $('#RecuPregunta').val(respuesta.Padmin);
        }
        else
        {
            alertify.error("Usuario No Válido");
            console.log(respuesta);
        }
    })
    .fail(function(resp){
        console.log(resp);
        //location.href ="index.php";
    }) 
    .always(function(){
        console.log("complete");   
    }); 
}