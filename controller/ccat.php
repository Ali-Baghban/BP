<?php
include_once 'model/mcat.php';
include_once 'model/mproject.php';
########################################
# Template
include_once 'model/mtemplate.php';
$template = new mtemplate();
$menu = $template->menu_list();
########################################
############################
$cat_obj = new mcat();
############################
include_once 'public/default/template/main-header.php';
include_once 'public/default/template/navbar.php';
include_once 'model/xmain.php';

$status_obj = new xmain();
if ($status_obj->status_check()->status == '0') {
    include_once 'public/default/template/footer.php';
    die('Temp unavailable');

}
############################
switch ($action) {
    case 'cat':
        $category = $cat_obj->get_cat();
        include_once "view/$controller/$action.php";
        break;
    case 'project':
        include_once 'model/mrequest.php';
        $request_obj = new request();
        $project_obj = new project();
        if ($designer_info = $cat_obj->get_holder_info($h_id)) {
            if ($cat_obj->security_check()) {
                if (isset($_POST['submit'])) {
                    $data = $_POST['frm'];
                    $data['customer_info'] = "$data[name]\n$data[email]\n$data[phone]";
                    $data['designer_info'] = "$designer_info->name\n$designer_info->email\n$designer_info->phone";
                    $data['status'] = '0';
                    //var_dump($data);
                    if ($request_obj->request_send($data)) {

                        header("Location: index.php?c=cat&a=project&h=$h_id&m=sent");
                    }
                }
                $gallery = $cat_obj->get_gallery($h_id);
                $file = $cat_obj->get_file($h_id);
                if ($file->url == "public/default/image/default.zip"){
                    $file->url = '#';
                }
                //var_dump($file);
                $project = $project_obj->project_get($h_id);
            }
            //var_dump($information);
            //var_dump($housholder_info);
            include_once "view/$controller/$action.php";
        }

}
############################
include_once 'public/default/template/footer.php';

?>
