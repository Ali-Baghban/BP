<!-- begin:header -->
<div id="header" class="heading" style="background-image: url(img/img01.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="page-title">
                    <h2>اخبار</h2>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.php"><?php echo $config->title; ?></a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end:header -->

<!-- begin:content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-container">
                    <div class="blog-content">
                        <?php
                        foreach ($news as $val){
                        ?>
                        <div class="blog-title">
                            <h2><?php echo $val->title; ?></h2>
                        </div>

                        <div class="blog-text">
                            <p><?php echo substr($val->body,0,30); ?></p>
                            <p><a href="index.php?c=news&a=news&h=<?php echo $val->id; ?>" class="btn btn-primary">بیشتر <i
                                            class="fa fa-arrow-circle-o-right"></i></a></p>
                        </div>
                        <?php
                        }
                            ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end:content -->