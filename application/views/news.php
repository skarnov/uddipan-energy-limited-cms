<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 page-info">
            <h1 class="h1-page-title">News</h1>
        </div>
    </div>
</div>
<div class="body-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="sidebar-content">
                    <ul class="posts-list">
                        <?php foreach ($all_news as $v_news) { ?>
                            <li>
                                <div class="posts-list-thumbnail">
                                    <a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>">
                                        <img height="50px" src="<?php echo base_url() . $v_news->news_image_0; ?>" alt=""/>
                                    </a>
                                </div>
                                <div class="posts-list-content">
                                    <h5 class="thumb-label-item-title">
                                        <a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>" class="posts-list-title"><?php echo $v_news->news_title; ?></a>
                                        <small><?php echo $v_news->news_date; ?></small>   
                                    </h5>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>