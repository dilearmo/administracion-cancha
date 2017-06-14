    <link href="<?=base_url()?>style/css/Usuario/listaUsuarios.css" type="text/css" rel="stylesheet">
     <script type="text/javascript" src="<?=base_url()?>style/js/Usuario/consultarUsuarios.js"></script>
     
		<div class="container">
		    <div class="row" style="margin-bottom: 0px; padding-top:70px;">
		        <div class="col s6">
		              <h4>Consultas de Usuarios</h4>
		        </div>
            </div>
            
            <div class="input-field col s12">
                <select id="seleccinarConsulta" onchange="mostrarConsulta()">
                      <option value="1" selected>Usuarios Administradores</option>
                      <option value="2">Usuarios de la aplicacion</option>
                      <option value="3">Usuarios Confiables</option>
                      <option value="4">Usuarios No Confiables</option>
                </select>
                <label>Seleccione la consulta que desea realizar</label>
           </div>
            

            <div class="tableWrapper" id="divtablaAdministradores">
                 <div id="scrollHoras">
                <table class="table table-striped col s12">
                     <?php
                        if(!empty($usuariosAdministradores)) {
                      ?>
                            <thead>
                                <tr>
                                    <th>Nombre de Usuario</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Rol</th>
                                    <th>Confiable</th>
                                </tr>
                            </thead>
                            <tbody id="cuerpoTabla">
                                <?php
                                    foreach($usuariosAdministradores as $usuario) {
                                ?>
                                <tr id="tr<?= $usuario->IdUsuario ?>">
                                    <td class="alinearCentro"><?= $usuario->NombreUsuario ?></td>
                                    <td><?= $usuario->Nombre ?> <?= $usuario->Apellidos ?></td>
                                    <td><?= $usuario->Correo ?></td>
                                    <td><?= $usuario->Telefono ?></td>
                                    <?php
                                        if($usuario->Es_administrador == 1) {
                                    ?>
                                    <td>Administrador</td>
                                    <?php
                                        }else{
                                    ?>
                                    <td>Usuario</td>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($usuario->habilitado == 1) {
                                    ?>
                                    <td class="alinearCentro">Sí</td>
                                    <?php
                                        }else{
                                    ?>
                                    <td class="alinearCentro">No</td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                                <?php
                                
                                    } else {
                                        echo '<h3>No hay usuarios registrados</h3>';    
                                    }
                                ?>
                    </table>
                </div>
             </div>
             
             <div class="tableWrapper" id="divtablaUAplicacion">
                 <div id="scrollHoras">
                <table class="table table-striped col s12">
                     <?php
                        if(!empty($usuariosAplicacion)) {
                      ?>
                            <thead>
                                <tr>
                                    <th>Nombre de Usuario</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Rol</th>
                                    <th>Confiable</th>
                                </tr>
                            </thead>
                            <tbody id="cuerpoTabla">
                                <?php
                                    foreach($usuariosAplicacion as $usuario) {
                                ?>
                                <tr id="tr<?= $usuario->IdUsuario ?>">
                                    <td class="alinearCentro"><?= $usuario->NombreUsuario ?></td>
                                    <td><?= $usuario->Nombre ?> <?= $usuario->Apellidos ?></td>
                                    <td><?= $usuario->Correo ?></td>
                                    <td><?= $usuario->Telefono ?></td>
                                    <?php
                                        if($usuario->Es_administrador == 1) {
                                    ?>
                                    <td>Administrador</td>
                                    <?php
                                        }else{
                                    ?>
                                    <td>Usuario</td>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($usuario->habilitado == 1) {
                                    ?>
                                    <td class="alinearCentro">Sí</td>
                                    <?php
                                        }else{
                                    ?>
                                    <td class="alinearCentro">No</td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                                <?php
                                
                                    } else {
                                        echo '<h3>No hay usuarios registrados</h3>';    
                                    }
                                ?>
                    </table>
                </div>
             </div>
             <div class="tableWrapper"  id="divtablaConfiables">
                <div id="scrollHoras">
                    <table class="table table-striped col s12">
                         <?php
                            if(!empty($usuariosConfiables)) {
                          ?>
                                <thead>
                                    <tr>
                                        <th>Nombre de Usuario</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Rol</th>
                                        <th>Confiable</th>
                                    </tr>
                                </thead>
                                <tbody id="cuerpoTabla">
                                    <?php
                                        foreach($usuariosConfiables as $usuario) {
                                    ?>
                                    <tr id="tr<?= $usuario->IdUsuario ?>">
                                        <td class="alinearCentro"><?= $usuario->NombreUsuario ?></td>
                                        <td><?= $usuario->Nombre ?> <?= $usuario->Apellidos ?></td>
                                        <td><?= $usuario->Correo ?></td>
                                        <td><?= $usuario->Telefono ?></td>
                                        <?php
                                            if($usuario->Es_administrador == 1) {
                                        ?>
                                        <td>Administrador</td>
                                        <?php
                                            }else{
                                        ?>
                                        <td>Usuario</td>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                            if($usuario->habilitado == 1) {
                                        ?>
                                        <td class="alinearCentro">Sí</td>
                                        <?php
                                            }else{
                                        ?>
                                        <td class="alinearCentro">No</td>
                                        <?php
                                            }
                                        ?>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                                    <?php
                                    
                                        } else {
                                            echo '<h3>No hay usuarios registrados</h3>';    
                                        }
                                    ?>
                        </table>
                </div>
             </div>
             
             <div class="tableWrapper"  id="divtablaNoConfiables">
                 <div id="scrollHoras">
                <table class="table table-striped col s12">
                     <?php
                        if(!empty($usuariosNoConfiables)) {
                      ?>
                            <thead>
                                <tr>
                                    <th>Nombre de Usuario</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Rol</th>
                                    <th>Confiable</th>
                                </tr>
                            </thead>
                            <tbody id="cuerpoTabla">
                                <?php
                                    foreach($usuariosNoConfiables as $usuario) {
                                ?>
                                <tr id="tr<?= $usuario->IdUsuario ?>">
                                    <td class="alinearCentro"><?= $usuario->NombreUsuario ?></td>
                                    <td><?= $usuario->Nombre ?> <?= $usuario->Apellidos ?></td>
                                    <td><?= $usuario->Correo ?></td>
                                    <td><?= $usuario->Telefono ?></td>
                                    <?php
                                        if($usuario->Es_administrador == 1) {
                                    ?>
                                    <td>Administrador</td>
                                    <?php
                                        }else{
                                    ?>
                                    <td>Usuario</td>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($usuario->habilitado == 1) {
                                    ?>
                                    <td class="alinearCentro">Sí</td>
                                    <?php
                                        }else{
                                    ?>
                                    <td class="alinearCentro">No</td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                                <?php
                                
                                    } else {
                                        echo '<h3>No hay usuarios registrados</h3>';    
                                    }
                                ?>
                    </table>
                </div>
             </div>
             
		</div>
