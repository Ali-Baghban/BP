<!-- begin:header -->
<div id="header" class="heading" style="background-image: url(public/default/image/img01.jpg);">
</div>
<!-- end:header -->

<!-- begin:content -->
<div id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-12 single-post">
                        <ul id="myTab" class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#detail" data-toggle="tab"><i class="fa fa-university"></i> مشخصات طرح و پروژه</a></li>
                            <li><a href="#location" data-toggle="tab"><i class="fa fa-paper-plane-o"></i> بیشتر</a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="detail">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="slider-property" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">

                                                <?php foreach ($gallery as $item): ?>
                                                <li data-target="#slider-property" data-slide-to="0" class="">
                                                    <img src="<?php echo $item->url; ?>" alt="">
                                                </li>
                                                <?php endforeach; ?>
                                            </ol>
                                            <div class="carousel-inner">
                                                <?php
                                                $count = 0;
                                                foreach ($gallery as $item):
                                                    if($count == 0){
                                                    ?>
                                                <div class="item active">
                                                    <img src="<?php echo $item->url; ?>" alt="">
                                                </div>
                                                <?php }else{?>
                                                        <div class="item">
                                                            <img src="<?php echo $item->url; ?>" alt="">
                                                        </div>
                                                <?php } $count++; endforeach; ?>
                                            </div>
                                            <a class="left carousel-control" href="#slider-property" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                            <a class="right carousel-control" href="#slider-property" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                        </div>
                                        <h3>جزئیات طرح</h3>
                                        <table class="table table-bordered">
                                            <tr>

                                                <td width="20%"><strong>ID</strong></td>
                                                <td><?php
                                                    $tmp = 194*3721;
                                                    echo "#".$project->id."-$tmp-".$h_id; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>نام طرح</strong></td>
                                                <td><?php echo $project->name; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>شرکت</strong></td>
                                                <td><?php echo $project->company; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>قیمت</strong></td>
                                                <td><?php echo $project->price; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>فایل ها</strong></td>
                                                <td><a href="<?php echo $file->url; ?>" >دانلود</a></td>
                                            </tr>

                                        </table>
                                                <h3>توضیحات طرح</h3>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><?php echo $project->details; ?></td>
                                            </tr>


                                        </table>

                                    </div>
                                </div>


                            </div>
                            <!-- break -->
                            <div class="tab-pane fade" id="location">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>تماس با ما </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="team-container team-dark">
                                            <div class="team-image">
                                                <img src="public/default/image/avt.png" alt="the team - mikha realestate theme">
                                            </div>
                                            <div class="team-description">
                                                <h3>صاحب طرح : <?php echo $designer_info->name; ?></h3>
                                                <p><i class="fa fa-phone"></i> : <?php echo $designer_info->phone; ?><br>

                                                <div class="team-social">
                                                    <span><a href="mailto:<?php echo $designer_info->email; ?>" title="Email" rel="tooltip" data-placement="top"><i class="fa fa-envelope"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <label for="name">کد طرح</label>
                                                <input type="text" name="" class="form-control input-lg"  placeholder="<?php $tmp = 194*3721;
                                                echo "#".$project->id."-$tmp-".$h_id; ?>"  disabled>
                                                <input type="hidden"  name="frm[project_id]" value="<?php echo $project->id; ?>"
                                            </div>
                                            <div class="form-group">
                                                <label for="name">نام</label>
                                                <input type="text" name="frm[name]" class="form-control input-lg" placeholder="نام : ">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">ایمیل</label>
                                                <input type="email" name="frm[email] "class="form-control input-lg" placeholder="ایمیل : ">
                                            </div>
                                            <div class="form-group">
                                                <label for="telp">تلفن.</label>
                                                <input type="text" name="frm[phone]" class="form-control input-lg" placeholder="تلفن : ">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">پیام</label>
                                                <textarea class="form-control input-lg" name="frm[message]" rows="6" placeholder="پیام : "></textarea>
                                            </div>
                                            <div class="form-group">
                                                <p class="text-center">
                                                <input type="submit" name="submit" value="ارسال درخواست" class="btn btn-primary btn-lg">
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:content -->
