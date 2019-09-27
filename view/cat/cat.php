<!-- begin:header -->
<div id="header" class="heading" style="background-image: url(public/default/image/img01.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="page-title">
                    <h2>پروژه های موجود<span></span></h2>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end:header -->

<!-- begin:content -->
<div id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-9 col-md-push-3">
                <!-- begin:sorting -->

                <!-- end:sorting -->

                <!-- begin:product -->
                <div class="row container-realestate">
                    <?php foreach ($category as $item):
                        $image = $cat_obj->get_image($item->id);
                        //var_dump($image);
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="property-container">
                                <div class="property-image">

                                    <?php //var_dump()
                                    ?>
                                    <a href="<?php echo "index.php?c=cat&a=project&h=$item->id"; ?>">
                                        <img src="<?php echo $image->url; ?>" alt="mikha real estate theme">
                                    </a>
                                        <div class="property-price">
                                            <h4><?php //echo $sorted;
                                                ?></h4>
                                            <span><?php echo $item->name; ?></span>
                                        </div>
                                        <div class="property-status">
                                            <span><?php echo $item->price; ?></span>
                                        </div>
                                </div>
                                <div class="property-content">
                                    <h3>
                                        <a href="<?php echo "index.php?c=cat&a=project&h=$item->id"; ?>">
                                            <?php echo $item->company;
                                            ?></a>
                                        <small><?php echo $item->details; ?></small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- break -->

                    <!-- break -->
                </div>
                <!-- end:product -->

                <!-- begin:pagination

                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                -->

                <!-- end:pagination -->
            </div>
            <!-- end:article -->
            <!-- Ali Baghban -->
            <!-- begin:sidebar -->
            <div class="col-md-3 col-md-pull-9 sidebar">

                <!-- break -->
            </div>
            <!-- end:sidebar -->

        </div>
    </div>
</div>
<!-- end:content -->