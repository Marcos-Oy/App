<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include ('resources/views/layout/navbar.php'); ?>
        <?php include ('resources/views/layout/MainSidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2>Usuarios
                                        <a href="?control=Users&action=Create" class="justify-content-md-end">
                                            <button type="button" class="btn btn-success">
                                                Nuevo
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="UsersTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Rut</th>
                                                <th>Nombre</th>
                                                <th>E-Mail</th>
                                                <th>Teléfono</th>
                                                <th>Cargo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>FILA</td>
                                                <td>FILA</td>
                                                <td>FILA</td>
                                                <td>FILA</td>
                                                <td>FILA</td>
                                                <td>FILA</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <form method='POST' action='?control=Users&action=Edit'>
                                                                <button class="btn btn-warning" type='submit'
                                                                    name='username' value=""><i class="fas fa-pen"
                                                                        aria-hidden="true"></i>
                                                                </button>
                                                            </form>
                                                        </div>

                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <form method='POST'
                                                                action='?control=Users&action=Eliminarusuario'>

                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal" data-target="#modal-sm-des">
                                                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                                                </button>

                                                                <div class="modal fade" id="modal-sm-des">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Desactivar
                                                                                    usuario
                                                                                </h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>¿Desea desactivar el usuario de?
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer justify-content-between">
                                                                                <button type="button"
                                                                                    class="btn btn-default"
                                                                                    data-dismiss="modal">Cancelar</button>
                                                                                <button class="btn btn-danger"
                                                                                    type='submit' name='username'
                                                                                    value="">
                                                                                    Aceptar
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <form method='POST'
                                                                action='?control=Users&action=Activarusuario'>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-toggle="modal" data-target="#modal-sm-act">
                                                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                                                </button>

                                                                <div class="modal fade" id="modal-sm-act">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Activar usuario
                                                                                </h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>¿Desea activar el usuario de?
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer justify-content-between">
                                                                                <button type="button"
                                                                                    class="btn btn-default"
                                                                                    data-dismiss="modal">Cancelar</button>
                                                                                <button class="btn btn-success"
                                                                                    type='submit' name='username'
                                                                                    value="">
                                                                                    Aceptar
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Rut</th>
                                                <th>Nombre</th>
                                                <th>E-Mail</th>
                                                <th>Teléfono</th>
                                                <th>Cargo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include ('resources/views/layout/ControlSidebar.php'); ?>
        <?php include ('resources/views/layout/footer.php'); ?>

    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/dist/js/adminlte.min.js"></script>
    <!-- DataTables -->
    <?php include ('routes/DataTables.php'); ?>
</body>

</html>