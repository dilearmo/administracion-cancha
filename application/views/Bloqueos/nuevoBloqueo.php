    
    
        <div class="container">
            <h1>Crear Usuario</h1>
             <form id="formNuevoUsuario" method="post" action="<?=base_url()?>index.php/Bloqueos/agregar">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Fecha" required id="Fecha" type="date" class="validate">
                        
                    </div>
                    
                    <div class="input-field col s12">
                   <select required class="browser-default" name="hora">
                    <option value="" disabled selected>Elija la hora</option>
                   <option value="6">6:00am</option>
                  <option value="7">7:00am</option>
                   </select>
                    </div>
                   <div class="input-field col s12 ">
                   <button type="submit" class="btn bloquearBtn">Crear</button>
                   </div>
                  </div>
               </form>
            </div>
       
