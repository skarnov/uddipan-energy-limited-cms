<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Circular
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_circular"> Manage Circular</a></li>
            <li class="active">Edit Circular</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>admin/update_circular" method="POST">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" name="job_title" value="<?php echo $circular_info->job_title; ?>" class="form-control">
                                    <input type="hidden" name="job_id" value="<?php echo $circular_info->job_id; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Program/Division</label>
                                    <input type="text" name="job_program" value="<?php echo $circular_info->job_program; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="job_location" value="<?php echo $circular_info->job_location; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="job_description" value="<?php echo $circular_info->job_description; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Salary/Month(BDT)</label>
                                    <input type="text" name="job_salary" value="<?php echo $circular_info->job_salary; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deadline</label>
                                    <input type="text" name="dead_line" value="<?php echo $circular_info->dead_line; ?>" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>