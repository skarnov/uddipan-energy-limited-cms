<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 page-info">
            <h1 class="h1-page-title">Career</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <img style=" height: 160px; margin: 0 auto 15px auto;" src="<?php echo base_url(); ?>asset/public/img/career-banner.jpg" class="img-responsive"/>
    </div>
</div>
<div class="body-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="sidebar-content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Program/Division</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Salary/Month(BDT)</th>
                                <th>Deadline</th>
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
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>