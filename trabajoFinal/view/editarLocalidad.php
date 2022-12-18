<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Localidad</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
</head>
<body class="bg-light">
<header>
        <nav>
            <div id="header">
                <ul class="nav">
                    <li><a href="inicio.html">Inicio</a></li>
                    <li><a href="">Usuarios</a>
                        <ul>
                            <li><a href="altaUsuario.html">Crear Usuario</a></li>
                            <li><a href="listadoUsuarios.php">Listado de Usuarios</a></li>
                        </ul>
                    </li>
                    <li><a href="">Provincias</a>
                        <ul>
                            <li><a href="altaProvincia.html">Crear Provincia</a></li>
                            <li><a href="listadoProvincias.php">Listado de Provincias</a></li>
                        </ul>
                    </li>
                    <li><a href="">Localidades</a>
                        <ul>
                            <li><a href="altaLocalidad.php">Crear Localidad</a></li>
                            <li><a href="listadoLocalidades.php">Listado de Localidades</a></li>
                        </ul>
                    </li>
                    <li><a href="">Pedidos</a>
                        <ul>
                            <li><a href="pedido.php">Cargar pedido</a></li>
                            <li><a href="listadoPedidos.php">Listado de pedidos</a></li>
                        </ul>
                    </li>
                    <li><a href="">Acerca de</a>
                        <ul>
                            <li><a href="">Nosotros</a></li>
                            <li><a href="">Nuestra misión</a></li>
                            <li><a href="http://www.facebook.com">Historia</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="py-4 text-center">
            <img src="../images/logo.jpg" alt="Logo CABA" width="72" height="72" class="d-flex mx-auto mb-4">
            <h2>Editar de Localidad</h2>
        </div>
        <div class="col-md-12 text-center">
            <form action="../controller/actualizarLocalidad.php" method="post" class="needs-validation" >
                <input type="hidden" name="idlocalidad"  value="<?php echo $_GET['idlocalidad']; ?>">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Localidad</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_GET['nombre']; ?>"required>
                        <div class="invalid-feedback">
                                El nombre no puede estar vacio.
                        </div>   
                    </div>
                    <div class="col-md-6">
                        <label for="provincia" class="form-label">Provincia</label>
                        <select class="form-select" id="idProvincia" name="idProvincia" value="<?php echo $_GET['idProvincia']; ?>">
                            <option selected>Seleccione una provincia</option>
                            <?php  
                                require_once("../dao/ProvinciaDAO.php");
                                $dao = new ProvinciaDAO();
                                $listProv=$dao->listarProvincias();
                                foreach ($listProv as $prov) {
                                    $id=$prov->getIdProvincia();
                                    $nombre=$prov->getNombre();
                                    echo "<option value='$id'>$nombre</option>";
                                }
                            ?>      
                        </select>   
                    </div>
                </div>

                <hr class="mb-4">

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
                    </div>
                    <div class="col-4"></div>
                </div>
            </form>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>