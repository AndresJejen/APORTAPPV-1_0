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
            $('#RecuUsuario').val(admin);
        }
        else
        {
            alertify.error("Usuario No Válido");
            console.log(respuesta);
        }
    })
    .fail(function(resp){
        console.log(resp);
        location.href ="index.php";
    }) 
    .always(function(){
        console.log("complete");   
    }); 
}

jQuery(document).on('submit','#formolvido',function(event){
event.preventDefault();    
    jQuery.ajax({
    url:'Sistema/Select.php',
    type:'POST',
    dataType: 'json',
    data: {'User': $('#RecuUsuario').val(),'Resp': $('#RecuRespuesta').val()},
    beforeSend: function(){
    }
})
.done(function(respuesta){
        if(!respuesta.error && respuesta.resp == $('#RecuRespuesta').val()) 
        {
            if($('#RecuPass').val() == $('#RecuConfPass').val())
            {
               actualizar();
            }
            else
            {
                alertify.error("Contraseñas No coinciden");
                $('#RecuPass').val("");
                $('#RecuConfPass').val("");                                                             
            }
            console.log(respuesta);
        }
        else
        {
            alertify.error("Repuesta No Válida");
            $('#RecuRespuesta').val("");
            $('#RecuPass').val("");
            $('#RecuConfPass').val("");
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

function actualizar()
{
    jQuery.ajax({
    url:'Sistema/Transacct.php',
    type:'POST',
    dataType: 'json',
    data: {'UpdatePassUser': $('#RecuUsuario').val(),'UpdatePass': $('#RecuPass').val()},
    beforeSend: function(){
    }
    })
    .done(function(respuesta){
        if(!respuesta.error) 
        {
            console.log(respuesta);
            alertify.success("Contraseña Actualizada",3,retorno);
            //setTimeout(retorno(),10000);
        }
        else
        {
            alertify.error("Ocurrió Un error en el servidor :/ ",3,retorno);
            console.log(respuesta);
            //setTimeout(retorno(),10000);
        }
    })
    .fail(function(resp){
        console.log(resp);
        alertify.error("Ocurrió Un error en el servidor :/ ",3,retorno);
        console.log(respuesta);
        //setTimeout(retorno(),10000);
    }) 
    .always(function(){
        console.log("complete");   
    }); 
}

function retorno()
{
    location.href ="index.php";
}