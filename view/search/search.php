<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="arillo is responsive html real estate theme">
    <meta name="author" content="afriq yasin ramadhan">
    <link rel="shortcut icon" href="public/default/image/favicon.png">

    <title>Arillo</title>

    <!-- Bootstrap core CSS -->
    <link href="public/default/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="public/default/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/default/css/style.css" rel="stylesheet">
    <link href="public/default/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="public/default/js/html5shiv.js"></script>
    <script src="public/default/js/respond.min.js"></script>
    <![endif]-->
</head>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<body id="top">

<!-- begin:navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span>Ari<strong>llo.</strong></span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php">صفحه اصلی</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ویژگی <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="search.html">جستجو</a></li>
                        <li><a href="search_list.html">جستجو پیشرفته</a></li>
                        <li><a href="category.html">دسته بندی</a></li>
                        <li><a href="category_list.html">دسته بندی پیشرفته</a></li>
                        <li><a href="single.html">تک صفحه ای</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">صفحه <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog.html">آرشیو وبلاگ</a></li>
                        <li><a href="blog_single.html">وبلاک تک صفحه ای</a></li>
                        <li><a href="about.html">درباره ما</a></li>
                        <li><a href="contact.html">تماس با ما</a></li>
                    </ul>
                </li>
                <li><a href="#modal-signin" class="signin" data-toggle="modal" data-target="#modal-signin">ورود به سایت</a></li>
                <li><a href="#" class="signup" data-toggle="modal" data-target="#modal-signup">ثبت نام</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<!-- end:navbar -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- begin:header -->
<div id="header" class="heading" style="background-image: url(public/default/image/img01.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="quick-search">
                    <div class="row">
                        <form role="form">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <label for="bedroom">کلمه کلیدی</label>
                                    <input type="text" class="form-control" placeholder="کلمه کلیدی">
                                </div>
                                <div class="form-group">
                                    <label for="bedroom">اطاق خواب</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <!-- break -->
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <label for="status">وضعیت</label>
                                    <select class="form-control">
                                        <option>حراج</option>
                                        <option>برای اجاره</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bathroom">حمام</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <!-- break -->
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <label for="type">نوع</label>
                                    <select class="form-control">
                                        <option>ویلا</option>
                                        <option>ساکن</option>
                                        <option>تجاری</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="minprice">حداقل هزینه </label>
                                    <select class="form-control">
                                        <option>$4,200</option>
                                        <option>$6,700</option>
                                        <option>$8,150</option>
                                        <option>$11,110</option>
                                    </select>
                                </div>
                            </div>
                            <!-- break -->
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <label for="maxprice">حداکثر هزینه </label>
                                    <select class="form-control">
                                        <option>$8,200</option>
                                        <option>$11,700</option>
                                        <option>$14,150</option>
                                        <option>$21,110</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="maxprice">&nbsp;</label>
                                    <input type="submit" name="submit" value="Search Again" class="btn btn-primary btn-block">
                                </div>
                            </div>

                        </form>
                    </div>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-title-alt">
                            <h3>لورم ایپسوم متن ساختگی با تولید سادگی</h3>
                        </div>
                    </div>
                </div>
                <!-- begin:sorting -->
                <div class="row sort">
                    <div class="col-md-4 col-sm-4 col-xs-3">
                        <a href="search.html" class="btn btn-primary"><i class="fa fa-th"></i></a>
                        <a href="search_list.html" class="btn btn-default"><i class="fa fa-list"></i></a>
                        <span>Show <strong>6</strong> of <strong>30</strong> result.</span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-9">
                        <form class="form-inline" role="form">
                            <span>مرتب سازی : </span>
                            <div class="form-group">
                                <label class="sr-only" for="sortby">مرتب سازی : </label>
                                <select class="form-control">
                                    <option>جدیدترین ها</option>
                                    <option>قیمت (کم و؛ بالا)</option>
                                    <option>قیمت (بالا ؛ کم)</option>
                                    <option>محبوب ترین ها (پایین؛ بالا)</option>
                                </select>
                            </div>
                            <span>نمایش : </span>
                            <div class="form-group">
                                <label class="sr-only" for="show">نمایش : </label>
                                <select class="form-control">
                                    <option>6</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end:sorting -->
                <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                <!-- begin:product -->
                <div class="row container-realestate">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img02.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>دفاتر</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">اداری</a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img03.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>ویلا</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">ویلا </a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img04.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>مسکونی</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">زمین در پارک مرکزی</a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img05.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>مسکونی</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">ویلا های لوکس</a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img06.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>Residential</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>مسکونی</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">زندگی شهری</a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img04.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>مسکونی</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">Land In Central Park</a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img02.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>مسکونی</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">خانه ای نیمه مستقل</a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img06.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>مسکونی</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">زندگی شهری</a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="property-container">
                            <div class="property-image">
                                <img src="public/default/image/img02.jpg" alt="mikha real estate theme">
                                <div class="property-price">
                                    <h4>دفاتر</h4>
                                    <span>$800,000</span>
                                </div>
                                <div class="property-status">
                                    <span>برای فروش</span>
                                </div>
                            </div>
                            <div class="property-features">
                                <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                <span><i class="fa fa-male"></i> 2 Bath</span>
                            </div>
                            <div class="property-content">
                                <h3><a href="#">اداری</a> <small>لورم ایپسوم متن ساختگی</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- break -->
                </div>
                <!-- end:product -->
                <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                <!-- begin:pagination -->
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
                <!-- end:pagination -->
            </div>
            <!-- end:article -->

            <!-- begin:sidebar -->
            <div class="col-md-3 col-md-pull-9 sidebar">
                <div class="widget widget-sidebar widget-white">
                    <div class="widget-header">
                        <h3>آخرین املاک</h3>
                    </div>
                    <ul>
                        <li><a href="#">ویلا های لوکس</a></li>
                        <li><a href="#">زمین در پارک مرکزی</a></li>
                        <li><a href="#">دفتر لوکس</a></li>
                        <li><a href="#">دفتر لوکس</a></li>
                        <li><a href="">ویلا های لوکس در رگو پارک</a></li>
                    </ul>
                </div>
                <!-- break -->
                <div class="widget widget-sidebar widget-white">
                    <div class="widget-header">
                        <h3>نوع ملک</h3>
                    </div>
                    <ul class="list-check">
                        <li><a href="#">دفتر</a>&nbsp;(18)</li>
                        <li><a href="#">دفتر</a>&nbsp;(43)</li>
                        <li><a href="#">فروشگاه</a>&nbsp;(31)</li>
                        <li><a href="#">ویلا</a>&nbsp;(52)</li>
                        <li><a href="#">اپارتمان</a>&nbsp;(8)</li>
                        <li><a href="#">خانه های تک خانوار</a>&nbsp;(11)</li>
                    </ul>
                </div>
                <!-- break -->
                <div class="widget widget-sidebar widget-white">
                    <div class="widget-header">
                        <h3>عوامل بالا</h3>
                    </div>
                    <ul>
                        <li><a href="#">ایمان مداونی</a></li>
                        <li><a href="#">سجاد باقرزاده</a></li>
                        <li><a href="#">ایمان مداونی</a></li>
                        <li><a href="#">سجاد باقرزاده</a></li>
                    </ul>
                </div>
                <!-- break -->
            </div>
            <!-- end:sidebar -->

        </div>
    </div>
