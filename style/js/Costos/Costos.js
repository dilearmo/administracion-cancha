/* global $ */

    var contador = 0;
    
$(document).ready(function() {
$( "#sessionSub" ).hide();

 
 
 return llenarPrecios(); 
  
});

function habilitar () {
    //$("#formulario input").prop("enabled", true);
    // $('.input').removeAttribute("disabled");
    $( "#sessionSub" ).show();
    $( "#btnEditar" ).hide();
    $("#formulario").submit(function(e){
    e.preventDefault();
  });
    
    for (var i = 0; i <= 125; i++) {
        document.getElementsByTagName("input")[i].removeAttribute("disabled"); 
    }
    
    $('#formulario').submit( function(ev){

         ev.preventDefault();

         //later you decide you want to submit
         $(this).unbind('submit').submit()

  });
    
}

function llenarPrecios() {
    $(function() {
    
        $.ajax({
            type: 'GET',
            url: 'https://cancha-la-primavera-dilearmo.c9users.io/index.php/WsCostos/costos',
            dataType: 'jsonp',
            contentType: 'application/json; charset=utf-8',
            success: function(response) {
              for (var i = 1; i <= 7; i++) {
               llenar(i, response);
              } 
            },
            error: function(error) {
                alert('no hay horas en la base de datos');
            }
        });
   
});
}

function llenar(n, datos) {
    for (var i = 1; i <= 18; i++) {
    document.getElementById(n+'.'+i).value = datos[contador].Precio;
    contador++;
}
    
    
}

