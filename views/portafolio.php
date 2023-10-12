<?php include("../templates/header.php"); ?>
<?php include_once("../config/conexion.php") ?>

<?php
//* Insertar INSERT INTO
if ($_POST) {

    $fecha = new DateTime('now');

    //Datos del formulario
    $project = $_POST['proyecto'];
    $owner = $_POST['titular'];
    $contact = $_POST['contacto'];
    $email = $_POST['correo'];
    $img = $fecha->format('Y-m-d-H:i:s') . "-" . $_FILES['imagen']['name'];
    $desc = $_POST['descripcion'];
    $tipoProyecto = $_POST['tProyecto'];
    $host = $_POST['host'];
    $precio = $_POST['precio'];
    $descProyect = $_POST['descProyecto'];
    $url = $_POST['link'];
    $database = $_POST['database'];
    $userdb = $_POST['userdb'];
    $pwd = $_POST['passdb'];
    $user = $_POST['user'];
    $pwdW = $_POST['pass'];



    //# obtenemos la imagen de manera temporal
    $imagen_temporal = $_FILES['imagen']['tmp_name'];

    //# movemos la imagen temporal para agregarla a la ruta donde vamos a guardar las imagenes.
    move_uploaded_file($imagen_temporal, "../images/" . $img);

    //! Instanciamos la class conexion del archivo /config/conexion.php para crear nuestro objeto $objConexion
    $objConexion = new Conexion();

    //! Consulta de inserción guardada en la variable $sql
    $sql = "INSERT INTO `proyectos` (`id`, `proyecto`, `titular`, `contacto`, `correo`, `imagen`, `descripcion`, `tipo`, `descsite`, `precio`, `host`, `ruta`, `basedb`, `usuariodb`, `passwordb`, `usuario`, `password`) VALUES (NULL, '$project', '$owner', $contact, '$email', '$img', '$desc', '$tipoProyecto', '$host', $precio, '$descProyect', '$url', '$database', '$userdb', '$pwd', '$user', '$pwdW');";

    //! mandamos a llamar el método ejecutar() de nuestro obj $objConexion
    $objConexion->ejecutar($sql);

    header('location:portafolio.php');
}

//* Eliminar DELETE
if ($_GET) {

    $id = $_GET['borrar'];
    $objConexion = new Conexion();

    $imagen = "SELECT imagen FROM `proyectos` WHERE id =" . $id;

    //borrado del archivo en la carpeta images
    $consulta = $objConexion->eliminar($imagen);
    unlink("../images/" . $consulta[0]['imagen']);

    //borrado del resgistro en la DB
    $sql = 'DELETE FROM `proyectos` WHERE `proyectos`.`id` = ' . $id;
    $objConexion->ejecutar($sql);

    header('location:portafolio.php');
}

//* Consultar (SELECT * FROM)
$objConexion = new Conexion();
$sql = "SELECT * FROM proyectos";
$resultado = $objConexion->consultar($sql);

