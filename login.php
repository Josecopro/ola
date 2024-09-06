<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animayuda</title>
  <link rel="icon" href="Diseño_sin_título__4_-removebg-preview.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./logins.css">
  <style>

</style>
</head>

<body>
  <div class="contetainer_titulo">
    <div class="row">
      <div class="col-5 text-right" style="text-align: right;">
        <a href=""><img src="./media/Diseño_sin_título__4_-removebg-preview.png" width="50px" alt=""></a>
      </div>
      <div class="col-7 text-left">
        <h1 style="color:pink">ANIMAYUDA</h1>
      </div>
    </div>
  </div>

  <div class="container" >
    <div class="row" style="margin-top: 10px;">
      <h4 style="font-size: 25px;" id="amoalaura">Inicia sesión o regístrate para acceder a la información de nuestra
        página.</h4>
    </div>
    <div class="row">
      <div class="container">
        <div class="col">
          <div class="row text-center">
            <a href=""><img src="./media/WhatsApp_Image_2024-08-09_at_7.56.48_PM-removebg-preview (1).png" width="150px" alt=""></a>
          </div>
          <div class="row">
            <div class="container content_formulario">
              <form action="./data/inicio_registro.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                  <input type="email" name="txt_correo_inicio_sesion" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" name="txt_contrasena_inicio_sesion" class="form-control"
                    id="exampleInputPassword1">
                  </div>
                  <p >¿Olvidaste tu contraseña? <a id="tilinazo" href="./recuperar.html">haz click aquí</a></p>
                <div class="row">

                  <div class="col-3">
                    <button type="submit"  name="btn_inicio" class="btn btn_inicio_sesion">
                      <a id="inicioa" href="./pag_inicio.html">Inicio</a></button>
                  </div>

                  <div class="col-2">
                    <button type="submit" name="btn_inicio" class="btn btn_inicio_sesion"><a id="inicio" href=""
                        data-bs-toggle="modal" data-bs-target="#modalregistro">Registro</a></button>
                  </div>
                </div>
              </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modalregistro -->
 
  <div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="./data/inicio_registro.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" name="txt_nombre_registro" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" name="txt_apellido_registro" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                  <input type="email" name="txt_correo_registro" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Nosotros nunca compartiremos tu contraseña con alguien más.
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                  <input type="date" name="txt_fecha_registro" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" name="txt_contrasena_registro" class="form-control"
                      id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
                    <input type="password" name="txt_ConfirmarContrasena_registro" class="form-control"
                      id="exampleInputPassword1">
                  </div>
                  <div>
                  <select class="form-select" name="tipo_doc" aria-label="Default select example">
                 <option selected>Tipo de documento</option>
                 <option value="1">CÉDULA DE CIUDADANÍA</option>
                 <option value="2">TARJETA DE IDENTIDAD</option>
                 <option value="3">DOCUMENTO EXTRANJERO</option>
                 <option value="4">CÉDULA EXTRANJERA</option>
                 <option value="5">PASAPORTE</option>
                 <option value="6">REGISTRO CIVIL</option>
                 </select>
                  </div>
                  <div class="mb-3">
                <label for="exampleInputDocument1" class="form-label">Documento</label>
                <input type="tel" name="txt_documento_usuario" class="form-control" id="exampleInputDocument1"
                  aria-describedby="exampleInputDocument1">
                </div>
                <div>
                <label for="exampleInputEmail1" class="form-label">Fecha de Expedición del Documento</label>
                  <input type="date" name="txt_fechaexp_documento" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                </div>
                <div>
                <label for="exampleInputEmail1" class="form-label">Ciudad de Expedición del Documento</label>
                <input type="text" name="txt_ciudadExp_documento" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
                 
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <a href=""><button type="submit" name="btn_registro_usuario" class="btn btn-primary">Guardar
              Cambios</button></a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>