<!-- Page header -->
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES
    </h3>
    <p class="text-justify">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
    </p>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR JUGADOR
        </li>
        <li>
            <a class="active" href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE JUGADORES</a>
        </li>
        <li>
            <a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR JUGADOR</a>
        </li>
    </ul>
</div>

<!-- Content here-->
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>#</th>
                    <th>CATEGORÍA</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DOCUMENTO</th>
                    <th>EDAD</th>
                    <th>DIRECCIÓN</th>
                    <th>GÉNERO</th>
                    <th>ALTURA</th>
                    <th>PESO</th>
                    <th>FECHA DE INGRESO</th>
                    <th>TELEFONO</th>
                    <th>TALLA DE CAMISA</th>
                    <th>TALLA DE ZAPATILLAS</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td>012342567</td>
                    <td>NOMBRE DEL CLIENTE</td>
                    <td>APELLIDO DEL CLIENTE</td>
                    <td>17</td>
                    <td>BARRIO BOLIVAR</td>
                    <td>MASCULINO</td>
                    <td>196cmts</td>
                    <td>94k</td>
                    <td>01-01-2022</td>
                    <td>72349874</td>
                    <td>XL</td>
                    <td>13.5</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
                            <i class="fas fa-info-circle"></i>
                        </button>
                    </td>
                    <td>
                        <a href="client-update.html" class="btn btn-success">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                    </td>
                    <td>
                        <form action="">
                            <button type="button" class="btn btn-warning">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr class="text-center">
                    <td>2</td>
                    <td>012342567</td>
                    <td>NOMBRE DEL CLIENTE</td>
                    <td>APELLIDO DEL CLIENTE</td>
                    <td>72349874</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
                            <i class="fas fa-info-circle"></i>
                        </button>
                    </td>
                    <td>
                        <a href="client-update.html" class="btn btn-success">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                    </td>
                    <td>
                        <form action="">
                            <button type="button" class="btn btn-warning">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr class="text-center">
                    <td>3</td>
                    <td>012342567</td>
                    <td>NOMBRE DEL CLIENTE</td>
                    <td>APELLIDO DEL CLIENTE</td>
                    <td>72349874</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
                            <i class="fas fa-info-circle"></i>
                        </button>
                    </td>
                    <td>
                        <a href="client-update.html" class="btn btn-success">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                    </td>
                    <td>
                        <form action="">
                            <button type="button" class="btn btn-warning">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr class="text-center">
                    <td>4</td>
                    <td>012342567</td>
                    <td>NOMBRE DEL CLIENTE</td>
                    <td>APELLIDO DEL CLIENTE</td>
                    <td>72349874</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
                            <i class="fas fa-info-circle"></i>
                        </button>
                    </td>
                    <td>
                        <a href="client-update.html" class="btn btn-success">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                    </td>
                    <td>
                        <form action="">
                            <button type="button" class="btn btn-warning">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>