</div>
<!-- end:content -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
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
                            <div class="post-img post-img-circle" style="background: url(public/default/image/img02.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle" style="background: url(public/default/image/img03.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->
                        <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                        <div class="post-container post-noborder">
                            <div class="post-img post-img-circle" style="background: url(public/default/image/img15.jpg);"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

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
                            <h2>محبوب املاک و مستغلات</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="post-container">
                            <div class="post-img" style="background: url(public/default/image/img12.jpg);"><h3>برای فروش</h3></div>
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
                            <div class="post-img" style="background: url(public/default/image/img13.jpg);"><h3>برای اجاره</h3></div>
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
                        <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(public/default/image/img14.jpg);"><h3>برای فروش</h3></div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup> / </span>
                                    <span><i class="fa fa-hdd-o"></i> 3 Bed / </span>
                                    <span><i class="fa fa-male"></i> 2 Bath / </span>
                                    <span><i class="fa fa-building-o"></i> 1 Floors / </span>
                                    <span><i class="fa fa-car"></i> 1 Garages / </span>
                                </div>
                                <div class="heading-title">
                                    <h2><a href="#">Villa - <span>$800,000</span></a></h2>
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
                <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                <div class="row">
                    <div class="col-md-12">

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(public/default/image/team03.jpg);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">ایمان مدائنی</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i> Info@Barnamenevisan.Org</span><br>
                                    <span><i class="fa fa-phone"></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(public/default/image/avatar.png);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">سجاد باقرزاده</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i> Info@Barnamenevisan.Org</span><br>
                                    <span><i class="fa fa-phone"></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class="post-container post-noborder">
                            <div class="post-img" style="background: url(public/default/image/team01.jpg);"></div>
                            <div class="post-content list-agent">
                                <div class="heading-title">
                                    <h2><a href="#">ایمان مدائنی</a></h2>
                                </div>
                                <div class="post-meta">
                                    <span><i class="fa fa-envelope-o"></i> Info@Barnamenevisan.Org</span><br>
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
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- begin:subscribe -->
<div id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2 col-sm-8 col-xs-12">
                <h3>خبرنامه</h3>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" placeholder="Enter your mail">
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
                            <li><a href="#"><img src="public/default/image/img01.jpg" alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img02.jpg" alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img03.jpg" alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img04.jpg" alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img05.jpg" alt="partner of arillo responsive real estate theme"></a></li>
                            <li><a href="#"><img src="public/default/image/img06.jpg" alt="partner of arillo responsive real estate theme"></a></li>
                        </ul>
                    </div>
                    <a href="#" class="jcarousel-control-prev"><i class="fa fa-angle-right"></i></a>
                    <a href="#" class="jcarousel-control-next"><i class="fa fa-angle-left"></i></a>
                    <!-- <p class="jcarousel-pagination"></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:partner -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- begin:footer -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>املاک و مستغلات ثبت شده</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Apartments</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Bungalows</a></li>
                        <li><a href="#">Serviced Residence</a></li>
                        <li><a href="#">Villa</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>لورم ایپسوم متن ساختگی</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Lorenso</a></li>
                        <li><a href="#">Bardiman</a></li>
                        <li><a href="#">Tarjono noto boto limo</a></li>
                        <li><a href="#">Surti</a></li>
                        <li><a href="#">Ngatinem</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>ویژگی</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">How To</a></li>
                        <li><a href="#">Market Trend</a></li>
                        <li><a href="#">Android App</a></li>
                        <li><a href="#">IOS App</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h2>Arillo.</h2>
                    <address>
                        <strong>لورم ایپسوم متن ساختگی</strong><br>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم<br>
                        <br>
                        Telp. : +62-345678910<br>
                        Email : Info@Barnamenevisan.Org
                    </address>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- break -->
        <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
        <!-- begin:copyleft -->
        <div class="row">
            <div class="col-md-12 copyleft">
                <p>کلیه حقوق مادی و معنوی برای مجموعه برنامه نویسان محفوظ می باشد . هر گونه کپی برداری از محتوای آموزشی با ذکر منبع مجاز می باشد.</p>

                <a href="#top" class="btn btn-primary scroltop"><i class="fa fa-angle-up"></i></a>
                <ul class="list-inline social-links">
                    <li><a href="#" class="icon-twitter" rel="tooltip" title="" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon-facebook" rel="tooltip" title="" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icon-gplus" rel="tooltip" title="" data-placement="bottom" data-original-title="Gplus"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end:copyleft -->

    </div>
