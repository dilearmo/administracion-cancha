/* global $ */
/* global toastr */
/* global target */


var base_url = "https://cancha-la-primavera-dilearmo.c9users.io/index.php/";


('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

$(document).ready(function() {
    if (typeof(Storage) !== "undefined") {
        var nombreUsuario = localStorage.getItem('NombreUsuario');
        if(nombreUsuario != undefined && nombreUsuario != "") {
            window.location.href = 'index.html';
        }
    } else {
        toastr.info("Lo sentimos,<br>su teléfono no es<br>compatible con esta<br>aplicación");
    }
});

function existeNombreUsuario() {
    var contrasena = $("#contrasena").val().trim();
    var nombreUsuario = $("#nombreUsuario").val().trim();
    if(nombreUsuario.length > 0 && contrasena.length > 0) { 
        $.ajax({
            url: base_url + "WSUsuario/existeNombreUsuario?nombreUsuario=" + nombreUsuario,
            timeout: 10000,
            dataType: 'jsonp',
            success: function(response) {
                if(response == true) {
                    validarCredenciales(nombreUsuario, contrasena);
                } else {
                    toastr.error("El nombre de usuario<br><b>" + nombreUsuario + "</b><br>no existe");
                }
            },
            error: function() {
                toastr.error("Error de conexión");
            }
        });
    } else {
        toastr.warning("Indique su nombre de usuario<br>y contraseña");
    }
}

function validarCredenciales(nombreUsuario, contrasena) {
    $.ajax({
        url: base_url + "WSUsuario/validarCredenciales?nombreUsuario="+nombreUsuario+"&contrasena="+contrasena,
        dataType: "jsonp",
        timeout: 10000,
        success: function(response) {
            if(response == false) {
                toastr.error("Nombre de usuario o <br>contraseña incorrectos");
            } else {
                $('#loginForm').submit();
            }
        },
        error: function() {
            alert('Error');
            toastr.error("Error de conexión");
        }
    });
}


