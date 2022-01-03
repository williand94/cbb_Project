<?php

    class ViewsModel {

         /*--------- Models to get views --------- */
         protected static function get_views_models($view)
         {
             $whiteList = [];
 
             if(in_array($view, $whiteList))
             {
                 if(is_file("./views/content/".$view."-view.php")) {

                    $content = "./views/content/".$view."-view.php";
                 }
 
             }elseif($view == 'login' || $view == 'index') {
                 $content = 'login'; 
             }else{
                 $content = '404';
             }
 
             return $content;
         }
    }