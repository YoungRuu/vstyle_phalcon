<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Vstyle</title>
    {{ stylesheet_link('css/font.css')}}
    {{ stylesheet_link('css/bootstrap.css')}}
    {{ stylesheet_link('css/font-awesome.min.css')}}
    {{ stylesheet_link('css/Pe-icon-7-stroke.css')}}
    {{ stylesheet_link('js/plugin/owl-carousel/owl.carousel.css')}}
    {{ stylesheet_link('js/plugin/owl-carousel/owl.theme.css')}}
    {{ stylesheet_link('js/plugin/owl-carousel/owl.transitions.css')}}
    {{ stylesheet_link('css/reset_set_me.css')}}
    {{ stylesheet_link('css/style.css')}}
    {{ stylesheet_link('css/hover.css')}}
    {{ stylesheet_link('css/responsive.css')}}
    {{ stylesheet_link('js/plugin/wow/animate.css')}}
    {{ stylesheet_link('js/plugin/fancybox/jquery.fancybox.css')}}
    {{ stylesheet_link('js/plugin/fancybox/jquery.fancybox-buttons.css')}}
    {{ stylesheet_link('js/plugin/fancybox/jquery.fancybox-thumbs.css')}}


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
        <a class="navbar-brand navbar-logo hidden-md" href="{{ url() }}">
        {{ image("images/logo-vstyle.png", "alt": "logo vstyle" ,"class":"img-responsive" ) }}
        </a>
      </div>
                
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <div class="full-menu">
          <ul class="nav navbar-nav navbar-right navbar-menu">
            {% for cate in category %}
          <li><a href="{{ url() }}{{ cate.Category_Alias }}" class="hvr-underline-from-center edit-hvr-underline"> {{ cate.Category_Name }} </a></li>
            {% endfor %}
          </ul>
          <p><span><i class="fa fa-phone"></i></span>0123 456 789 / 0987 654 321</p>

          <ul class="nav navbar-nav navbar-language">
              <li>
                <a href="#">
              {{ image("images/lang-vi.jpg", "alt": "language vi" ,"class":"img-responsive" ) }}
                </a>
              </li>
              <li>
                <a href="#">
                  {{ image("images/lang-us.jpg", "alt": "language vi" ,"class":"img-responsive" ) }}
                </a>
              </li>
              <li>
                <a href="#">
                  {{ image("images/lang-japan.jpg", "alt": "language vi" ,"class":"img-responsive" ) }}
                </a>
              </li>
            </ul>
        </div><!--End Full-menu-->
      </div><!-- /.navbar-collapse -->

    </div>
  </nav>
<!--Slide TOP Index-->
<!--*********************************-->
{% block contentnews %}

{% endblock %}
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
        <!-- {{ image("images/img-map.png", "alt": "language vi" ,"class":"img-responsive" ) }} -->
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

    {{ javascript_include('js/jquery.min.js')}}
    {{ javascript_include('js/bootstrap.min.js')}}
    {{ javascript_include('js/plugin/owl-carousel/owl.carousel.js')}}
    {{ javascript_include('js/slide.js')}}
    {{ javascript_include('js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}
    {{ javascript_include('js/plugin/nicescroll/jquery.nicescroll.min.js')}}
    {{ javascript_include('js/plugin/wow/wow.min.js')}}
    {{ javascript_include('js/masonry.pkgd.min.js')}}
    {{ javascript_include('js/imagesloaded.pkgd.js')}}
    {{ javascript_include('js/app.js')}}
    {{ javascript_include('js/plugin/fancybox/jquery.fancybox.pack.js')}}
    {{ javascript_include('js/plugin/fancybox/jquery.fancybox-buttons.js')}}
    {{ javascript_include('js/plugin/fancybox/jquery.fancybox-thumbs.js')}}
    {{ javascript_include('js/plugin/fancybox/jquery.mousewheel-3.0.6.pack.js')}}
    
   </body>
</html>