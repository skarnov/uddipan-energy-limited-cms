<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Portfolio
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_portfolior"> Manage Portfolio</a></li>
            <li class="active">Add New Portfolio</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/update_portfolio" method="POST" enctype="multipart/form-data">
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Portfolio Heading</label>
                                    <input type="text" name="portfolio_name" value="<?php echo $portfolio_info->portfolio_name; ?>" class="form-control">
                                    <input type="hidden" name="portfolio_id" value="<?php echo $portfolio_info->portfolio_id; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <img src="<?php echo base_url().$portfolio_info->portfolio_image; ?>" style="height: 200px; width: 300px;" />
                                    <input type="file" name="portfolio_image" class="form-control">
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>