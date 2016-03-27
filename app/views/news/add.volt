{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<form class="form-horizontal" method="post" action="{{ url() }}news/add" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputName1" class="col-sm-2	">Add News</label>
  </div>
    <div class="form-group">
    <label for="inputnewstitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputnewstitle" placeholder="Title"  
      name="news_title">
    </div>
  </div>

  <div class="form-group">
    <label for="inputnewssummary" class="col-sm-2 control-label">Summary</label>
    <div class="col-sm-9">
    <textarea name="news_summary" class="form-control" rows="4" id="inputnewssummary" placeholder="Summary"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="news_images" class="col-sm-2 control-label">Images</label>
    <div class="col-sm-9">
      <div class="input-group">
          <input type="text" class="form-control img-text-input" readonly="">
          <span class="input-group-btn">
              <span class="btn btn-default btn-file btn-color-custom">Tải ảnh… <input type="file" name="news_images">
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
          <option value='{{ listcate.Category_ID }}'>{{ listcate.Category_Name }}</option>
        {% endfor %}
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputnewskeyword" class="col-sm-2 control-label">Keyword</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputnewskeyword" value=""placeholder="Keyword" 
       name="news_keyword">
    </div>
  </div>

  <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">Hot?</label>
    <div class="col-sm-9">
      <label class="radio-inline">
      <input type="radio" name="activeHot" id="inlineRadio1" 
      value='1'>Hot
      </label>
      <label class="radio-inline">
      <input type="radio" name="activeHot" id="inlineRadio2" checked="checked" 
      value='0'> Not Hot
      </label>
    </div>
  </div>

  <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">isActive?</label>
    <div class="col-sm-9">
      <label class="radio-inline">
      <input type="radio" name="activeNews" id="inlineRadio3" checked="checked" 
      value='1'>Active
      </label>
      <label class="radio-inline">
      <input type="radio" name="activeNews" id="inlineRadio4" 
      value='0'> Not Active
      </label>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Add</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
</form>
{% endblock %}