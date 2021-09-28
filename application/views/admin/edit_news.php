<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update News
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
                    <form action="<?php echo base_url(); ?>admin/update_news" method="POST" enctype="multipart/form-data">
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="news_title" value="<?php echo $news_info->news_title; ?>" class="form-control">
                                    <input type="hidden" name="news_id" value="<?php echo $news_info->news_id; ?>">
                                </div>
                                <div class="form-group">
                                    <label>News</label>
                                    <textarea name="news" class="form-control"><?php echo $news_info->news; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Published Date </label>
                                    <input type="text" name="news_date" value="<?php echo $news_info->news_date; ?>" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-danger pull-right">Update</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>