</div>
<!-- end:footer -->

<!-- begin:modal-signin -->
<div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="emailAddress">ایمیل</label>
                        <input type="email" class="form-control input-lg" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <label for="password">کلمه عبور</label>
                        <input type="password" class="form-control input-lg" placeholder="کلمه عبور">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="forget"> مرا بخاطر بسپار
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>آیا ثبت نام نکرده اید ? <a href="#modal-signup"  data-toggle="modal" data-target="#modal-signup">ثبت نام</a></p>
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="ورود به سایت">
            </div>
        </div>
    </div>
</div>
<!-- end:modal-signin -->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!-- begin:modal-signup -->
<div class="modal fade" id="modal-signup" tabindex="-1" role="dialog" aria-labelledby="modal-signup" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ثبت نام</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="ایمیل" class="form-control input-lg" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <input type="کلمه عبور" class="form-control input-lg" placeholder="کلمه عبور">
                    </div>
                    <div class="form-group">
                        <input type="تکرار کلمه عبور" class="form-control input-lg" placeholder="تکرار کلمه عبور">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="agree"> آیا با قوانین <a href="#">سایت ما موافق هستید؟</a>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>آیا ثبت نام کرده اید؟ <a href="#modal-signin" data-toggle="modal" data-target="#modal-signin">ورود به سایت.</a></p>
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="ثبت نام">
            </div>
        </div>
    </div>
</div>
<!-- end:modal-signup -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="public/default/js/jquery.js"></script>
<script src="public/default/js/bootstrap.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="public/default/js/gmap3.min.js"></script>
<script src="public/default/js/jquery.easing.js"></script>
<script src="public/default/js/jquery.jcarousel.min.js"></script>
<script src="public/default/js/imagesloaded.pkgd.min.js"></script>
<script src="public/default/js/masonry.pkgd.min.js"></script>
<script src="public/default/js/jquery.backstretch.js"></script>
<script src="public/default/js/jquery.nicescroll.min.js"></script>
<script src="public/default/js/script.js"></script>
</body>
</html>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->

