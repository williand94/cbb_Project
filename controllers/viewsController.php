<?php
    require_once "./models/viewsModel.php";

    class ViewsControllers extends ViewsModel{
        
        /*--------- Controller to get template --------- */
        public function get_template_controller()
        {
            return  require_once "./views/template.php";
        }

        /*--------- Controller to get views --------- */
        public function get_views_controller()
        {
            if (isset($_GET['views'])) {
                $path = explode("/",$_GET['views']);
                $answer = ViewsModel::get_views_models($path[0]);
            } else {
                $answer = 'login';
            }
            
            return $answer;
        }
    }