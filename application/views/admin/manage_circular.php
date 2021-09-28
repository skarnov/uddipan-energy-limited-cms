<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Circular
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_circular">Add New Circular</a></li>
            <li class="active">Manage Circular</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_circular');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_circular');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Program/Division</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>Salary/Month(BDT)</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_circular as $v_circular) {
                            ?>
                            <tr>
                                <td><?php echo $v_circular->job_title; ?></td>
                                <td><?php echo $v_circular->job_program; ?></td>
                                <td><?php echo $v_circular->job_location; ?></td>
                                <td><?php echo $v_circular->job_description; ?></td>
                                <td><?php echo $v_circular->job_salary; ?></td>
                                <td><?php echo $v_circular->dead_line; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_circular/<?php echo $v_circular->job_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Job"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_circular/<?php echo $v_circular->job_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Job" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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