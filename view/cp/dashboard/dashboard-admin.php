<!-- START PHP-->


<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="#"></a>
        <i class="icon-angle-left"></i>
    </li>
    <li><a href="#">داشبورد</a></li>
</ul>

<div class="row-fluid">

    <a class="quick-button metro yellow span2" href="index.php?c=cp&a=user-list">
        <i class="icon-group"></i>
        <p>کاربران</p>
        <span class="badge"><?php echo $user_count; ?></span>
    </a>
    <a class="quick-button metro red span2">
        <i class="icon-comments-alt"></i>
        <p>نظرات</p>
        <span class="badge">-</span>
    </a>
    <a class="quick-button metro blue span2" href="index.php?c=cp&a=request-list">
        <i class="icon-shopping-cart"></i>
        <p>درخواست های بررسی نشده</p>
        <span class="badge"><?php echo $request_count; ?></span>
    </a>
    <a class="quick-button metro green span2" href="index.php?c=cp&a=project-list-admin">
        <i class="icon-barcode"></i>
        <p>پروژه و طرح</p>
        <span class="badge"><?php echo $project_count; ?></span>
    </a>
    <a class="quick-button metro pink span2">
        <i class="icon-envelope"></i>
        <p>Messages</p>
        <span class="badge">-</span>
    </a>
    <a class="quick-button metro black span2">
        <i class="icon-calendar"></i>
        <p>Calendar</p>
    </a>

    <div class="clearfix"></div>

</div><!--/row-->


<!-- END PHP-->
</div><!--/.fluid-container-->

<!-- end: Content -->

</div><!--/fluid-row-->