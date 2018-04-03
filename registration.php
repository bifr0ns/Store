<?PHP
include_once('lib/header.php');
?>
<br><br><br><br><br>
<div class="row mx-0 justify-content-md-center">
    <div class="col-12 px-0 col-md-auto">
        <h1>Registro nuevo usuario</h1>
        <p>(*) Campos obligatorios</p>
    
        
    </div>
    
</div>

<form class="form-horizontal row justify-content-md-center" action="/action_page.php">
<div class="col-md-auto">
  <div class="form-group d-flex">
    <label class="control-label col-sm-3 my-auto" for="email">Nombre: *</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Ingresa tu nombre">
    </div>
  </div>
  <div class="form-group d-flex">
    <label class="control-label col-sm-3" for="pwd">Apellido(s):*</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="pwd" placeholder="Ingresa tus apellidos">
    </div>
  </div>
  <div class="form-group d-flex">
    <label class="control-label col-sm-3" for="pwd">Email:*</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group d-flex">
    <label class="control-label col-sm-3" for="pwd">Verificar email:*</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group d-flex">
    <label class="control-label col-sm-3" for="pwd">Contraseña:*</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group d-flex">
    <label class="control-label col-sm-3" for="pwd">Verificar contraseña:*</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</div>
</form>

<?PHP
include_once('lib/footer.php');
?>
</div>
</body>

<script src="js/structure/structure.js"></script>
<script src="js/structure/init.js"></script>
<script src="js/structure/dao.js"></script>
<script src="js/structure/function.js"></script>

</html>
