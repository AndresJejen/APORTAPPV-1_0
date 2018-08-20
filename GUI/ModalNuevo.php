<link href="https://cdn.jsdelivr.net/css-toggle-switch/latest/toggle-switch.css" rel="stylesheet" />
<!-- Bootstrap Date-Picker Plugin -->
<style>
.switch-toggle {
  width: 100%;
}

.switch-toggle label:not(.disabled) {
  cursor: pointer;
}

    div.mitadr{
    width: 50%;  
        float:left;
        padding: 1%;
    }    
    div.mitadl{
       width: 50%; 
        float:right;
        padding: 1%;
    }    
</style>


<!-- Modal para Nuevo-->
<div class="modal fade" id="ModalNuevoAsociado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form action="" method="get" id="FormNuevo">
    <div class="modal-content">
      <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel" align="center"><B>Nuevo Asociado</B></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <label>Id Persona</label>
        <input type="text" name="NIdPersona" id="NIdPersona" pattern="[0-9]{1,20}" class="form-control input-sm" required>
        
        <div class=mitadr>
        <label>Genero</label>
        <div class="switch-toggle switch-2 switch-candy">
              <input id=M name="NGenero" type="radio" value="1" checked=""/>
              <label for="M" onclick="" >Masculino</label>

              <input id="F" name="NGenero" type="radio" value="2" />
              <label for="F" onclick="">Femenino</label>
              <a></a>
        </div>
        </div>
        <div class=mitadl >
        <label>Tipo Id</label>
        <div class="switch-toggle switch-5 switch-candy">
              <input id="CC" name="NTId" type="radio" value="1" checked=""/>
              <label for="CC" onclick="" >CC</label>

              <input id="Ti" name="NTId" type="radio" value="2"/>
              <label for="Ti" onclick="">TI</label>
              
              <input id="CE" name="NTId" type="radio" value="3"/>
              <label for="CE" onclick="">CE</label>
              
              <input id="NIT" name="NTId" type="radio" value="4"/>
              <label for="NIT" onclick="">NIT</label>
              
              <input id="Ot" name="NTId" type="radio" value="5"/>
              <label for="Ot" onclick="">Otro</label>
              <a></a>
        </div>
        </div>  
        
        <label>Nombre</label>
        <input type="text" name="NNombre" id="NNombre" pattern="[A-Z a-z]{1,50}" class="form-control input-sm" required>
        
        <label>Primer Apellido</label>
        <input type="text" name="N1Ape" id="N1Ape" pattern="[A-Za-z]{1,50}" class="form-control input-sm" required>
        
        <label>Segundo Apellido</label>
        <input type="text" name="N2Ape" id="N2Ape" pattern="[A-Za-z]{1,50}" class="form-control input-sm" required>        
        
        <label>Fecha de nacimiento</label>
        <div class='input-group date' id='datetimepicker1'>
                  <input type="text" id="NdateNac" name="NdateNac" class="form-control input-sm" readonly required/>     
                  <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
        </div>
         
         <script>
             var d = new Date();
             var n = d.getFullYear();
             var m = d.getMonth();
             jQuery.datetimepicker.setLocale('es');
             $("#NdateNac").datetimepicker({
	           lang:'es',
	           timepicker:false,
	           format:'Y-m-d',
	           formatDate:'Y-m-d',
	           //minDate:'-1970/01/02', // yesterday is minimum date
	           maxDate:'+1970/01/01', // and tommorow is maximum date calendar
               yearEnd: n
});
         </script>
     
        <label>Contacto</label>
        <input type="text" name="NContacto" id="NContacto" pattern="[0-9]{1,20}" class="form-control input-sm" required>
        
        <label>Dirección de Residencia</label>
        <input type="text" name="NDireccion" id="NDireccion" pattern="[A-Z a-z0-9]{1,50}" class="form-control input-sm" required>
        
        <label>Correo</label>
        <input type="text" name="NCorreo" id="NCorreo" pattern="[A-Za-z0-9_-@.]{1,50}" class="form-control input-sm" required>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type=submit class="btn btn-primary">Guardar Cambios</button>
      </div>
      </div>
    </form>  
  </div>
</div>