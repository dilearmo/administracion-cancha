    <script type="text/javascript" src="<?=base_url()?>/style/js/Usuario/im_usuario.js"></script>
    <body>
        <div class="container">
            <h1>Editar Usuario</h1>
             <form id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/usuarios/editar">
                <div class="row">
                    <input type="hidden" id="idUsuario" name="idUsuario" value="<?=$datosUsuario->IdUsuario?>">
                    
                    <div class="input-field col s6">
                        <input id="nombreUsuario" name="nombreUsuario" type="text" value="<?=$datosUsuario->NombreUsuario?>" readonly>
                        <label for="nombreUsuario">Nombre de usuario</label>
                    </div>
                    
                    <div class="input-field col s6">
                        <input id="contrasena"  name="contrasena" type="password" class="validate" maxlength="45">
                        <label for="contrasena">Contraseña</label>
                    </div>
                    
                    <div class="input-field col s6">
                        <input id="contrasena2"  name="contrasena2" type="password" class="validate" maxlength="45">
                        <label for="contrasena2">Repetir nueva contraseña</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="nombre" name="nombre" type="text" value="<?=$datosUsuario->Nombre?>" class="validate"  maxlength="20">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="apellidos" name="apellidos" type="text" value="<?=$datosUsuario->Apellidos?>" class="validate"  maxlength="20">
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="telefono" name="telefono" type="number" value="<?=$datosUsuario->Telefono?>" class="validate">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="correo" name="correo" type="email" value="<?=$datosUsuario->Correo?>" class="validate" maxlength="30">
                        <label for="correo">Correo</label>
                    </div>
                   <button type="button" class="btn bloquearBtn" onclick="existeNombreUsuario()">Actualizar</button>
                  </div>
               </form>
            </div>
        </div>
    </body>
</html>