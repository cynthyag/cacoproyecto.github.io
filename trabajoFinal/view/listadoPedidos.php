
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pedidos</title>

    <<!--- BOOSTRAP CSS -->
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
            <img class="d-block mx-auto mb-4" src="../images/logo.jpg" alt="Logo caba" width="72" height="72">
            <h2>Pedidos</h2>
            <p class="lead">Listado de Pedidos</p>
        </div>

        <table class="table table-hover table-sm">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Localidad</th>
                    <th scope="col">Codigo Postal</th>
                    <th scope="col">Forma de pago</th>
                    <th scope="col">Tarj. Titular</th>
                    <th scope="col">Tarj, Numero</th>
                    <th scope="col">Tarj. Vto.</th>
                    <th scope="col">Tarj. Clave</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("../dao/PedidoDAO.php");
                    $pedDAO = new PedidoDAO();
                    $listPed=$pedDAO->listarPedidos();
                    foreach ($listPed as $ped) {
                        echo "<tr>";
                            echo "<td>";
                                echo $ped->getIdPedido();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getNombre();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getApellido();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getUsuario();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getMail();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getLocalidad();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getCp();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getFormaPago();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getTarjTitular();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getTarjNumero();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getTarjVto();
                            echo "</td>";
                            echo "<td>";
                                echo $ped->getTarjClave();
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
         </table>
    </div>
</body>
</html>