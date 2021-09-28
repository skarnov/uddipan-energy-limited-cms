<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage News
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_news"> Add News</a></li>
            <li class="active">Manage News</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>News</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_news as $v_news) {
                            ?>
                            <tr>
                                <td><?php echo $v_news->news_title; ?></td>
                                <td>
                                    <img src="<?php echo base_url() . $v_news->news_image_0; ?>" style="height:50px; width:50px;" />
                                </td>
                                <td><?php echo $v_news->news; ?></td>
                                <td><?php echo $v_news->news_date; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_news/<?php echo $v_news->news_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Update News"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_news/<?php echo $v_news->news_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete News" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</div>