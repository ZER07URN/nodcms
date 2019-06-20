<?php if(isset($data_list) && count($data_list)){ ?>
    <div class="padding-top-20 padding-bottom-20">
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($data_list as $item){ ?>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="margin-20 text-center">
                                    <?php if($this->settings['services_display_mode'] == "image"){ ?>
                                    <img src="<?php echo base_url().$item['service_image']; ?>" class="img-fluid rounded-circle">
                                    <?php }elseif($this->settings['services_display_mode'] == "icon"){ ?>
                                        <i class="<?php echo $item['service_icon']; ?> fa-5x font-theme"></i>
                                    <?php } ?>
                                </div>
                                <h4 class="card-title text-center"><?php echo $item['title']; ?></h4>
                                <div class="card-text text-center"><?php echo $item['description']; ?></div>
                                <?php if($services_has_price){ ?>
                                    <div class="<?php echo $item['service_price']!=0?"font-red":"font-green"; ?> font-weight-bold text-center">
                                        <?php echo $item['service_price']!=0?$this->currency->format($item['service_price']):_l("Free", $this); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if($services_has_content){ ?>
                                <div class="text-center">
                                    <a class="btn btn-block default" href="<?php echo $item['service_url']; ?>"><?php echo _l("Learn more", $this); ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>