    <script type="text/javascript" src="<?=base_url()?>/style/js/Usuario/im_usuario.js"></script>
    <body>
        <div class="container">
            <h1>Crear Usuario</h1>
             <form id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/usuarios/agregar">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="nombreUsuario" name="nombreUsuario" type="text" onblur="existeNombreUsuarioBlur()" class="validate">
                        <label for="nombreUsuario">Nombre de usuario</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="contrasena"  name="contrasena" type="password" class="validate">
                        <label for="contrasena">Contraseña</label>
                    </div>
                    
                    <div class="input-field col s6">
                        <input id="contrasena2"  name="contrasena2" type="password" class="validate">
                        <label for="contrasena2">Repetir nueva contraseña</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="nombre" name="nombre" type="text" class="validate">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="apellidos" name="apellidos" type="text" class="validate">
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="telefono" name="telefono" type="number" class="validate">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="correo" name="correo" type="email" class="validate">
                        <label for="correo">Correo</label>
                    </div>
                   <button type="button" class="btn bloquearBtn" onclick="existeNombreUsuario()">Crear</button>
                  </div>
               </form>
            </div>
        </div>
    </body>
</html>