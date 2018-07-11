/*jQuery(document).on('','#',function(event){
                    event.preventDefault();

jQuery.ajax({
    url:'',
    type:'POST',
    dataType: 'json',
    data: ,
    beforeSend: function(){
    
    }
})
.done(function(respuesta){
    console.log("success");   
})
.fail(function(resp){
    console.log("error");   
}) 
.always(function(){
    console.log("complete");   
});
});
*/
jQuery(document).on('submit','#formulario',function(event){
                    event.preventDefault();
jQuery.ajax({
    url:'Sistema/Objeto.php',
    type:'POST',
    dataType: 'json',
    data: $(this).serialize(),
    beforeSend: function(){
    
    }
})
.done(function(respuesta){
    console.log(respuesta);
    
    if(!respuesta.error)    
    {
        location.href='System/';
    }
    else
    {
        location.href ='index.php';   
    }
})
.fail(function(resp){
    console.log(resp);   
}) 
.always(function(){
    console.log("complete");   
});
});