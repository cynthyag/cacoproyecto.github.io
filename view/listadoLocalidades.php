<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Localidades</title>

    <!--- BOOSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
</head>
<body class="text-center bg-light">
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
                            <li><a href="altaPedido.php">Cargar pedido</a></li>
                            <li><a href="listadoPedidos.php">Listado de pedidos</a></li>
                        </ul>
                    </li>
                    <li><a href="">Acerca de</a>
                        <ul>
                            <li><a href="">Nosotros</a></li>
                            <li><a href="">Nuestra misi??n</a></li>
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
            <img class="d-block mx-auto mb-4" src="../images/logo.jpg" alt="Logo caba" width="72" height="72">
            <h2>Localidades</h2>
            <p class="lead">Listado de Localidades</p>
        </div>

        <table class="table table-hover table-sm">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("../dao/LocalidadDAO.php");
                    $locDAO = new LocalidadDAO();
                    $listLoc=$locDAO->listarLocalidades();
                    foreach ($listLoc as $loc) {
                        $idlocalidad=$loc->getIdLocalidad();
                        $nombre=$loc->getNombre();
                        $idProvincia=$loc->getIdProvincia();
                        echo "<tr>";
                            echo "<td>";
                                echo $loc->getIdLocalidad();
                            echo "</td>";
                            echo "<td>";
                                echo $loc->getNombre();
                            echo "</td>";
                            echo "<td>";
                                echo $loc->getIdProvincia();
                            echo "</td>";
                            echo "<td>";
                                echo "<a href='editarLocalidad.php?idlocalidad=$idlocalidad&nombre=$nombre&idProvincia=$idProvincia'>";
                                    echo "<i class='bi bi-pencil-fill mx-2'></i>";
                                echo "</a>"; //envio al archivo el id del us que qiero editar
                                echo "<a href='eliminarLocalidad.php?idlocalidad=$idlocalidad'>";
                                    echo "<i class='bi bi-trash3-fill mx-2'></i>";
                                echo "</a>"; //envio al archivo el id del us que qiero eliminar
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
         </table>
    </div>
</body>
</html>