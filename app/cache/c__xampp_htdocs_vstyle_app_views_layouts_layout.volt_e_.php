a:3:{i:0;s:3733:"<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Vstyle</title>
    <?php echo $this->tag->stylesheetLink('css/font.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/bootstrap.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/font-awesome.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/Pe-icon-7-stroke.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/plugin/owl-carousel/owl.carousel.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/plugin/owl-carousel/owl.theme.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/plugin/owl-carousel/owl.transitions.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/reset_set_me.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/style.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/hover.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/responsive.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/plugin/wow/animate.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/plugin/fancybox/jquery.fancybox.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/plugin/fancybox/jquery.fancybox-buttons.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/plugin/fancybox/jquery.fancybox-thumbs.css'); ?>


</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-header-index" role="navigation">
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand navbar-logo hidden-md" href="<?php echo $this->url->get(); ?>">
        <?php echo $this->tag->image(array('images/logo-vstyle.png', 'alt' => 'logo vstyle', 'class' => 'img-responsive')); ?>
        </a>
      </div>
                
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <div class="full-menu">
          <ul class="nav navbar-nav navbar-right navbar-menu">
            <?php foreach ($category as $cate) { ?>
          <li><a href="<?php echo $this->url->get(); ?><?php echo $cate->Category_Alias; ?>" class="hvr-underline-from-center edit-hvr-underline"> <?php echo $cate->Category_Name; ?> </a></li>
            <?php } ?>
          </ul>
          <p><span><i class="fa fa-phone"></i></span>0123 456 789 / 0987 654 321</p>

          <ul class="nav navbar-nav navbar-language">
              <li>
                <a href="#">
              <?php echo $this->tag->image(array('images/lang-vi.jpg', 'alt' => 'language vi', 'class' => 'img-responsive')); ?>
                </a>
              </li>
              <li>
                <a href="#">
                  <?php echo $this->tag->image(array('images/lang-us.jpg', 'alt' => 'language vi', 'class' => 'img-responsive')); ?>
                </a>
              </li>
              <li>
                <a href="#">
                  <?php echo $this->tag->image(array('images/lang-japan.jpg', 'alt' => 'language vi', 'class' => 'img-responsive')); ?>
                </a>
              </li>
            </ul>
        </div><!--End Full-menu-->
      </div><!-- /.navbar-collapse -->

    </div>
  </nav>
<!--Slide TOP Index-->
<!--*********************************-->
";s:11:"contentnews";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:4:"

";s:4:"file";s:52:"C:\xampp\htdocs\Vstyle/app/views/layouts/layout.volt";s:4:"line";i:78;}}i:1;s:3484:"
<!--Footer-->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="full-box-left-footer">
          <h4>Caribe Printing & Packaging</h4>
          <p>Công ty Caribe nhận ra rằng một công ty có thể được phát triển thông qua sự thành công vững chắc của các khách hàng. Phong Cách Việt mong muốn dẫn đầu thị trường như là một công ty tiên phong trong việc vun đắp tương lai bền vững cho quý khách hàng.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="full-box-center-footer">
          <h4>Liên hệ</h4>
          <p class="clearfix"><i class="fa fa-map-marker"></i><span>20a Nguyễn Văn Trỗi - Phú Nhuận - TP.HCM</span></p>
          <p class="clearfix"><i class="fa fa-phone"></i><span>0123 456 789</span></p>
          <p class="clearfix"><i class="fa fa-fax"></i><span>0987 654 321</span></p>
          <p class="clearfix"><i class="fa fa-envelope-o"></i><span>caribe@gmail.com</span></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="full-box-right-footer">
        <!-- <iframe src="https://www.google.com/maps/d/embed?mid=zTJb052QWNKA.kqVx9tPpTbj0" width="100%" height="300"></iframe> -->
        <!-- <?php echo $this->tag->image(array('images/img-map.png', 'alt' => 'language vi', 'class' => 'img-responsive')); ?> -->
        </div>
      </div>
    </div>
    <!---->
    <div class="row">
      <div class="col-md-6">
        <div class="title-knvct">
          <h4>Kết nối với chúng tôi</h4>
        </div>
        <div class="full-btn-mxh">
          <a class="icon-mxh-fb hvr-grow" href="#"><i class="fa fa-facebook-square"></i></a>
          <a class="icon-mxh-twitter hvr-grow" href="#"><i class="fa fa-twitter-square "></i></a>
          <a class="icon-mxh-google hvr-grow" href="#"><i class="fa fa-google-plus-square"></i></a>
          <a class="icon-mxh-pint hvr-grow" href="#"><i class="fa fa-pinterest-square"></i></a>
        </div>
        <div class="copyright">
          <p>Caribe All Rights  Reserved - Site by</p>
        </div>
      </div>
    </div>
  </div>
</div>

    <?php echo $this->tag->javascriptInclude('js/jquery.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/plugin/owl-carousel/owl.carousel.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/slide.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/plugin/nicescroll/jquery.nicescroll.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/plugin/wow/wow.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/masonry.pkgd.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/imagesloaded.pkgd.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/app.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/plugin/fancybox/jquery.fancybox.pack.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/plugin/fancybox/jquery.fancybox-buttons.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/plugin/fancybox/jquery.fancybox-thumbs.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/plugin/fancybox/jquery.mousewheel-3.0.6.pack.js'); ?>
    
   </body>
</html>";}