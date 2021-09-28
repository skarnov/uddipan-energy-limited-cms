<!-- Page Content -->
<div class="container">
    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $portfolio_info->portfolio_name; ?></h1>
        </div>
    </div>
    <!-- Portfolio Item Row -->
    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive" src="<?php echo base_url(). $portfolio_info->category_image; ?>" alt="">
        </div>
        <div class="col-md-4">
            <h3>Project Summary</h3>
            <p><?php echo $portfolio_info->category_summery; ?></p>
            <h3>Project Description</h3>
            <p><?php echo $portfolio_info->category_description; ?></p>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Related Projects</h3>
        </div>
        <?php foreach ($all_portfolio as $v_portfolio) { ?>
        <div class="col-sm-3 col-xs-6">
            <a href="<?php echo base_url(); ?>home/portfolio_details/<?php echo $v_portfolio->portfolio_id; ?>">
                <img class="img-responsive portfolio-item" src="<?php echo base_url() . $v_portfolio->portfolio_image; ?>" alt="">
            </a>
        </div>
        <?php } ?>
    </div>
    <hr>
</div>