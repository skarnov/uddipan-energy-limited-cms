<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Circular
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_circular"> Manage Circular</a></li>
            <li class="active">Add New Circular</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('save_circular');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('save_circular');
                    }
                    ?>
                </h3>
                <form action="<?php echo base_url(); ?>admin/save_circular" method="POST">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" name="job_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Program/Division</label>
                                    <input type="text" name="job_program" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="job_location" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="job_description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Salary/Month(BDT)</label>
                                    <input type="text" name="job_salary" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deadline</label>
                                    <input type="text" name="dead_line" value="<?php echo date('d F Y');?>" class="form-control">
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