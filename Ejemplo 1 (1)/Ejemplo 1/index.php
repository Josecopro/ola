<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container_fondo"><h1>Hola vv</h1>
        <div class="container_form"> "
            <form action="./data/inicio_registro.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                  <input type="email" name="txt_correo_inicio_sesion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Nosotros nunca compartiremos tu contraseña con alguien más.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" name="txt_contrasena_inicio_sesion" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="row">
                    <div class="row">
                       
                        <div class="col-2" >
                            <button type="submit" name="btn_inicio" class="btn btn_inicio_sesion">Inicio</button>
                        </div>
                       
                        <div class="col-2" id="">
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalregistro">Registro</a>
                        </div>
                    </div>

                </div>
              </form>   
        
            </div>
        </div>
    </div>    

  <!-- Modalregistro -->
  <div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="text" name="txt_nombre_registro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" name="txt_apellido_registro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                  <input type="email" name="txt_correo_registro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Nosotros nunca compartiremos tu contraseña con alguien más.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                    <input type="date"name="txt_fecha_registro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" name="txt_contrasena_registro" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
                    <input type="password" name="txt_ConfirmarContrasena_registro" class="form-control" id="exampleInputPassword1">
                  </div>
           
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
           <a href=""><button type="submit" name="btn_registro_usuario" class="btn btn-primary">Guardar Cambios</button></a>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
