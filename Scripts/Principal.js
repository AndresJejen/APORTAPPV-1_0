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
                "url" : "../Sistema/Select.php"
            },
            "columns":[
                {"data":"Id_Persona"},
                {"data":"Nombre_Cliente"},
                {"data":"Apellido1_Cliente"},
                {"data":"Apellido2_Cliente"},
                {"data":"DescripcionEstadoPersona"}
            ]
        });
}