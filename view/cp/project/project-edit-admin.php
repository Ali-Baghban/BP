<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> ویرایش اطلاعات جامع  </h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="post" action="">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">وضعیت پروژه</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="frm[status]" id="optionsRadios1" value="1" <?php echo $active; ?>>
                                فعال
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="frm[status]" id="optionsRadios2" value="0" <?php echo $inactive; ?>>
                                غیر فعال </label>
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

