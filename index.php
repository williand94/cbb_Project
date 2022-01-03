<?php

require_once "./config/APP.php";
require_once "./controllers/viewsController.php";

    $template = new ViewsControllers();
    $template->get_template_controller();
