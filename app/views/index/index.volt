

{% extends "layouts/layout.volt" %}
{% block contentnews %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
	<div class="full-content-sanpham">
  <div class="container">
        <div class="row">
         <div class="col-md-12">
            <div class="title-page-top"><p><a href="{{ url() }}">Trang chủ</a> / {{ newstitle }}</p></div>
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
              {% for newsttnb in news %}

                <div class="item clearfix">
                <div class="img-slide-ttnb-left">
                      <img class="img-responsive" src="{{ url()}}files/{{ newsttnb.News_Images }}" alt="">
                    </div>
                <div class="text-slide-ttnb-right clearfix">
                      <h3>{{ newsttnb.News_Title }}</h3>
                      <p>{{ newsttnb.News_Summary }}</p>
                    <a href="{{ url() }}{{ newsttnb.Category_Alias }}/{{ newsttnb.News_Alias }}" class="hvr-bounce-to-left edit-hvr-bounce-to-left" ><i class="fa fa-search"></i> Xem Thêm</i>
                    </a>
                  </div>
                </div>
                {% endfor %}
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
      {% for newsindex in newsindex %}
         <div class="col-sm-4 col-md-4">
          <div class="row">
            <div class="box-item-bdmn-tt clearfix">
              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="full-img-item-bdmn-tt">
                 <a href="{{ url() }}{{ newsindex.Category_Alias }}/{{ newsindex.News_Alias }}">
                 <img class="img-responsive" src="{{ url()}}files/{{ newsindex.News_Images }}" alt="{{ newsindex.News_Alias }}"> 
                 </a>
                </div>
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="full-text-item-bdmn-tt">
                  <p class="title-bdmn-tt">{{ newsindex.News_Title }}</p>
                  <p class="content-bdmn-tt">{{ newsindex.News_Summary }}</p>
                  <p class="text-line-three-item">
                <a href="{{ url() }}{{ newsindex.Category_Alias }}/{{ newsindex.News_Alias }}"> Chi tiết <i class="fa fa-caret-right"></i></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    {% endfor %}
        
      <!---->
      </div> 
      <!----> 
      <div class="row">
        <div class="col-md-12">
          <div class="full-paging-tintuc">
            <ul class="ul-paging clearfix">
              <?php if($tongsotrang>1){ ?>
              <?php if($tranghientai!=1){ ?>
              <li><a href="{{ url() }}">First</a></li>
              <li><a href="{{ url() }}<?php if(isset($alias->Category_Alias)){echo $alias->Category_Alias;}?>?page=<?php echo $tranghientai-1;?>">Prev</a></li>
              <?php }
                 //Phân đoạn trang
                $begin = $tranghientai -2;
                if($begin <1 ){ $begin=1; }
                $end = $tranghientai +2;
                if($end > $tongsotrang){ $end = $tongsotrang; }
                  for($i=$begin; $i<=$end; $i++){
               ?>
             <li <?php if($i==$tranghientai){echo "class='active'";}?> > 
             <a href="{{ url() }}<?php if(isset($alias->Category_Alias)){echo $alias->Category_Alias;}?>?page=<?php echo $i;?>"><?php echo $i?></a></li>
            
              <?php }  if($tranghientai!=$tongsotrang){ ?>
                <li><a href="{{ url() }}<?php if(isset($alias->Category_Alias)){echo $alias->Category_Alias;}?>?page=<?php echo $tranghientai+1;?>">Next</a><li>
                <li><a href="{{ url() }}<?php if(isset($alias->Category_Alias)){echo $alias->Category_Alias;}?>?page=<?php echo $tongsotrang;?>">Last</a></li>
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
          {{ image("files/img-youtube.png", "alt": "Khach hang" ,"class":"img-responsive" ) }}
          <a class="various fancybox.iframe" href="https://www.youtube.com/embed/cObDn_ncjhA"><i class="fa fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->


{% endblock %}