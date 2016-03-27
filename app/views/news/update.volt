{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<form class="form-horizontal" method="post" action="{{ url() }}news/update/{{ news.News_ID }}"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputName1" class="col-sm-2	">Update News</label>
  </div>
  <div class="form-group">
    <label for="inputnewstitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputnewstitle" value="{{ news.News_Title }}" placeholder="Title"  name="news_title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputnewssummary" class="col-sm-2 control-label">Summary</label>
    <div class="col-sm-9">
    <textarea name="news_summary" class="form-control" rows="4" id="inputnewssummary" placeholder="Summary">{{ news.News_Summary }}</textarea>
    </div>
  </div>
  
  <div class="form-group">
    <label for="news_images" class="col-sm-2 control-label">Images</label>
    <div class="col-sm-9">
        <div class="input-group">
          <img src="{{ url() }}files/{{ news.News_Images }}" class="img-responsive" 
          style="max-height:300px;" >
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-9 col-sm-offset-2">
      <div class="input-group">
          <input type="text" class="form-control img-text-input" readonly="" value="">
          <span class="input-group-btn">
              <span class="btn btn-default btn-file btn-color-custom">Tải ảnh… <input type="file" 
              name="news_images">
              </span>
          </span>
        </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputnewscontent" class="col-sm-2 control-label">Content</label>
    <div class="col-sm-9">
        <div class="input-group" style="display: block">
        <textarea  class="form-control" name="news_content">
          {{ news.News_Content }}
        </textarea>
    <script type="text/javascript">
        CKEDITOR.replace('news_content',{
          height: '200px',
        });
    </script>
        </div>
    </div>
  </div>
  

  <div class="form-group">
    <label for="inputnews_category_id" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-9">
      <select class="form-control" name="news_category_id">
        {% for listcate in listcateupdate  %}
          <option value='{{ listcate.Category_ID }}' 
          <?php if($news->Category_ID == $listcate->Category_ID){echo 'selected';} ?> >{{ listcate.Category_Name }} 
          </option>
        {% endfor %}
      </select>
    </div>
  </div>

 <!--  <div class="form-group">
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputnewscontent" value=""placeholder="Content"  >
    </div>
  </div> -->
  <div class="form-group">
    <label for="inputnewskeyword" class="col-sm-2 control-label">Keyword</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputnewskeyword" value="{{ news.News_Keyword }}"placeholder="Keyword"  name="news_keyword">
    </div>
  </div>

  <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">Hot?</label>
    <div class="col-sm-9">
      <label class="radio-inline">
      <input type="radio" name="activeHot" id="inlineRadio1" 
      value='<?php if($news->News_Hot == 1){echo "1";echo "'checked='checked" ;}else{echo '1';}?>'>Hot
      </label>
      <label class="radio-inline">
      <input type="radio" name="activeHot" id="inlineRadio2" 
      value='<?php if($news->News_Hot == 1){echo '0';}else{echo "0";echo"'checked='checked";}?>'> Not Hot
      </label>
    </div>
  </div>

  <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">isActive?</label>
    <div class="col-sm-9">
      <label class="radio-inline">
      <input type="radio" name="activeNews" id="inlineRadio3" 
      value='<?php if($news->News_isActive == 1){echo "1";echo "'checked='checked" ;}else{echo '1';}?>'>Active
      </label>
      <label class="radio-inline">
      <input type="radio" name="activeNews" id="inlineRadio4" 
      value='<?php if($news->News_isActive == 1){echo '0';}else{echo "0";echo"'checked='checked";}?>'> Not Active
      </label>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Edit</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
</form>	
{% endblock %}