<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Slide
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_slider"> Manage Slider</a></li>
            <li class="active">Add New Slide</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/save_slide" method="POST" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_slide');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_slide');
                            }
                            ?>
                        </h3>
                        <div class="alert alert-danger">
                            Width = 620 and Height = 400px
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Slide Heading</label>
                                    <input type="text" name="slide_heading" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slide Subheading</label>
                                    <input type="text" name="slide_subheading" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="slide_image" class="form-control">
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>