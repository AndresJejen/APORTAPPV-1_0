$(document).on("ready",function()
{
    listar();
     $("#ModalNuevo").load('../GUI/ModalNuevo.php');
});

var listar = function()
{
    var table = $("#dt_cliente").DataTable(
        {
            "ajax":{
                "method" : "POST",
                "contentType": "application/json",
                "url" : "../Sistema/Select.php"
            },
            "columns":[
                {"data":"Id_Persona"},
                {"data":"Nombre_Cliente"},
                {"data":"Apellido1_Cliente"},
                {"data":"Apellido2_Cliente"},
                {"data":"DescripcionEstadoPersona"},
                {"defaultContent":"<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#ModalEditarAsociado' ><i class='fa fa-pencil-square-o' ></i></button>"}
            ]
        });
    Obtener_data_editar("#dt_cliente tbody",table);
}

var Obtener_data_editar = function(tbody ,table)
{
    $(tbody).on("click","button.editar",function()
    {
        var data = table.row( $(this).parents("tr") ).data();
        console.log(data);
    });
}

jQuery(document).on('submit','#FormNuevo',function(event){    
event.preventDefault();
jQuery.ajax({
    url:'../Sistema/Transacct.php',
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
            alertify.success("Usuario Exitosamente Registrado",3,retorno);
        }
        else
        {
            alertify.error("Error en el registro, "+respuesta.messageerror+".",3,retorno);
            $('#NIdPersona').val("");
            $('#NId').val("");
            $('#NNombre').val("");
            $('#N1Ape').val("");
            $('#N2Ape').val("");
            $('#NdateNac').val("");
            $('#NDireccion').val("");
            $('#NContacto').val("");
            $('#NCorreo').val("");
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

function retorno()
{
    location.href ="index.php";
}