<?php
//session_start();
include_once 'model/mindex.php';
//php code
########################################
# Template
include_once 'model/mtemplate.php';
$template = new mtemplate();
$menu = $template->menu_list();
include_once 'model/mcat.php';
include_once 'model/mproject.php';
$project_obj = new project();
$cat_obj = new mcat();
########################################
$obj = new mindex();

//$relinks = $obj->get_related_links();

include_once 'public/default/template/main-header.php';
include_once 'public/default/template/navbar.php';
#############################################
include_once 'model/xmain.php';
$status_obj = new xmain();
if($status_obj->status_check()->status == '0'){
    include_once 'public/default/template/footer.php';
    die('Temp unavailable');
}
switch ($action) {
    case 'index':
        //include_once 'public/default/template/navbar.php';
        $category = $cat_obj->get_cat_recently();
        $project_count = $project_obj->project_count();
        if ($project_count > 0) {
            if($project_count < 4) {
                $count = $project_count;
            }else{
                $count = 4;
            }
        }else{
            $count = 0;
        }
        //var_dump($category);
        include_once "view/$controller/$action.php";
        break;
    case 'about':

        include_once "view/$controller/$action.php";

        break;
    default:
        include_once "view/error/404.php";

}
include_once 'public/default/template/footer.php';
?>