
{% extends "layouts/layout.volt" %}
{% block contentnews %}
<div class="full-content-sanpham">
  <div class="container">
        <div class="row">
         <div class="col-md-12">
            <div class="title-page-top"><p><a href="{{ url() }}">Trang chủ</a> / Tin Tức</p></div>
         </div>
        </div>
<!--Full Bai Dang Moi Nhat Chi Tiet-->
		<div class="row">
			<div class="col-md-8">
				<div class="full-content-left-ttct title-head-ttskct">
					<div class="title-tintucchitiet"><h3>{{ news3title }}</h3></div>
					<p><i class="fa fa-calendar"></i>{{ news3date }}<span>/</span><i class="fa fa-eye"></i>{{ news3views }}</p>
					<div class="summary_quote">{{ news3summary }}</div>
					<img class="img-responsive" src="{{ url() }}files/{{ news3img }}" alt="">
					<p>{{ news3content }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="full-content-right-ttct">
					{% for newsct in news2 %}
					<div class="row">
			            <div class="box-item-bdmn-tt clearfix">
			              <div class="col-xs-4 col-sm-4 col-md-4">
			                <div class="full-img-item-bdmn-tt">
			                  <a href="{{ url() }}{{ catealias }}/{{ newsct.News_Alias }}">
			                <img class="img-responsive" src="{{ url()}}files/{{ newsct.News_Images }}" alt=""> </a>
			                </div>
			              </div>
			              <div class="col-xs-8 col-sm-8 col-md-8">
			                <div class="full-text-item-bdmn-tt">
			                  <p class="title-bdmn-tt">{{ newsct.News_Title }}</p>
			                  <p class="content-bdmn-tt">{{ newsct.News_Summary }}</p>
			                  <p class="text-line-three-item">
			                  <a href="{{ url() }}{{ catealias }}/{{ newsct.News_Alias }}" >Chi tiết <i class="fa fa-caret-right"></i></a>
			                  </p>
			                </div>
			              </div>
			            </div>
			        </div>
			       {% endfor %} 
			        
			        
				</div>
			</div>
		</div>
<!--End Bai Dang Moi Nhat Chi Tiet-->
  </div>
<!---->
</div>

<div class="full-feedback-user">
	<div class="container">
	  	<div class="rows">
	  		<div class="col-sm-8">
	  			<div class="block-title-feedback">Ý Kiến Bạn Đọc :</div>
	  			<div class="block-feedback-index">
				      {% for get in getfeedback %}
				  		<p><span class="sender">{{ get.Feedback_Sender }} :</span></p>
				  		<p>{{ get.Feedback_Content }} </p>
						<p><span class="timesend">{{ get.Feedback_Date }}</span></p>
					  {% endfor %}
	  			</div>
	  		</div>
	  	</div>
		<div class="row">
			<div class="col-sm-8">
				<form action="{{ url() }}{{ catealias }}/{{ news3alias }}" method="post" accept-charset="utf-8" id="form-sendfeedback" class="form-horizontal">
					<form class="form-horizontal" method="post">
					  <div class="form-group">
					    <div class="col-md-9">
					      <p id="result">{{ flash.output() }}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputName1" class="col-sm-12">Gửi Bình Luận</label>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputName1" placeholder="Sender *" 
					      name="Feedback_Sender">
					    </div>
					  </div>
						
					  <div class="form-group">
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="inputName3" placeholder="Email *" 
					      name="Feedback_Emailsender">
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-9">
					      <textarea  type="text" rows="4" class="form-control" id="inputName2" placeholder="Content *"  name="Feedback_Content"></textarea>
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-9">
					      <button type="submit" id="btn-sendfeedback" class="btn btn-default">Gửi</button>
					    </div>
					  </div>
				
				</form>
			</div>
		</div>
	</div>
</div>

{% endblock %}