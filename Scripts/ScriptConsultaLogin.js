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
