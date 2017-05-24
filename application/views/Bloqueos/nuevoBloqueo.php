    <script type="text/javascript">
/* global $ */
/* global location */

    $(document).ready(function() {
   $("#Fecha").bind("change paste keyup", function() {
   return obtenerHoras(); 
});


function obtenerHoras() {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsBloqueo/bloqueables?fecha='+$("#Fecha").val(),
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
           $("#drop").empty();
            var $opcion0 = $("<option>", {"class": "btn-floating btn-large waves-effect waves-light red", "on":"true",  "disabled": "true",  "selected": "true"});
            $opcion0.html(" Elija la hora"); 
            $( "#drop" ).append($opcion0);
            for (var i = 0; i < response.length; i++ ) {
                llenar(response[i]);
            }    
             
            
             
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
});
}

function llenar (dato) {
     var $opcion = $("<option>");
     var $valor = dato.Hora;
     $opcion.html(dato.Hora +" horas");
     $( "#drop" ).append($opcion);
}

 
});
    </script>
    
        <div class="container">
            <h1>Crear Bloqueo</h1>
             <form id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/Bloqueos/agregar">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Fecha" required id="Fecha" type="date" class="validate">
                        
                    </div>
                    
                    <div class="input-field col s12">
                   <select id="drop" on required class="browser-default" name="hora">
                   
                           
                                  
                   </select>
                    </div>
                   <div class="input-field col s12 ">
                   <button type="submit" class="btn bloquearBtn">Crear</button>
                   </div>
                  </div>
               </form>
            </div>
       
