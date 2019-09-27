<!-- begin:navbar -->

<!-- end:navbar -->
<!-- Ali Baghban -->
<!-- begin:header -->
<div id="header" class="header-slide">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
            </div>
        </div>
    </div>
</div>
<!-- end:header -->
<!-- Ali Baghban -->
<!-- begin:service -->
<div id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>خدمات و سرویس ها
                    <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</small>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-container">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-home"></i></a>
                    </div>
                    <div class="service-content">
                        <h3>لورم ایپسوم متن ساختگی با تولید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-container">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-thumbs-up"></i></a>
                    </div>
                    <div class="service-content">
                        <h3>لورم ایپسوم متن ساختگی با تولید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-container">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-umbrella"></i></a>
                    </div>
                    <div class="service-content">
                        <h3>لورم ایپسوم متن ساختگی با تولید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-container">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-lock"></i></a>
                    </div>
                    <div class="service-content">
                        <h3>لورم ایپسوم متن ساختگی با تولید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:service -->
<!-- Ali Baghban -->
<!-- begin:content -->
<div id="content">
    <div class="container">
        <!-- begin:latest -->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h2>آخرین پروژه ها و طرح ها</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if ($count != 0) {
                for ($i = 0; $i < $count; $i++):
                    $image = $cat_obj->get_image($category[$i]->id);
                    //var_dump($image);
                    ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <a href="<?php echo "index.php?c=cat&a=project&h=" . $category[$i]->id; ?>">
                                    <img src="<?php echo $image->url; ?>" alt="arillo real estate theme">
                                </a>
                                <div class="property-price">
                                    <h4></h4>
                                    <span><?php echo $category[$i]->name; ?></span>
                                </div>
                                <div class="property-status">
                                    <span><?php echo $category[$i]->price; ?></span>
                                </div>
                            </div>

                            <div class="property-content">
                                <h3>
                                    <a href="<?php echo "index.php?c=cat&a=project&h=" . $category[$i]->id; ?>">
                                        <?php echo $category[$i]->company;
                                        ?></a>
                                    <small><?php echo $category[$i]->details; ?></small>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php endfor;
            } ?>
            <!-- break -->
            <!-- break -->
        </div>
        <!-- end:latest -->
        <!-- Ali Baghban -->
        <!-- begin:for-sale -->

        <!-- end:for-sale -->

        <!-- begin:for-rent -->

        <!-- end:for-rent -->
    </div>
</div>
<!-- end:content -->
<!-- Ali Baghban -->
<!-- begin:testimony -->
<div id="testimony" style="background-image: url(public/default/image/img17.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div id="testislider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="testimony-container">
                                <div class="testimony-image"
                                     style="background: url(public/default/image/team01.jpg)"></div>
                                <div class="testimony-content">
                                    <h3>پندانه ی امروز</h3>
                                    <blockquote>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="right carousel-control" href="#testislider" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="left carousel-control" href="#testislider" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end:testimony -->

<!-- begin:news -->
<div id="news">
    <div class="container">
        <div class="row">
            <!-- begin:blog -->
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-title-sm bg-white">
                            <h2>آخرین اخبار از وبلاگ</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle"
                                 style="background: url(public/default/image/img02.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama"
                                                         rel="category tag">لورم ایپسوم متن ساختگی</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است. </a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle"
                                 style="background: url(public/default/image/img03.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama"
                                                         rel="category tag">لورم ایپسوم متن ساختگی</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است. </a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle"
                                 style="background: url(public/default/image/img15.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama"
                                                         rel="category tag">لورم ایپسوم متن ساختگی</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است. </a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->
                        <!-- Ali Baghban -->
                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:blog -->

            <!-- begin:popular -->
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-title-sm bg-white">
                            <h2>محبوب ترین طراح ها</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="post-container">
                            <div class="post-img" style="background: url(public/default/image/img12.jpg);"><h3>برای
                                    فروش</h3></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="fa fa-home"></i> 7,000 m<sup>2</sup> / </span>
                                    <span><i class="fa fa-hdd-o"></i> 3 Bed / </span>
                                    <span><i class="fa fa-male"></i> 2 Bath / </span>
                                    <span><i class="fa fa-building-o"></i> 2 Floors / </span>
                                    <span><i class="fa fa-car"></i> 2 Garages / </span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">مسکونی - <span>$300,000</span>/year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container">
                            <div class="post-img" style="background: url(public/default/image/img13.jpg);"><h3>برای
                                    فروش</h3></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="fa fa-home"></i> 6,700 m<sup>2</sup> / </span>
                                    <span><i class="fa fa-hdd-o"></i> 4 Bed / </span>
                                    <span><i class="fa fa-male"></i> 2 Bath / </span>
                                    <span><i class="fa fa-building-o"></i> 1 Floors / </span>
                                    <span><i class="fa fa-car"></i> 2 Garages / </span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">تجاری - <span>$700,000</span>/year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(public/default/image/img14.jpg);"><h3>برای
                                    فروش</h3></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup> / </span>
                                    <span><i class="fa fa-hdd-o"></i> 3 Bed / </span>
                                    <span><i class="fa fa-male"></i> 2 Bath / </span>
                                    <span><i class="fa fa-building-o"></i> 1 Floors / </span>
                                    <span><i class="fa fa-car"></i> 1 Garages / </span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">ویلا - <span>$800,000</span></a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:popular -->

            <!-- begin:agent -->
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-title-sm bg-white">
                            <h2>نمایندگی</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class="row">
                    <div class="col-md-12">

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(public/default/image/ali0.jpg);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">علی باغبان</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i>ali.bgn@hotmail.com</span><br>
                                    <span><i class="fa fa-phone"></i> +989335138159</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(public/default/image/pixel.jpg);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">نگار باغبان</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i> Info@negar.Org</span><br>
                                    <span><i class="fa fa-phone"></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->
                        <!-- Ali Baghban -->
                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(public/default/image/team01.jpg);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">مدیحه جوادی</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i> Info@madihe.Org</span><br>
                                    <span><i class="fa fa-phone"></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:agent -->
        </div>
    </div>
</div>
<!-- end:news -->

<!-- begin:subscribe -->
<div id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2 col-sm-8 col-xs-12">
                <h3>دریافت خبرنامه</h3>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" placeholder="Enter your mail" disabled>
                    <span class="input-group-btn">
                <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-envelope"></i></button>
              </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:subscribe -->

<!-- begin:partner -->
<div id="partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title bg-white">
                    <h2>مشارکت ما</h2>
                </div>
            </div>
        </div>
        <!-- break -->

        <div class="row">
            <div class="col-md-12">
                <div class="jcarousel-wrapper">
                    <div class="jcarousel">
                        <ul>
                            <li><a href="#"><img src="public/default/image/img01.jpg"
                                                 alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img02.jpg"
                                                 alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img03.jpg"
                                                 alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img04.jpg"
                                                 alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img05.jpg"
                                                 alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img06.jpg"
                                                 alt="partner of arillo responsive real estate theme"></a></li>
                        </ul>
                    </div>
                    <a href="#" class="jcarousel-control-prev"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="jcarousel-control-next"><i class="fa fa-angle-right"></i></a>
                    <!-- <p class="jcarousel-pagination"></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:partner -->

<!-- begin:footer -->

<!-- Ali Baghban -->
