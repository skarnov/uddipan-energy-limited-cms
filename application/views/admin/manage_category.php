<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Content
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_category">Add New Content</a></li>
            <li class="active">Manage Content</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Portfolio</th>
                            <th>Image</th>
                            <th>Summary</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_category as $v_category) {
                            ?>
                            <tr>
                                <td><?php echo $v_category->portfolio_name; ?></td>
                                <td><img src="<?php echo base_url() . $v_category->category_image; ?>" style="height:100px; width:200px;" /></td>
                                <td><?php echo $v_category->category_summery; ?></td>
                                <td><?php echo $v_category->category_description; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_category/<?php echo $v_category->category_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Content"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_category/<?php echo $v_category->category_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Content" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>