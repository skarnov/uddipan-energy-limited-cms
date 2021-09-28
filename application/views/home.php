<div class="rev-slider-full">
    <div class="rev-slider-banner-full rev-slider-full">
        <ul>
            <?php
            foreach ($all_slide as $v_slide) {
                ?>
                <li data-transition="fade" data-slotamount="14">
                    <div class="caption sfb" data-x="-100" data-y="50" data-speed="700" data-start="0" data-easing="easeOutBack">
                        <img class="img-margin" src="<?php echo base_url() . $v_slide->slide_image; ?>" alt="" />
                    </div>
                    <div class="tp-caption modern_big_bluebg large_text lfr ltr" data-x="550" style="font-size:30px;" data-y="250" data-start="500" data-easing="easeOutBack">
                        <?php echo $v_slide->slide_heading; ?>
                    </div>
                    <div class="tp-caption modern_big_bluebg large_text lfr ltl" data-x="550" style="font-size:25px;font-weight:lighter" data-y="300" data-start="1000" data-easing="easeOutBack">
                        <?php echo $v_slide->slide_subheading; ?>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
</div>
<div class="body-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div data-animdelay="0s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp" class="content-box animated fadeInUp animatedVisi" style="animation-delay: 0s; animation-duration: 1s;">
                    <h4 class="h4-body-title">
                        <strong>Inspire </strong>
                    </h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp" class="content-box animated fadeInUp animatedVisi" style="animation-delay: 0.2s; animation-duration: 1s;">
                    <h4 class="h4-body-title">
                        <strong>Innovation </strong>
                    </h4>

                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div data-animdelay="0.4s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp" class="content-box animated fadeInUp animatedVisi" style="animation-delay: 0.4s; animation-duration: 1s;">
                    <h4 class="h4-body-title">
                        <strong>Implementation </strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">What We Offer</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <div class="tab-container">
                                <ul class="etabs">
                                    <li class="tab">
                                        <a href="#tab1">Overview</a>
                                    </li>
                                    <li class="tab">
                                        <a href="#tab2">Mission Statement</a>
                                    </li>
                                    <li class="tab">
                                        <a href="#tab3">Focus Area</a>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div id="tab1" style="font-size: 14px;line-height: 25px;text-align: justify;color:#4b4b4b;">
                                        <div data-tbl='tbl_blocks' data-pk='block_id' data-dc='block_html' data-id='3' id='block_3'>
                                            <p>Uddipan Energy Ltd (UEL) is a clean-tech organization that focuses on advanced energy technol</p>
                                            <hr>
                                            <p>ogies and business models. It believes advanced renewable energy technology (RET) is one of the key drivers for green development.
                                                <br> RETs create access to energy for under served people in developing and the least countries as a tool to fight against poverty and facilitate human development. UEL operates as a sustainable, full-service renewable energy provider-making commercially viable energy services for detached/remote areas where the public electricity grid is not yet available.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="tab2" style="font-size: 14px;line-height: 25px;text-align: justify;color:#4b4b4b;">
                                        <div data-tbl='tbl_blocks' data-pk='block_id' data-dc='block_html' data-id='4' id='block_4'>
                                            <p>Our principal mandate is to accelerate the improvement and diffusion of appropriate, affordable and efficient renewable energy technologies in developing and the least developed countries.
                                                <br> UEL assembles advanced technologies, along with skilled professional and staff mentors from the corporate, industrial and academic environments, and inspires them to think judgmentally using the five pillars of sustainability.</p>
                                        </div>
                                    </div>
                                    <div id="tab3" style="font-size: 14px;line-height: 25px;text-align: justify;color:#4b4b4b;">
                                        <div data-tbl='tbl_blocks' data-pk='block_id' data-dc='block_html' data-id='5' id='block_5'>
                                            <p>Our current primary focuses are to market affordable off-grid lighting technology, as well as to establish a greater number of “Smart Village microgrids.” These will help to increase energy access, consumption, and efficiency in rural areas. In turn, health conditions and the financial well-being of these areas will see an improvement.
                                                <br> UEL applies several methods to the development of the rural agriculture sector. These methods include: water pumping for domestic and industrial use, irrigation and post-harvest processing, and promoting advanced, renewable energy-based, and sustainable agro-technologies. The above will help to facilitate the efforts of developing and least-developed nations to transition to the green economy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">News Feed</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <div class="row">
                                <?php
                                foreach ($all_news as $v_news) {
                                    ?>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>">
                                            <img height="163px" src="<?php echo base_url() . $v_news->news_image_0; ?>" alt="<?php echo $v_news->news_title; ?>"/>
                                        </a>
                                        <h5 style="font-size: 10px;" class="thumb-label-item-title"><a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>" class="posts-list-title"><?php echo $v_news->news_title; ?></a></h5>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>