<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 page-info">
            <h1 class="h1-page-title">Portfolio</h1>
        </div>
    </div>
</div>
<div class="body-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="portfolio-items" style="float: left;">
                    <?php foreach ($all_portfolio as $v_portfolio) { ?>
                        <div class="thumb-label-item web-design">
                            <a href="<?php echo base_url(); ?>home/portfolio_gallery/<?php echo $v_portfolio->portfolio_id; ?>">
                                <div class="img-overlay thumb-label-item-img">
                                    <img class="img-responsive" style="height:150px;" src="<?php echo base_url() . $v_portfolio->portfolio_image; ?>"  alt=""/>
                                </div>
                            </a>
                            <h3 class="thumb-label-item-title">
                                <a href="<?php echo base_url(); ?>home/portfolio_gallery/<?php echo $v_portfolio->portfolio_id; ?>"><?php echo $v_portfolio->portfolio_name; ?></a>
                            </h3>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
