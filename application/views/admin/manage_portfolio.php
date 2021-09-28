<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Portfolio
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_portfolio"> Add Portfolio</a></li>
            <li class="active">Manage Portfolio</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_portfolio as $v_portfolio) {
                            ?>
                            <tr>
                                <td><?php echo $v_portfolio->portfolio_name; ?></td>
                                <td>
                                    <img src="<?php echo base_url() . $v_portfolio->portfolio_image; ?>" style="height:50px; width:50px;" />
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_portfolio/<?php echo $v_portfolio->portfolio_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Update Portfolio"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_portfolio/<?php echo $v_portfolio->portfolio_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Portfolio" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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