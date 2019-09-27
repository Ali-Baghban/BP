<?php
include_once 'model/mnews.php';
########################################
# Template
include_once 'model/mtemplate.php';
$template = new mtemplate();
$menu = $template->menu_list();
########################################
include_once 'public/default/template/main-header.php';
include_once 'public/default/template/navbar.php';
#############################################
$news_obj = new news();
#############################################
include_once 'model/xmain.php';
$status_obj = new xmain();
if ($status_obj->status_check()->status == '0') {
    include_once 'public/default/template/footer.php';
    die('Temp unavailable');
}
switch ($action) {
    case 'news-list':
        $news = $news_obj->list_news();
        include_once "view/$controller/$action.php";
        break;
    case 'news':
        $news = $news_obj->show_news($h_id);
        //var_dump($news);
        include_once "view/$controller/$action.php";
}
include_once 'public/default/template/footer.php';

?>