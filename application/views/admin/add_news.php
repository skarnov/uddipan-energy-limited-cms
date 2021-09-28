<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New News
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_news"> Manage News</a></li>
            <li class="active">Add New News</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/save_news" method="POST" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_news');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_news');
                            }
                            ?>
                        </h3>
                        <div class="alert alert-danger">
                            [ Width = 673px and Height = 449px ]
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="news_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>News</label>
                                    <textarea name="news" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Published Date </label>
                                    <input type="text" name="news_date" value="<?php echo date('d F Y');?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Main Image <span style="color: red">(Required)</span></label>
                                    <input type="file" name="news_image_0" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Additional Image - 1</label>
                                    <input type="file" name="news_image_1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Additional Image - 2</label>
                                    <input type="file" name="news_image_2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Additional Image - 3</label>
                                    <input type="file" name="news_image_3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Additional Image - 4</label>
                                    <input type="file" name="news_image_4" class="form-control">
                                </div>
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