<?php

    class ViewsModel {

         /*--------- Models to get views --------- */
         protected static function get_views_models($view)
         {
             $whiteList =
                    ["home","players-list","player-new-view","player-search","player-update",   "guardian-new","guardian-list","guardian-search","guardian-update","user-list","user-new","user-update","user-search"];
 
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