<?php

#################################################
include_once 'model/muser.php';
$class = new user();
$level = $class->get_user_level();
//var_dump($level);
#################################################
########################################
# Template

########################################
if (!$class->sec_check()) {
    $class->redirect();
} else {
    include_once 'public/admin/template/header.php';
    ######################################################
    # includes :
    include_once 'model/mnews.php';
    $news_obj = new news();
    $newslist = $news_obj->list_news();
    include_once 'model/mmenu.php';
    $menu_obj = new menu();
    $menu = $menu_obj->menu_list();
    include_once 'model/muser.php';
    $user_obj = new user();
    $user = $user_obj->user_list();
    include_once 'model/mproject.php';
    $project_obj = new project();
    include_once 'model/morder.php';
    $order_obj = new order();
    include_once 'model/mverify.php';
    $verify_obj = new verify();
    include_once 'model/minfo.php';
    $info_obj = new info();
    include_once 'model/mrequest.php';
    $request_obj = new request();
    ######################################################
    switch ($level) {
        case 'customer':

            include_once "view/$controller/menu_bar/customer.php";
            switch ($action) {
                case 'dashboard':
                    include_once "view/$controller/success.php";
                    break;

                case
                'order-list':
                    $data['customer_username'] = $_SESSION['login'];
                    $order = $order_obj->order_list($data);
                    //var_dump($order);
                    include_once "view/$controller/order/order-list.php";
                    break;
                case
                'order-add':
                    if (isset($_GET['h_id'])) {
                        $data['house_id'] = $_GET['h_id'];
                        $data['customer_username'] = $_SESSION['login'];
                        $data['time'] = 'Today';
                        $order = $order_obj->order_add($data);
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }

                    //include_once "view/$controller/order/order-add.php";
                    break;
                case
                'order-delete':
                    include_once "view/$controller/order/order-delete.php";
                    break;
                case
                'profile':
                    include_once "view/$controller/profile.php";
                    break;
                default:
                    include_once "view/$controller/error.php";
            }

            break;
        case 'designer':
            //echo $_SESSION['login'];
            //var_dump($project_obj);
            $project = $project_obj->project_list($_SESSION['login']);
            include_once "view/$controller/menu_bar/designer.php";
            switch ($action) {
                case 'dashboard':
                    include_once "view/$controller/success.php";
                    break;
                case
                'project-list':
                    include_once "view/$controller/project/project-list.php";
                    break;
                case
                'project-add':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        $data['chid'] = $project_obj->project_get_chid($_SESSION['login'])->id;
                        $data['status'] = 0;
                        if (empty($data['file_path'])) {
                            $data['file_path'] = "public/default/image/default.zip";
                        }
                        if (empty($data['img1'])) {
                            $data['img1'] = "public/default/image/default.png";
                        }
                        if (empty($data['img2'])) {
                            $data['img2'] = "public/default/image/default.png";
                        }
                        if (empty($data['img3'])) {
                            $data['img3'] = "public/default/image/default.png";
                        }
                        if ($project_obj->project_add($data)) {
                            include_once "view/$controller/success.php";
                        }
                    }

                    include_once "view/$controller/project/project-add.php";
                    break;
                case
                'project-edit':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($project_obj->project_edit($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $project = $project_obj->project_get($id);
                    include_once "view/$controller/project/project-edit.php";
                    break;

                case 'project-delete':
                    if ($project_obj->project_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'profile':
                    include_once "view/$controller/profile.php";
                    break;
                default:
                    include_once "view/$controller/error.php";
            }
            break;
        case 'admin':
            ##

            ##
            include_once "view/$controller/menu_bar/admin.php";
            switch ($action) {
                case 'dashboard':
                    $user_count = $user_obj->user_count();
                    $request_count = $request_obj->request_count();
                    $project_count = $project_obj->project_count();
                    include_once "view/$controller/dashboard/dashboard-admin.php";
                    break;
                case
                'messagexx':
                    include_once "view/$controller/message.php";
                    break;
                case
                'menu-list':
                    include_once "view/$controller/menu/menu-list.php";
                    break;
                case
                'menu-add':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($menu_obj->menu_add($data)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    include_once "view/$controller/menu/menu-add.php";
                    break;
                case
                'menu-edit':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($menu_obj->menu_edit($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $menu = $menu_obj->menu_get($id);
                    include_once "view/$controller/menu/menu-edit.php";
                    break;
                case
                'menu-delete':
                    if ($menu_obj->menu_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'request-list':
                    $request = $request_obj->request_list_admin();
                    //var_dump($request);
                    include_once "view/$controller/request/request-list-admin.php";
                    break;
                case
                'request-edit':

                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($request_obj->request_edit_admin($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $request = $request_obj->request_get($id);
                    if ($request->status == 1) {
                        $active = 'checked';
                        $inactive = '';
                    } else {
                        $active = '';
                        $inactive = 'checked';
                    }
                    include_once "view/$controller/request/request-edit-admin.php";
                    break;
                case
                'request-delete':
                    if ($request_obj->request_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'news-list':
                    include_once "view/$controller/news/news-list.php";
                    break;
                case
                'news-add':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($news_obj->news_add($data)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    include_once "view/$controller/news/news-add.php";
                    break;
                case
                'news-edit':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($news_obj->news_edit($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $news = $news_obj->news_get($id);
                    include_once "view/$controller/news/news-edit.php";
                    break;
                case
                'news-delete':
                    if ($news_obj->news_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'project-list-admin':
                    $project = $project_obj->project_list_admin();
                    include_once "view/$controller/project/project-list-admin.php";
                    break;
                case
                'project-edit-admin':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($project_obj->project_edit_admin($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $project = $project_obj->project_get($id);
                    if ($project->status == 1) {
                        $active = 'checked';
                        $inactive = '';
                    } else {
                        $active = '';
                        $inactive = 'checked';
                    }
                    include_once "view/$controller/project/project-edit-admin.php";
                    break;
                case 'project-delete':
                    if ($project_obj->project_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'user-list':
                    $user = $user_obj->user_list();
                    include_once "view/$controller/user/user-list.php";
                    break;
                case
                'user-add':
                    include_once "view/$controller/user/user-add.php";
                    break;
                case
                'user-edit':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($user_obj->user_edit($data, $id)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $user = $user_obj->user_get($id);
                    include_once "view/$controller/user/user-edit.php";
                    break;
                case
                'user-delete':
                    if ($user_obj->user_delete($id)) {
                        include_once "view/$controller/success.php";
                    } else {
                        include_once "view/$controller/error.php";
                    }
                    break;
                case
                'verify-list':
                    $verify = $verify_obj->verify_list();
                    var_dump($verify);
                    include_once "view/$controller/verify.php";
                    break;
                case
                'profile':
                    include_once "view/$controller/profile.php";
                    break;
                case
                'info':
                    if (isset($_POST['frm']['submit'])) {
                        $data = $_POST['frm'];
                        if ($info_obj->info_edit($data)) {
                            include_once "view/$controller/success.php";
                        }
                    }
                    $info = $info_obj->get_general_info();
                    //var_dump($info);
                    if ($info->status == 1) {
                        $active = 'checked';
                        $inactive = '';
                    } else {
                        $active = '';
                        $inactive = 'checked';
                    }
                    include_once "view/$controller/general-info.php";
                    break;
                default:
                    include_once "view/$controller/error.php";
            }
            break;
    }
}

include_once 'public/admin/template/footer.php';