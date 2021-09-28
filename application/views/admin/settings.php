<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Settings</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#add">Add Address</a></li>
                    <li><a data-toggle="tab" href="#manage">Manage Address</a></li>
                    <li><a data-toggle="tab" href="#image">Add IT Service Image</a></li>
                    <li><a data-toggle="tab" href="#service">Manage IT Service Image</a></li>
                </ul>
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('settings');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('settings');
                    }
                    ?>
                </h3>
                <div class="tab-content">
                    <div id="add" class="tab-pane fade in active">
                        <br/>
                        <form action="<?php echo base_url(); ?>admin/save_contact_page_address" method="POST">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Address Title</label>
                                        <input type="text" name="address_title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Main Address</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>FAX</label>
                                        <input type="text" name="fax" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" name="website" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info pull-right">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="manage" class="tab-pane fade">
                        <br/>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_contact_page_address as $v_address) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v_address->address_title; ?></td>
                                        <td><?php echo $v_address->phone; ?></td>
                                        <td><?php echo $v_address->email; ?></td>
                                        <td><?php echo $v_address->website; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/delete_address/<?php echo $v_address->address_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Address" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="image" class="tab-pane fade">
                        <br/>
                        <form action="<?php echo base_url(); ?>admin/save_service_image" method="POST" enctype="multipart/form-data">
                            <div class="alert alert-danger">
                                Width = 400px and Height = 400px
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input type="file" name="service_image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info pull-right">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="service" class="tab-pane fade">
                        <br/>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_service_image as $v_service_image) {
                                    ?>
                                    <tr>
                                        <td><img src="<?php echo base_url() . $v_service_image->service_image; ?>" style="height:100px; width:200px;" /></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/delete_service_image/<?php echo $v_service_image->service_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Service Image" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                        </td>
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
    </section>
</div>