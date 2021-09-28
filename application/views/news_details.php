<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 page-info">
            <h1 class="h1-page-title"><?php echo $news_info->news_title; ?></h1>
        </div>
    </div>
</div>
<div class="body-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="widget-main">
                    <div class="widget-inner">
                        <div class="col-md-12">
                            <time class="entry-date">
                                <?php echo $news_info->news_date; ?>                         
                            </time>
                            <hr>
                        </div>
                        <div class="col-md-12 notice-center">
                            <div class="rev-slider-full">
                                <div class="rev-slider-banner-full  rev-slider-full">
                                    <ul>
                                        <li data-transition="fade" data-slotamount="14">
                                            <div class="caption sfb" data-x="-100" data-y="50" data-speed="700" data-start="0" data-easing="easeOutBack">
                                                <img class="img-margin" src="<?php echo base_url() . $news_info->news_image_0; ?>" alt="" />
                                            </div>
                                        </li>
                                        <li data-transition="fade" data-slotamount="14">
                                            <div class="caption sfb" data-x="-100" data-y="50" data-speed="700" data-start="0" data-easing="easeOutBack">
                                                <img class="img-margin" src="<?php echo base_url() . $news_info->news_image_1; ?>" alt="" />
                                            </div>
                                        </li>
                                        <li data-transition="fade" data-slotamount="14">
                                            <div class="caption sfb" data-x="-100" data-y="50" data-speed="700" data-start="0" data-easing="easeOutBack">
                                                <img class="img-margin" src="<?php echo base_url() . $news_info->news_image_2; ?>" alt="" />
                                            </div>
                                        </li>
                                        <li data-transition="fade" data-slotamount="14">
                                            <div class="caption sfb" data-x="-100" data-y="50" data-speed="700" data-start="0" data-easing="easeOutBack">
                                                <img class="img-margin" src="<?php echo base_url() . $news_info->news_image_3; ?>" alt="" />
                                            </div>
                                        </li>
                                        <li data-transition="fade" data-slotamount="14">
                                            <div class="caption sfb" data-x="-100" data-y="50" data-speed="700" data-start="0" data-easing="easeOutBack">
                                                <img class="img-margin" src="<?php echo base_url() . $news_info->news_image_4; ?>" alt="" />
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="tp-bannertimer tp-bottom"></div>
                                </div>
                            </div>
                            <p class="notice-center"></p>
                            <p><?php echo $news_info->news; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="sidebar-content">
                    <h1 class="h1-section-title">Other News Feed</h1>
                    <ul class="posts-list">
                        <?php
                        foreach ($all_news as $v_news) {?>
                        <li>
                            <div class="posts-list-thumbnail">
                                <a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>">
                                    <img height="40px" src="<?php echo base_url() . $v_news->news_image_0; ?>" alt=""/>
                                </a>
                            </div>
                            <div class="posts-list-content">
                                <a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>" class="posts-list-title"><?php echo $v_news->news_title; ?></a>
                                <span class="posts-list-meta">
                                    <?php echo $v_news->news_date; ?> 
                                </span>
                            </div>
                        </li>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>