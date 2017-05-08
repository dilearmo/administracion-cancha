  <link rel="stylesheet" href="../style/css/Login/login.css">

  <body>
    <div class="form">
    
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrarse</a></li>
        <li class="tab"><a href="#login">Iniciar sesión</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h2 class="white-text center">Ingrese sus datos</h2>
          
          <form action="/" method="post">
          
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Nombre<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" />
              </div>
            
              <div class="field-wrap">
                <label>
                  Apellidos<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off"/>
              </div>
            </div>
            
            <div class="field-wrap">
              <label>
                Correo electrónico<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
              Contraseña<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
            
            <button type="submit" class="button button-block"/>Registrarme</button>
          
          </form>
          
        </div>
        
        <div id="login">   
          <h1>Bienvenido</h1>
          
          <form action="/" method="post">
          
          <div class="field-wrap">
            <label>
              Nombre de usuario<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">¿Olvidó su contraseña?</a></p>
          
          <button class="button button-block"/>Iniciar sesión</button>
          
          </form>
        
        </div>
      
      </div><!-- tab-content -->
      
    </div> <!-- /form -->

  <script src="../style/js/Login/login.js"></script>
  
  </body> 
</html>
