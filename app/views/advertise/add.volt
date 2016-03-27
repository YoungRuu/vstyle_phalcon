
{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputName1" class="col-sm-2	">Add Advertise</label>
  </div>
  <div class="form-group">
    <label for="inputName1" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputName1" placeholder="Name" 
      name="advertise_name">
    </div>
  </div>

  <div class="form-group">
    <label for="inputName2" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-9">
      <textarea  type="text" rows="4" class="form-control" id="inputName2" placeholder="Description"  name="advertise_description"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputName3" class="col-sm-2 control-label">Url</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputName3" placeholder="Url" 
      name="advertise_url">
    </div>
  </div>
  
  <div class="form-group">
    <label for="news_images" class="col-sm-2 control-label">Images</label>
    <div class="col-sm-9">
      <div class="input-group">
          <input type="text" class="form-control img-text-input" readonly="">
          <span class="input-group-btn">
              <span class="btn btn-default btn-file btn-color-custom">Tải ảnh… <input type="file" name="advertise_image">
              </span>
          </span>
        </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputName5" class="col-sm-2 control-label">Position</label>
    <div class="col-sm-9">
       <select class="form-control" name="advertise_position">
        <option value="top-center">Top-Center</option>
        <option value="top-left">Top-Left</option>
        <option value="top-right">Top-Right</option>
        <option value="bottom-center">Bottom-Center</option>
        <option value="bottom-left">Bottom-Left</option>
        <option value="bottom-right">Bottom-Right</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">isActive?</label>
    <div class="col-sm-9">
      	<label class="radio-inline">
		  <input type="radio"  name="activeRadio" id="inlineRadio1" value="1">Active
		</label>
		<label class="radio-inline">
		  <input type="radio" checked name="activeRadio" id="inlineRadio2" value="0">Not Active
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