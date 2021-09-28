<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Content
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_category"> Manage Content</a></li>
            <li class="active">Add New Content</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/update_category" method="POST" enctype="multipart/form-data" name="category">
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Select Portfolio <span style="color: red">(Required)</span></label>
                                        <select name="portfolio_id" onclick="selectSubcategory(this.value);" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Portfolio</option>
                                            <?php
                                            foreach ($all_portfolio as $v_portfolio) {
                                                ?>
                                                <option value="<?php echo $v_portfolio->portfolio_id; ?>"><?php echo $v_portfolio->portfolio_name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <img src="<?php echo base_url().$category_info->category_image; ?>" style="height: 200px; width: 300px;" />
                                    <input type="file" name="category_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Summary</label>
                                    <textarea name="category_summery" class="form-control"><?php echo $category_info->category_summery; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="category_description" class="form-control"><?php echo $category_info->category_description; ?></textarea>
                                    <input type="hidden" name="category_id" value="<?php echo $category_info->category_id; ?>">
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.forms['category'].elements['portfolio_id'].value = '<?php echo $category_info->portfolio_id; ?>';
</script>