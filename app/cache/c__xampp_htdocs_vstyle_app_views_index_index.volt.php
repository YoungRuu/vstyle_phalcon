<!DOCTYPE html>
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

<div class="row">
    <div class="col-md-12">
      <p><?php echo $this->flash->output(); ?></p>
    </div>
  </div>
	<div class="full-content-sanpham">
  <div class="container">
        <div class="row">
         <div class="col-md-12">
            <div class="title-page-top"><p><a href="<?php echo $this->url->get(); ?>">Trang chủ</a> / <?php echo $newstitle; ?></p></div>
         </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="line-spcct">
                <p>Tin Tức Nổi Bật</p>
            </div>
          </div>
        </div>
  </div>
<!---->
<div class="full-tintucnoibat-index">
            <div class="box-slide-ttnb">
              <div id="owl-ttnb-slide" class="owl-carousel owl-theme">
              <?php foreach ($news as $newsttnb) { ?>

                <div class="item clearfix">
                <div class="img-slide-ttnb-left">
                      <img class="img-responsive" src="<?php echo $this->url->get(); ?>files/<?php echo $newsttnb->News_Images; ?>" alt="">
                    </div>
                <div class="text-slide-ttnb-right clearfix">
                      <h3><?php echo $newsttnb->News_Title; ?></h3>
                      <p><?php echo $newsttnb->News_Summary; ?></p>
                    <a href="<?php echo $this->url->get(); ?><?php echo $newsttnb->Category_Alias; ?>/<?php echo $newsttnb->News_Alias; ?>" class="hvr-bounce-to-left edit-hvr-bounce-to-left" ><i class="fa fa-search"></i> Xem Thêm</i>
                    </a>
                  </div>
                </div>
                <?php } ?>
                <!---->               
              </div>
               <a href="javascript: void(0)" class="btn-prev-owl-angle-ttnb ">
                  <i class="fa fa-angle-left hvr-grow"></i>
               </a> 
               <a href="javascript: void(0)" class="btn-next-owl-angle-ttnb ">
                  <i class="fa fa-angle-right hvr-grow"></i>
               </a> 
            </div>

</div>
<!--Full Bai Dang Moi Nhat-->
<div class="full-baidangmoinhat-tt">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="line-spcct">
              <p>Bài Đăng Mới Nhất</p>
          </div>
        </div>
      </div> 
      <div class="row">
 
      <!--Test Pagination-->
      <?php foreach ($newsindex as $newsindex) { ?>
         <div class="col-sm-4 col-md-4">
          <div class="row">
            <div class="box-item-bdmn-tt clearfix">
              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="full-img-item-bdmn-tt">
                 <a href="<?php echo $this->url->get(); ?><?php echo $newsindex->Category_Alias; ?>/<?php echo $newsindex->News_Alias; ?>">
                 <img class="img-responsive" src="<?php echo $this->url->get(); ?>files/<?php echo $newsindex->News_Images; ?>" alt="<?php echo $newsindex->News_Alias; ?>"> 
                 </a>
                </div>
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="full-text-item-bdmn-tt">
                  <p class="title-bdmn-tt"><?php echo $newsindex->News_Title; ?></p>
                  <p class="content-bdmn-tt"><?php echo $newsindex->News_Summary; ?></p>
                  <p class="text-line-three-item">
                <a href="<?php echo $this->url->get(); ?><?php echo $newsindex->Category_Alias; ?>/<?php echo $newsindex->News_Alias; ?>"> Chi tiết <i class="fa fa-caret-right"></i></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>
        
      <!---->
      </div> 
      <!----> 
      <div class="row">
        <div class="col-md-12">
          <div class="full-paging-tintuc">
            <ul class="ul-paging clearfix">
              <?php if($tongsotrang>1){ ?>
              <?php if($tranghientai!=1){ ?>
              <li><a href="<?php echo $this->url->get(); ?>">First</a></li>
              <li><a href="<?php echo $this->url->get(); ?><?php if(isset($alias->Category_Alias)){echo $alias->Category_Alias;}?>?page=<?php echo $tranghientai-1;?>">Prev</a></li>
              <?php }
                 //Phân đoạn trang
                $begin = $tranghientai -2;
                if($begin <1 ){ $begin=1; }
                $end = $tranghientai +2;
                if($end > $tongsotrang){ $end = $tongsotrang; }
                  for($i=$begin; $i<=$end; $i++){
               ?>
             <li <?php if($i==$tranghientai){echo "class='active'";}?> > 
             <a href="<?php echo $this->url->get(); ?><?php if(isset($alias->Category_Alias)){echo $alias->Category_Alias;}?>?page=<?php echo $i;?>"><?php echo $i?></a></li>
            
              <?php }  if($tranghientai!=$tongsotrang){ ?>
                <li><a href="<?php echo $this->url->get(); ?><?php if(isset($alias->Category_Alias)){echo $alias->Category_Alias;}?>?page=<?php echo $tranghientai+1;?>">Next</a><li>
                <li><a href="<?php echo $this->url->get(); ?><?php if(isset($alias->Category_Alias)){echo $alias->Category_Alias;}?>?page=<?php echo $tongsotrang;?>">Last</a></li>
              <?php } }   ?>
             
            </ul>
          </div>
        </div>
      </div>
  </div>
</div>
<!--End Bai Dang Moi Nhat-->
</div>

<!--Header footer-->
<div class="full-header-footer-index">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="text-left-header-footer">
            <h4>Dạo một vòng quanh công ty của chúng tôi</h4>
            <p>Công ty Caribe chú trọng nâng cao giá trị sản phẩm, nâng cao thương hiệu của Qúy Doanh nghiệp thông qua mỗi sản phẩm mà chúng tôi mang đến cho quý vị, cũng như góp phần quảng bá thương hiệu của quý vị trên thị trường ngày càng cạnh tranh khốc liệt như hiện nay, giúp quý vị thành công hơn trong kinh doanh. Bởi “Sự thành công của khách hàng trong kinh doanh chính là niềm tự hào lớn nhất của chúng tôi”.
Chúng tôi rất cảm kích trước sự ủng hộ của quý vị, và hi vọng rằng tất cả mọi người, mọi doanh nghiệp sẽ có được một tương lai rộng mở và tươi sáng. Xin cảm ơn.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="video-container">
          <?php echo $this->tag->image(array('files/img-youtube.png', 'alt' => 'Khach hang', 'class' => 'img-responsive')); ?>
          <a class="various fancybox.iframe" href="https://www.youtube.com/embed/cObDn_ncjhA"><i class="fa fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->



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
</html>