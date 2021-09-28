<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 page-info">
            <h1 class="h1-page-title">Contact Us</h1>
        </div>
    </div>
</div>
<div class="body-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <h3 class="h3-body-title">
                    Leave A Message
                </h3>
                <form class="form-wrapper" action="" id="contact-form" method="post" role="form" novalidate>
                    <div class="form-group clearfix">
                        <label class="control-label" for="name">Name *</label>
                        <div class="col-xs-6">
                            <input type="text" id="name" name="name" class="form-control" required value="">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="control-label" for="user-email"> E-mail *</label>
                        <div class="col-xs-6">
                            <input type="text" name="email" id="user-email" class="form-control" required value="">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="control-label" for="name">Subject*</label>
                        <div class="col-xs-6">
                            <input type="text" id="name" name="subject" class="form-control" required value="">
                        </div>
                    </div>
                    <div class="from-group clearfix">
                        <label class="control-label" for="message"> Message *</label>
                        <div class="col-xs-8">
                            <textarea name="message" id="message" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="space-sep-10"></div>
                    <div class="form-group clearfix">
                        <label class="control-label"></label>
                        <div class="col-xs-6">
                            <input type="submit" name="action" value="Send"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-md-offset1 col-sm-4 col-sm-offset-1">
                <div class="separator"></div>
                <div class="sidebar-block">
                    <h3 class="h3-sidebar-title">
                        Contact Us
                    </h3>
                </div>
                <div data-tbl='tbl_blocks' data-pk='block_id' data-dc='block_html' data-id='1' id='block_1'>
                    <?php
                    foreach ($all_contact_page_address as $v_address) {
                        ?>
                        <div class="sidebar-block">
                            <h3 class="h3-sidebar-title">
                                <?php echo $v_address->address_title; ?>:
                            </h3>
                            <?php
                            $name = $v_address->name;
                            if ($name != NULL) {
                                ?>
                                <p>
                                    <strong>Name: </strong>
                                    <?php echo $name; ?>
                                </p>
                                <?php
                            }
                            ?>
                            <p>
                                <?php echo $v_address->address; ?>
                            </p>
                            <?php
                            $phone = $v_address->phone;
                            if ($phone != NULL) {
                                ?>
                            <p>
                                <strong>Phone: </strong>
                                <?php echo $phone; ?>
                            </p>
                                    <?php
                            }
                            ?>
                            <?php
                            $fax = $v_address->fax;
                            if ($fax != NULL) {
                                ?>                        
                                <p>
                                    <strong>Fax: </strong>
                                    <?php echo fax; ?>
                                </p>
                                <?php
                            }
                            ?>
                            <?php
                            $email = $v_address->email;
                            if ($email != NULL) {
                                ?>
                                <p>
                                    <strong>Email: </strong>
                                    <a><?php echo $email; ?></a>
                                </p>
                                <?php
                            }
                            ?>
                            <?php
                            $website = $v_address->website;
                            if ($website != NULL) {
                                ?>
                                <p>
                                    <strong>Website: </strong>
                                    <a><?php echo $v_address->website; ?></a>
                                </p>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>          
            </div>
        </div>
    </div>
</div>