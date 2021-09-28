<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Content
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
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('save_category');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('save_category');
                    }
                    ?>
                </h3>
                <form action="<?php echo base_url(); ?>admin/save_category" method="POST" enctype="multipart/form-data">
                    <div class="box box-info">
                        <div class="col-xs-8">
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
                                    <label>Upload Image</label>
                                    <input type="file" name="category_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Summary</label>
                                    <textarea name="category_summery" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="category_description" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>