<?php

?>
<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">داشبورد</a>
            <i class="icon-angle-left"></i>
        </li>
        <li><a href="#">لیست پروژه ها</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>لیست منوها</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>متقاضی</th>
                        <th>صاحب طرح</th>
                        <th>پیام</th>
                        <th>وضعیت</th>
                        <th>تنظیمات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($request) {
                        foreach ($request as $val) {
                            if ($val->status == 1) {
                                $status = "<span class='label label-success'>بررسی شده</span>";
                            } elseif ($val->status == 0) {
                                $status = "<span class='label label-warning'>درانتظار بررسی</span>";
                            }else{
                                $status = "<span class='label label-danger'>واگذارشده</span>";
                            }
                            $html = <<<EOF
                        <tr>
                        <td>$val->chid</td>
                        <td>$val->customer_info</td>
                        <td>$val->designer_info</td>
                        
                        <td>$val->message</td>
                        
                        <td class="center">
                            $status
                        </td>
                        
                        <td class="center">
                            <a class="btn btn-success" href="index.php?c=cat&a=project&h=$val->chid">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="index.php?c=cp&a=request-edit&id=$val->id">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="index.php?c=cp&a=request-delete&id=$val->id">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>

EOF;
                            echo $html;
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

</div><!--/.fluid-container-->

<!-- end: Content -->