?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid d-flex flex-wrap">
            <div class="col-12 col-md-6 mt-4 px-2">
                <div class="card black-card">
                    <div class="card-body">
                        <div class="row">
                            <h5>Agregar un Proyecto</h5>
                            <section>
                                <form action="portafolio.php" method="post" enctype="multipart/form-data">
                                    <div class="row my-4">
                                        <div class="accordion" id="accordionExample">
                                            <!-- Collapse 1 -->
                                            <div class="accordion-item black-form">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button black-form" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Información del cliente
                                                    </button>
                                                </h2>

                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                                                    <div class="row my-4">
                                                        <div class="mb-4 px-4 col-12 col-md-6">
                                                            <label for="project" class="form-label">Proyecto</label>
                                                            <input type="text" class="form-control" name="proyecto" id="project" placeholder="proyecto">
                                                        </div>
                                                        <div class="mb-4 px-4 col-12 col-md-6">
                                                            <label for="resp" class="form-label">Titular</label>
                                                            <input type="text" class="form-control" name="titular" id="resp" placeholder="responsable">
                                                        </div>
                                                    </div>
                                                    <div class="row my-4">
                                                        <div class="mb-4 px-4 col-12 col-md-6">
                                                            <label for="contact" class="form-label">Contacto</label>
                                                            <input type="" class="form-control" name="contacto" id="contact" placeholder="teléfono">
                                                        </div>
                                                        <div class="mb-4 px-4 col-12 col-md-6">
                                                            <label for="mail" class="form-label">Correo</label>
                                                            <input type="email" class="form-control" name="correo" id="mail" placeholder="corre@mail.com">
                                                        </div>
                                                    </div>
                                                    <div class="row my-4">
                                                        <div class="mb-4 px-4 col-12">
                                                            <label for="desc" class="form-label">Descripción de la empresa</label>
                                                            <textarea name="descripcion" id="desc" cols="" rows="2" class="form-control" placeholder="breve descripción de la empresa..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row my-4">
                                                        <div class="mb-4 px-4 col-12">
                                                            <label for="img" class="form-label">imagen</label>
                                                            <input type="file" class="form-control" name="imagen" id="img">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Collaps 2 -->
                                            <div class="accordion-item black-form">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed black-form" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Información del Proyecto
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-cocenterllapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

                                                    <div class="row my-4 px-4">
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="tipo" class="form-label">Tipo de proyecto</label>
                                                            <select class="form-select" aria-label="Default select example" id="tipo" name="tProyecto">
                                                                <option selected>selecciona una opción</option>
                                                                <option value="Sitio web">Sitio Web</option>
                                                                <option value="E-commerce">E-commerce</option>
                                                                <option value="Interfaces de usuario">Interfaces de usuario</option>
                                                                <option value="Sistema">Sistema</option>
                                                                <option value="Otro">Otro</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="host" class="form-label">Host</label>
                                                            <select class="form-select" aria-label="Default select example" id="host" name="host">
                                                                <option selected>selecciona una opción</option>
                                                                <option value="Local">local</option>
                                                                <option value="Externo">externo</option>
                                                                <option value="Propio">propio</option>
                                                                <option value="Otro">Otro</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="precio" class="form-label">Precio</label>
                                                            <input type="number" class="form-control" name="precio" id="precio" placeholder="$">
                                                        </div>
                                                    </div>

                                                    <div class="row my-4 px-4">
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="ruta" class="form-label">Dominio</label>
                                                            <input type="text" class="form-control" name="link" id="ruta" placeholder="dominio.com.mx">
                                                        </div>
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="use" class="form-label">Usuario</label>
                                                            <input type="text" class="form-control" name="user" id="use" placeholder="usuario">
                                                        </div>
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="pwd" class="form-label">Password</label>
                                                            <input type="password" class="form-control" name="pass" id="pwd" placeholder="******">
                                                        </div>
                                                    </div>
                                                    <div class="row my-4 px-4">
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="data" class="form-label">Base de Datos</label>
                                                            <input type="text" class="form-control" name="database" id="data" placeholder="database">
                                                        </div>
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="udb" class="form-label">Usuario db</label>
                                                            <input type="text" class="form-control" name="userdb" id="udb" placeholder="usuario DB">
                                                        </div>
                                                        <div class="mb-4 px-2 col-12 col-md-4">
                                                            <label for="pdb" class="form-label">Password db</label>
                                                            <input type="password" class="form-control" name="passdb" id="pdb" placeholder="******">
                                                        </div>
                                                    </div>
                                                    <div class="row my-4 px-4">
                                                        <div class="mb-4 mx-2 col-12">
                                                            <label for="sitio" class="form-label">Descripción del sitio</label>
                                                            <textarea name="descProyecto" id="sitio" cols="" rows="2" class="form-control" placeholder="breve descripción del sitio..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button class="btn btn-success" type="submit">Agregar</button>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mt-4 px-2 overf-hidd">
                <div class="card">
                    <div class="card-body">
                        <div class="row p-2">
                            <h4 class="text-primary">Información del Cliente</h4>
                            <?php foreach ($resultado as $element) { ?>
                                <article class="bg-card my-1">
                                    <div class="d-flex justify-content-between">
                                        <span class="text-dark">
                                            Proyecto: <span class="text-primary text-capitalize"><?php echo $element['proyecto'] ?></span>
                                        </span>
                                        <span class="text-dark">
                                            Folio: <span class="text-danger"><?php echo $element['id'] ?></span>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <span class="text-dark">
                                            Titular: <span class="text-secondary text-capitalize"><?php echo $element['titular'] ?></span>
                                        </span>
                                        <span class="text-dark">
                                            Correo: <span class="text-secondary"><?php echo $element['correo'] ?></span>
                                        </span>
                                        <span class="text-dark">
                                            Teléfono: <span class="text-secondary"><?php echo $element['contacto'] ?></span>
                                        </span>
                                    </div>
                                </article>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card my-4 black-card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Servidor</th>
                        <th scope="col">Host</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Desc. Proyecto</th>
                        <th scope="col">URL</th>
                        <th scope="col">Database</th>
                        <th scope="col">Usuario DB</th>
                        <th scope="col">Contraseña DB</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Password</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $element) { ?>
                        <tr class="text-center">
                            <td scope="row" class="text-warning"><?php echo $element['id'] ?></td>
                            <td>
                                <img src="../images/<?php echo $element['imagen'] ?>" alt="" srcset="" width="60">
                            </td>
                            <td><?php echo $element['descripcion'] ?></td>
                            <td><?php echo $element['tipo'] ?></td>
                            <td><?php echo $element['descsite'] ?></td>
                            <td><?php echo $element['precio'] ?></td>
                            <td><?php echo $element['host'] ?></td>
                            <td>
                                <a href="<?php echo $element['ruta'] ?>">
                                    <?php echo $element['ruta'] ?>
                                </a>
                            </td>
                            <td><?php echo $element['basedb'] ?></td>
                            <td><?php echo $element['usuariodb'] ?></td>
                            <td><?php echo $element['passwordb'] ?></td>
                            <td><?php echo $element['usuario'] ?></td>
                            <td><?php echo $element['password'] ?></td>
                            <td>
                                <a href="?borrar=<?php echo $element['id']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


<?php include('../templates/footer.php') ?>