$(document).on("ready",function()
{
    listar();
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