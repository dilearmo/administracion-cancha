    <script type="text/javascript" src="<?=base_url()?>/style/js/Usuario/im_usuario.js"></script>
    <body>
        <div class="container">
            <h1>Crear Usuario</h1>
             <form id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/usuarios/agregar">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="nombreUsuario" type="text" class="validate">
                        <label for="nombreUsuario">Nombre de usuario</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="contrasena" type="password" class="validate">
                        <label for="contrasena">Contraseña</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="nombre" type="text" class="validate">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="apellidos" type="text" class="validate">
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="telefono" type="text" class="validate">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="correo" type="email" class="validate">
                        <label for="correo">Correo</label>
                    </div>
                    <!--
                    <div class="input-field col s6">
                    <select>
                      <option value="" disabled selected>Seleccionar</option>
                      <option value="1" >Administrador</option>
                      <option value="2">Usuario</option>
                    </select>
                    <label>Seleccione el rol</label>
                    -->
                   <button type="button" class="btn bloquearBtn" onclick="existeNombreUsuario()">Crear</button>
                  </div>
               </form>
            </div>
        </div>
    </body>
</html>