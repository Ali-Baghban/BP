<?php
//var_dump($project);
$html1 = <<<EOF
    <div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> ویرایش مشخصات پروژه یا طرح : $project->name  </h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="post" action="">
                <fieldset>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">نام</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$project->name" name="frm[name]">
                        </div>
                        </div>
                     <div class="control-group success">
                        <label class="control-label" for="inputSuccess">نام شرکت</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess" value="$project->company"name="frm[company]">
                        </div>
                    </div>
                    
                    <!--
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">شهر</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="//project->city" name="frm[city]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">آدرس دقیق</label>
                     
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="" name="frm[details]">
                        </div>
                    </div>
                    -->
                    
                    
EOF;
echo $html1;

foreach ($project->img as $value):
    $url[] = $value;
endforeach;
$html2 = <<<EOF
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">قیمت</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$project->price" name="frm[price]">
                        </div>
                    </div>
                    <div class="control-group success">
                        <label class="control-label" for="inputSuccess">جزئیات و توضیحات</label>
                        <div class="controls">
                            <textarea class="textarea" name="frm[details]">$project->details</textarea>
                        </div>
                    </div>
                    <div class="control-group success">
    <label class="control-label" for="inputSuccess">فایل</label>
    <div class="controls">
        <img src="public/default/image/file.jpg" class="img-responsive img-rounded" style="width: 200px">
    </div>
</div>
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">لینک</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$project->file_path" name="frm[file_path]">
                        </div>
</div>
<div class="control-group success">
    <label class="control-label" for="inputSuccess">تصاویر</label>
    <div class="controls">
        <img src="$url[0]" class="img-responsive img-rounded" style="width: 200px">
    </div>
</div>
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">لینک</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$url[0]" name="frm[img1]">
                        </div>
</div>
<div class="control-group success">
    <label class="control-label" for="inputSuccess">تصاویر</label>
    <div class="controls">
        <img src="$url[1]" class="img-responsive img-rounded" style="width: 200px">
    </div>
</div>
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">لینک</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$url[1]" name="frm[img2]">
                        </div>
</div>
<div class="control-group success">
    <label class="control-label" for="inputSuccess">تصاویر</label>
    <div class="controls">
        <img src="$url[2]" class="img-responsive img-rounded" style="width: 200px">
    </div>
</div>
<div class="control-group success">
                        <label class="control-label" for="inputSuccess">لینک</label>
                        <div class="controls">
                            <input type="text" id="inputSuccess"  value="$url[2]" name="frm[img3]">
                        </div>
</div>
<div class="form-actions">
    <button type="submit" class="btn btn-primary" name="frm[submit]">ویرابش</button>
    <input type="reset" class="btn" value="پاک کردن">
</div>
</fieldset>
</form>
</div>
</div><!--/span-->

</div><!--/row-->

EOF;
echo $html2;


?>
