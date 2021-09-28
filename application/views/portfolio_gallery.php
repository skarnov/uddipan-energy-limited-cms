<!-- Page Content -->
<div class="container">
    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $title; ?></h1>
        </div>
    </div>
    <div class="body-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="portfolio-items" style="float: left;">
                        <?php foreach ($portfolio_gallery as $v_portfolio) { ?>
                            <div class="thumb-label-item web-design">
                                <a href="<?php echo base_url(); ?>home/portfolio_details/<?php echo $v_portfolio->category_id; ?>">
                                    <div class="img-overlay thumb-label-item-img">
                                        <img class="img-responsive" style="height:150px;" src="<?php echo base_url() . $v_portfolio->category_image; ?>"  alt=""/>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>